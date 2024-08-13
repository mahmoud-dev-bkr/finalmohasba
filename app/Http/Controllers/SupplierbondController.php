<?php

namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\Journal;
use App\ClientBondsDitails;
use App\Supplier;
use App\PurchaseInvoices;
use App\ReturnsPurchaseInvoices;
use App\Supplierbond;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SupplierbondController extends Controller
{
    public function getSupplierbond(Request $request){
        $Supplierbond = Supplierbond::query();
        
        
               
        if ($request->code)
            $Supplierbond->where('code','like', '%'. $request->code . '%');
            
            
        if($request->name) {
            $Client = Supplier::where('name','like','%'. $request->name . "%")->first();
            
             $Supplierbond->where('id_supplers', $Client->id);
        }
        
        if($request->status > 0)
            $Supplierbond->where('status', $request->status);
        
        
    
        if ($request->start_date)
            $Supplierbond->where('Date', '>=' ,$request->start_date);
        
        if ($request->end_date )
            $Supplierbond->where('Date','<=', $request->end_date);
    
    
        
        
        
        
        $data = Datatables()->eloquent($Supplierbond->latest('id'))
        ->addColumn('action' , function($Supplierbond){
            return view('Procurement.Supplierbond.actions' , ['type' => 'action' , 'Supplierbond' => $Supplierbond]);
        })
        ->editColumn('id_supplers', function ($Supplierbond){
            $Supplier = Supplier::where('status', 1)->where('id', $Supplierbond->id_supplers)->first();
            return optional($Supplier)->name;
        })

        ->editColumn('id_Account', function ($Supplierbond){
            $Account = Account::where('id', $Supplierbond->id_Account)->first();
            return optional($Account)->name;
        })
        
        
      ->editColumn('status', function ($Supplierbond){
            // $Account = Account::where('id', $Clientbond->id_Account)->first();
            
            if ($Supplierbond->status == 1) {
                return "غير مستعمل";    
            } else if ($Supplierbond->status == 2) {
                return "مستعمل جزائي";    
                
            } else if ($Supplierbond->status == 3 ) {
                return "مستعمل كامل";
            }
            
            // return $Account->name ?? '';
        })
        
        // ->editColumn('status', function ($Supplierbond){
        //     if ($Supplierbond->type == 1) {
        //         return "قبض";
        //     }  else {
        //         return "صرف";
        //     }
        // })

        ->toJson();



        return $data;
    }
    public function index()
    {
        $Supplierbond = Supplierbond::all();
        return view('Procurement.Supplierbond.index', compact(
            [
                'Supplierbond'
            ]
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $Clientbond = Supplierbond::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1 ;
        } else {
            $count = 1;
        }

       $Clients  = Supplier::where('status', 1)->get();
       $accounts = Account::where("transactions", 1)->get();
        return view('Procurement.Supplierbond.create', compact('Clients', 'accounts', 'count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        // $rules = [
        //     'code' => 'required',
        //     'id_customers' => 'required',
        //     'Date' => 'required',
        //     'id_Account' => 'required',
        //     'Note' => 'required',
        //     'Amount' => 'required',
        // ];

        // $messages = [
        //     'required' => 'The :attribute field is required.',
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $data = $request->all();
        $Clientbond = Supplierbond::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1 ;
        } else {
            $count = 1;
        }
        if ($data['last_invoice'] == "on")
        {
            if ($data['type'] == 0) {
                
                $invoice = PurchaseInvoices::where('total', '!=', 0)
                    ->where('id_supplers', $data['id_supplers'])
                    ->orderBy('created_at', 'asc')
                    ->first();
    
                $totalAmount = $invoice->total - $data['Amount'] ;
                
                 $Sales_invoices = PurchaseInvoices::findOrFail($invoice->id);
                
                 $Sales_invoices->update(['total'=>$totalAmount]);
                
                
                // Update the total amount
                    
                $data['PurchaseInvoices_id'] = $invoice->id;
                $data['status'] = 3;
                $Clientbond = Supplierbond::create($data); 
                
            } else {
                // dd("dasdas");
                $invoice = ReturnsPurchaseInvoices::where('total', '!=', 0)
                    ->where('id_supplers', $data['id_supplers'])
                    ->orderBy('created_at', 'asc')
                    ->first();
                // dd($invoice);
                $totalAmount = $invoice->total - $data['Amount'] ;
                
                 $Sales_invoices = ReturnsPurchaseInvoices::findOrFail($invoice->id);
                
                 $Sales_invoices->update(['total'=>$totalAmount]);
                
                
                // Update the total amount
                    
                $data['PurchaseInvoices_id'] = $invoice->id;
                $data['status'] = 3;
                $data['type_returns'] = 0;
                $Clientbond = Supplierbond::create($data); 
                
            }
            
            
        } else {
            if ($data['type'] == 0) {
                // dd("type == 0");
                $counter = 0;
                $total   = 0;
                $status  = 0;
                $ides    = $data['ids'];
                $amounts = $data['Amounts'];
                foreach( $ides as $invoices ) {
                    
                    if ($amounts[$counter] != "") {
                        $Sales_invoices = PurchaseInvoices::findOrFail($ides[$counter]);
                        $totalAmount = $Sales_invoices->total - $amounts[$counter];
                        // dd($totalAmount);
                        $Sales_invoices->update(['total'=>$totalAmount]);
                        
                        
                        // create in a new table ditails bounds
                        
                        $ClientBondsDitails = [
                            'code' => $data['code'], 
                            'id_customers' => $data['id_supplers'],
                            'Date' => $data['Date'],
                            'id_Account' => $data['id_Account'],
                            'type' => 2,
                            'Note' => $data['Note'],
                            'Amount' => $amounts[$counter], 
                            'PurchaseInvoices_id' => $ides[$counter], 
                            'clientbons_id' => $count
                        ];
                        
                        $ClientBondsDitails = ClientBondsDitails::create($ClientBondsDitails);
                        $total += $amounts[$counter];
                        $status = 1;
                    }
                    
                    
                    $counter += 1;
                    
                }
                // dd ($total);
                if ($status == 0) {
                    $data['status'] = 1; // غير مستعمله
                }  if ($total != $data['Amount'] && $total != 0) {
                    $data['status'] = 2; // مستعمل جزئي
                }  if ($total == $data['Amount']) {
                     $data['status'] = 3; // مستعمل كامل
                }  if ($status == 1) {
                    $data['multi'] = 1;
                }
                // dd($amounts);
                $Clientbond = Supplierbond::create($data);
                
            } else {
                $counter = 0;
                $total   = 0;
                $status  = 0;
                $ides    = $data['ids'];
                $amounts = $data['Amounts'];
                foreach( $ides as $invoices ) {
                    
                    if ($amounts[$counter] != "") {
                        $Sales_invoices = ReturnsPurchaseInvoices::findOrFail($ides[$counter]);
                        $totalAmount = $Sales_invoices->total - $amounts[$counter];
                        // dd($totalAmount);
                        $Sales_invoices->update(['total'=>$totalAmount]);
                        
                        
                        // create in a new table ditails bounds
                        
                        $ClientBondsDitails = [
                            'code' => $data['code'], 
                            'id_customers' => $data['id_supplers'],
                            'Date' => $data['Date'],
                            'id_Account' => $data['id_Account'],
                            'type' => 2,
                            'Note' => $data['Note'],
                            'Amount' => $amounts[$counter], 
                            'PurchaseInvoices_id' => $ides[$counter], 
                            'clientbons_id' => $count, 
                            'type_returns'  => 1
                        ];
                        
                        $ClientBondsDitails = ClientBondsDitails::create($ClientBondsDitails);
                        $total += $amounts[$counter];
                        $status = 1;
                    }
                    
                    
                    $counter += 1;
                    
                }
                // dd ($total);
                if ($status == 0) {
                    $data['status'] = 1; // غير مستعمله
                }  if ($total != $data['Amount'] && $total != 0) {
                    $data['status'] = 2; // مستعمل جزئي
                }  if ($total == $data['Amount']) {
                     $data['status'] = 3; // مستعمل كامل
                }  if ($status == 1) {
                    $data['multi'] = 1;
                }
                // dd($amounts);
                $data['type_returns'] = 0;
                $Clientbond = Supplierbond::create($data); 
            }
            
            
        }
        
        
        // 
        
        
        /*$accountClaint = Account::where('code', '2101')->first();
        $accountTo     = Account::where('id', $request->id_Account)->first();
        $totalClaint   = $accountClaint->amount  + $request->Amount;
        $totalTo       = $accountTo->amount   -  $request->Amount;
        $accountClaint->update([
            'amount' =>  $totalClaint    
        ]);
        $accountTo->update([
            'amount' =>  $totalTo    
        ]);
        // fill appointments em ployees
        $CcountEstrictions = [
            'account_id' => $request->id_Account,
            'type' => '4',
            'account_type' => $Clientbond->id,
            'ammount_from' => $request->Amount,
            'ammount_to'   => 0,
        ];
        CcountEstrictions::create($CcountEstrictions);
        $CcountEstrictions = [
            'account_id' => $accountClaint->id,
            'type' => '4',
            'account_type' => $Clientbond->id,
            'ammount_from' => 0,
            'ammount_to'   => $request->Amount,
        ];
        CcountEstrictions::create($CcountEstrictions);
        // fill appointments em ployees
        $Journal = [];
        $Journal[] = [
            'journal_id' => $Clientbond->id,
            'type' => 4,
            'acount_from' => $request->id_Account,
            'acount_to' => 2,
        ];
        Journal::insert($Journal);*/
        return redirect()->route('Supplierbond.index')->with(['success' => 'تم الحفظ بنجاح']);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Supplierbond  $Supplierbond
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplierbond  $Supplierbond
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Supplierbond = Supplierbond::FindOrFail($id);
        $Suppliers   = Supplier::all();
        $accounts  = Account::all();
        return view('Procurement.Supplierbond.update', compact('Supplierbond', 'Suppliers', 'accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplierbond  $Supplierbond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Supplierbond = Supplierbond::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $Supplierbond->update($data);
        return redirect()->route('Supplierbond.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplierbond  $Supplierbond
     * @return \Illuminate\Http\Response
     */
     
 
    
    
    
    
      public function print($id){
         
      $Clientbonds = Supplierbond::find($id);
      
      
      $Client = Supplier::where('id', $Clientbonds->id_supplers)->first();
      $account = Account::where('id', $Clientbonds->id_Account)->first();
      $Sales_invoices = PurchaseInvoices::find($Clientbonds->PurchaseInvoices_id);
      $type           = $Clientbonds->PurchaseInvoices_id == "" ? 1 : 2;
      $ClientBondsDitails  = ClientBondsDitails::where("clientbons_id", $id)->where('type', 2)->get();
    //   dd($ClientBondsDitails);
      return view('Procurement.Supplierbond.print', compact('Client', 'Sales_invoices', 'Clientbonds','account', 'type', 'ClientBondsDitails'));
      
    }
    
    public function show($id){
         
      $Clientbonds = Supplierbond::find($id);
      
      
      $Client = Supplier::where('id', $Clientbonds->id_supplers)->first();
      $account = Account::where('id', $Clientbonds->id_Account)->first();
      $Sales_invoices = PurchaseInvoices::find($Clientbonds->PurchaseInvoices_id);
      $type           = $Clientbonds->PurchaseInvoices_id == "" ? 1 : 2;
      $ClientBondsDitails  = ClientBondsDitails::where("clientbons_id", $Clientbonds->id)->where('type', 2)->get();
    //   dd($ClientBondsDitails);
     
   return view('Procurement.Supplierbond.show', compact('Client', 'Sales_invoices', 'Clientbonds','account', 'type', 'ClientBondsDitails'));
      
    }
     
     
     
    public function destroy($id)
    {
        try {
            $Supplierbond = Supplierbond::find($id);
            $Sales_invoices = PurchaseInvoices::find($Supplierbond->PurchaseInvoices_id);
            if($Sales_invoices) {
                $totalAmount = $Sales_invoices->total + $Supplierbond->Amount;
                
                $Sales_invoices->update(['total'=>$totalAmount]);
                
            }
            $deleted =  $Supplierbond->delete();
            if (!$deleted) {
                return redirect()->route('Supplierbond.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Supplierbond.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Supplierbond.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
