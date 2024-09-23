<?php

namespace App\Services;

use App\Account;
use App\CcountEstrictions;
use App\Repositories\InvoicesRepository;
use App\PurchaseInvoiceDetails;
use App\PurchaseInvoices;
use App\Sales_invoices;
use App\Store;

class InvoiceService
{
    protected $invoicesRepository;
    protected $model;
    protected $PurchaseInvoiceDetails;
    protected $classNameModel;
    protected $InvoicesSaveAccountEstriction;
    public function __construct($model, $InvoiceCategory)
    {
        $this->invoicesRepository = new InvoicesRepository($model);
        $this->model = $model;
        $this->InvoicesSaveAccountEstriction = new InvoicesSaveAccountEstriction($InvoiceCategory);
    }


    public function storeInvoice(array $request, $type = NULL, $model, $route = NULL)
    {

        // $this->getServiceInvoiceByName($this->model);
        $data = "";
        $data = $request;
        // dd($data);
        $data['type'] = $type;
        $len  = count($data['test']) / 12;
        $end   = 0;
        $start = 0;
        $group = "";
        $unit  = [];

        $group = $this->returnDataInvoiceDetails($data, $len, $start);

        $data['old_balance'] = $request['final_total'];
        $data['total']       = $request['final_total'];
        $data['total_b']     = $request['total'];
        $Invoices = $this->invoicesRepository->storeInvoice($data, $type, $this->model);
        $this->InvoicesSaveAccountEstriction->storeFirstInvoiceAccountEstriction($Invoices);
        // dd($group);
        // 'descunt'                    => $index[3],
        foreach ($group as $index) {

            $arr = explode("-", $index[2]);
            $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();
            $this->InvoicesSaveAccountEstriction->storeSecoundInvoiceAccountEstriction($Invoices, $index);
            $qunInstore = $store->qun - ($arr[2] * $index[1]);
            $store->qun = $qunInstore; // Update the 'qun' field
            $store->save();
            $this->returnInvoiceDetails($index, $Invoices, $arr, $type);
        }

        return $route;
    }

    public function returnInvoiceDetails($index, $Invoices, $arr, $type = NULL)
    {
        $unit = [
            'product_id'    => $index[0],
            'qun'           => $index[1],
            'price_unit_id' => $index[2],
            'qunXunit'      => $arr[2] * $index[1],
            'price_unit'    => $arr[0],
            'unit_id'       => $arr[1],
            'withDescunt'   => $index[4],
            'descunt'       => $index[5],
            'type_descount' => $index[6],
            'price_before'  => $index[7],
            'tax'           => $index[8],
            'tax_value'     => $index[9],
            'price_after'   => $index[10],
            'purchase_invoice_id'        => $Invoices->id,
            'type' => 2
        ];
        // PurchaseInvoiceDetails::create($unit);
        $this->invoicesRepository->InvoiceDetails($unit);
    }

    public function returnDataInvoiceDetails($data, $len, $start)
    {
        $group = [];
        for ($i = 0; $i < $len; $i++) {

            $group[] = array_slice($data['test'], $start, 11, false);

            $start += 11;
        }
        return $group;
    }


    public function getServiceInvoiceByName($name, $arguments)
    {
        // dd($name, $arguments);
        $classNameModel = basename(str_replace('\\', '/', get_class($this->model)));
        $className = "App\\Repositories\\AccountEstrictionRepository" . ucfirst($classNameModel);
        if (class_exists($className)) {
            return new $className(); // Instantiate the class and return the object
        }

        // Throw an exception if the class does not exist
        throw new \Exception("Class $className does not exist");
    }

    public function update($id, $data, $type = NULL, $route = NULL)
    {
        $Invoices = $this->model::find($id);
        $input = $data;
        $data['old_balance'] = $input['final_total'];
        $data['total']       = $input['final_total'];
        $data['total_b']     = $input['total'];
        $InvoiceDetails = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', $type)->get();
        if (isset($data['old'])) {
            $this->restoreQtnProduct($InvoiceDetails, $type,$Invoices, $data);
        } else {
            $InvoiceDetails->delete();
        }

        if (isset($data['test'])){
            $this->storeWithNewInvoice($data, $type, $Invoices);
        }
        $Invoices->update($data);
    }

    public function restoreQtnProduct($InvoiceDetails, $type, $Invoices, $data)
    {

        // dd($data['old']);


        // old data here

        $len  = count($data['old']) / 12;
        $endold   = 0;
        $startold = 0;
        $groupold = [];
        $unitold  = [];
        $producs  = [];
        $oldcounter = 0;

        for ($i = 0; $i < $len; $i++) {

            $groupold[] = array_slice($data['old'], $startold, 12, false);

            $startold += 12;
        }
        // dd($groupold);
        // get deleted array

        $QuotationDetails = $InvoiceDetails->where('type', $type)->pluck('id');
        // dd($QuotationDetails);
        foreach ($groupold as $index) {
            echo "dasdas";
            $arr    = explode("-", $index[3]);


            $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();
            $qunold =  $InvoiceDetails->where('type', 2)->first();
            $oldarr = explode("-", $qunold->price_unit_id);
            $resNew = ($index[2] * $arr[2]);
            if ($Invoices->site_id == $data['site_id']) {

                // dd("site not change");
                if ($qunold->qunXunit > $resNew) {
                    // dd("f1") ;
                    $result = $qunold->qunXunit - $resNew;

                    $qunInstore = $store->qun + $result;
                    $store->qun = $qunInstore; // Update the 'qun' field
                    $store->save();
                } else if ($qunold->qunXunit < $resNew) {
                    // dd("f2");
                    $result = $resNew - $qunold->qunXunit;
                    // dd($result);
                    $qunInstore = $store->qun - $result;
                    $store->qun = $qunInstore; // Update the 'qun' field
                    $store->save();
                }
            } else {
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();



                $qunInstore = $store->qun - $resNew;
                $store->qun = $qunInstore; // Update the 'qun' field
                $store->save();

                // dd($store);


                $store2 = Store::where("site_id", $Invoices->site_id)->where("product_id", $index[0])->first();



                $qunInstore2 = $store2->qun + $resNew;
                $store2->qun = $qunInstore2; // Update the 'qun' field
                $store2->save();
                // dd($store2);
            }



            $new[] = $index[1];

            $unitold = [
                'product_id' => $index[0],
                'qun' => $index[2],
                'price_unit_id' => $index[3],
                'price_unit' => $arr[0],
                'unit_id' => $arr[1],
                'withDescunt' => $index[5],
                'descunt' => $index[6],
                'type_descount' => $index[7],
                'price_before' => $index[8],
                'tax' => $index[9],
                'tax_value' => $index[10],
                'price_after' => $index[11],
                'type' => 2,
                'qunXunit' => $resNew,
            ];

            PurchaseInvoiceDetails::where("id", $index[1])
                ->where('type', 2)
                ->update($unitold);

            echo $oldcounter;
        }

        $elementsToDelete = array_diff($QuotationDetails->toArray(), $new);
        PurchaseInvoiceDetails::whereIn('id', $elementsToDelete)->delete();
    }

    public function storeWithNewInvoice( $request, $type = NULL,  $Invoices)
    {
        $data = "";
        $data = $request;
        // dd($data);
        $data['type'] = $type;
        $len  = count($data['test']) / 12;
        $end   = 0;
        $start = 0;
        $group = "";
        $unit  = [];

        $group = $this->returnDataInvoiceDetails($data, $len, $start);

        $data['old_balance'] = $request['final_total'];
        $data['total']       = $request['final_total'];
        $data['total_b']     = $request['total'];
        $this->InvoicesSaveAccountEstriction->storeFirstInvoiceAccountEstriction($Invoices);
        // dd($group);
        // 'descunt'                    => $index[3],
        foreach ($group as $index) {

            $arr = explode("-", $index[2]);
            $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();
            $this->InvoicesSaveAccountEstriction->storeSecoundInvoiceAccountEstriction($Invoices, $index);
            $qunInstore = $store->qun - ($arr[2] * $index[1]);
            $store->qun = $qunInstore; // Update the 'qun' field
            $store->save();
            $this->returnInvoiceDetails($index, $Invoices, $arr, $type);
        }

        return $Invoices;
    }
}
