<?php 

namespace App\Services;

use App\Account;
use App\CcountEstrictions;
use App\Repositories\InvoicesRepository;
use App\PurchaseInvoiceDetails;
use App\Sales_invoices;
use App\Store;

class InvoiceService
{
    protected $invoicesRepository;
    protected $model;
    protected $PurchaseInvoiceDetails;
    protected $classNameModel;
    protected $InvoicesSaveAccountEstriction;
    public function __construct( $model, $InvoiceCategory)
    {
        $this->invoicesRepository = new InvoicesRepository($model);
        $this->model = $model;
        $this->classNameModel = basename(str_replace('\\', '/', get_class($this->model)));
        $this->InvoicesSaveAccountEstriction = new InvoicesSaveAccountEstriction($InvoiceCategory);
    }


    public function storeInvoice(array $request, $type = NULL, $model, $route = NULL)
    {

        // $this->getServiceInvoiceByName($this->model);
        $data = "";
        $data = $request;
        // dd($data);
        $data['type'] = 2;
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

    public function returnInvoiceDetails($index, $Invoices, $arr, $type = NULL) {
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

}