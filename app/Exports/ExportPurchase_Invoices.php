<?php

namespace App\Exports;

use App\PurchaseInvoices;
use App\Supplier;
use App\Site;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportPurchase_Invoices implements FromCollection, WithHeadings
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    public function collection()    {  
        $resultInvoice = [];
        $query = PurchaseInvoices::query();                
        if ($this->request->code) {  
            
            $query->where('code', 'like', '%' . $this->request->code . '%');        
            
        }        
        if ($this->request->site)
            $query->where('site_id',$this->request->site);
            
            
        if($this->request->name) {
            $Client = Supplier::where('name','like','%'. $this->request->name . "%")->first();
            
             $query->where('id_supplers', $Client->id);
        }
        
        if($this->request->status ==  4) {
            
            $query->where('total',0 );
        }
        if($this->request->status ==  5) {
            
            $query->where('total',"!=", 0 );
            $query->whereColumn('total', '<', 'old_balance');
        }
        
        
        
        if ($this->request->date == 1) {
            if ($this->request->start_date)
                $query->where('Date_start', '>=' ,$this->request->start_date);
            
            if ($this->request->end_date )
                $query->where('Date_start','<=', $this->request->end_date);
        
        } 
        
        
        elseif ($this->request->date == 2) {
             if ($this->request->start_date )
                $query->where('Date_end', '>=' ,$this->request->start_date);
            
            if ($this->request->end_date )
                $query->where('Date_end','<=', $this->request->end_date);
        
             
        } 
        
        else {
            
            if ($this->request->start_date)
                    $query->where('Date_start', '>=' ,$this->request->start_date);
                
            if ($this->request->end_date )
                    $query->where('Date_start','<=', $this->request->end_date);
        }
        $invoices = $query->get();  
        foreach($invoices as $inv) {
            $status = "";
            $site   = "";
            $client = "";
            $PurchaseInvoicesTotal  = $inv->total;
            $PurchaseInvoicesold    = $inv->old_balance;
            // get a status
            if ($PurchaseInvoicesTotal == 0) {
                $status =  "تم دفع الفاتورة";
            } elseif ($PurchaseInvoicesold > $PurchaseInvoicesTotal) {
                $status =  " دفعت جزئيا";
            } elseif ($PurchaseInvoicesTotal == 0) {
              $status =  "تمت الدفع"  ;
            } else {
                $status =  "موافق عليها";
            }
            // get Site
            $site = Site::where("id", $inv->site_id)->first();
            // get client
            $client = Supplier::where("id", $inv->id_supplers)->first();
                
            // Populate the $resultInvoice array with the desired values
            $resultInvoice[] = [
                'code' => $inv->code,
                'description' => $inv->Note,
                'client' => $client->name ?? "",
                'status' => $status,
                'Data_Start' => $inv->Date_start,
                'Date_end'  => $inv->Date_end,
                'site'      =>   $site->name_ar ?? "",
                'total_with_tax' => $inv->total_with_tax,
                'tax_value' => $inv->tax_value,
                'old_balance' => $inv->old_balance,
                'payment' => $inv->total,
                'total' => $inv->total,
                'Terms_Condition' => $inv->Terms_Condition
            ];
                
            
        }
        return collect($resultInvoice);
    }
    public function headings(): array
    {
        return [
            'المرجع',
            'الوصف',
            'الجهة',
            'الحالة',
            'تاريخ الإصدار',
            'تاريخ الاستحقاق',
            'الموقع',
            'الاجمالي قبل الضريبة',
            'قيمة الضريبة',
            'الاجمالي',
            'المبلغ المدفوع',
            'المبلغ المستحق',
            'الشروط والأحكام',
        ];
    }
}
