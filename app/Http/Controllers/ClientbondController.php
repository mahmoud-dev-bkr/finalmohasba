<?php

namespace App\Http\Controllers;

use App\Account;
use App\Sales_invoices;
use App\CcountEstrictions;
use App\ReturnsSalesInvoices;
use App\Client;
use App\Clientbond;
use App\ClientBondsDitails;
// use App\Account;
use App\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ClientbondController extends Controller
{

    public function getClientbond(Request $request){
        $Clientbond = Clientbond::query();
        
        
             
        if ($request->code)
            $Clientbond->where('code','like', '%'. $request->code . '%');
            
            
        if($request->name) {
            $Client = Client::where('name','like','%'. $request->name . "%")->first();
            
             $Clientbond->where('	id_customers', $Client->id);
        }
        
        if($request->status > 0) 
            $Clientbond->where('status', $request->status);
        
        
    
        if ($request->start_date)
            $Clientbond->where('Date', '>=' ,$request->start_date);
        
        if ($request->end_date )
            $Clientbond->where('Date','<=', $request->end_date);
        
 
        
        
        
        
        
        
        $data = Datatables()->eloquent($Clientbond->latest('id'))
        ->addColumn('action' , function($Clientbond){
            return view('Sales.Clientbond.actions' , ['type' => 'action' , 'Clientbond' => $Clientbond]);
        })
        ->editColumn('id_customers', function ($Clientbond){
            $Client = Client::where('status', 1)->where('id', $Clientbond->id_customers)->first();
            return $Client->name ?? '';
        })

        ->editColumn('id_Account', function ($Clientbond){
            $Account = Account::where('id', $Clientbond->id_Account)->first();
            return $Account->name ?? '';
        })
        
        
        ->editColumn('status', function ($Clientbond){
            // $Account = Account::where('id', $Clientbond->id_Account)->first();
            
            if ($Clientbond->status == 1) {
                return "غير مستعمل";    
            } else if ($Clientbond->status == 2) {
                return "مستعمل جزائي";    
                
            } else if ($Clientbond->status == 3 ) {
                return "مستعمل كامل";
            }
            
            // return $Account->name ?? '';
        })
        
        
        ->editColumn('type', function ($Clientbond){
            if ($Clientbond->type == 1) {
                return "قبض";
            }  else {
                return "صرف";
            }
        })

        ->toJson();



        return $data;
    }
    public function index()
    {
        $Clientbond = Clientbond::all();
        return view('Sales.Clientbond.index', compact(
            [
                'Clientbond'
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
         $Clientbond = Clientbond::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1 ;
        } else {
            $count = 1;
        }

       $Clients  = Client::where('status', 1)->get();
       $accounts = Account::where("transactions", 1)->get();
        return view('Sales.Clientbond.create', compact('Clients', 'accounts', 'count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        

        $data = $request->all();
        $Clientbond = Clientbond::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1 ;
        } else {
            $count = 1;
        }
        if ($data['last_invoice'] == "on")
        {
            if ($data['type'] == 1) {
                
                $invoice = Sales_invoices::where('total', '!=', 0)
                    ->where('id_supplers', $data['id_customers'])
                    ->orderBy('created_at', 'asc')
                    ->first();
    
                $totalAmount = $invoice->total - $data['Amount'] ;
                
                 $Sales_invoices = Sales_invoices::findOrFail($invoice->id);
                
                 $Sales_invoices->update(['total'=>$totalAmount]);
                
                
                // Update the total amount
                    
                $data['PurchaseInvoices_id'] = $invoice->id;
                $data['status'] = 3;
                $Clientbond = Clientbond::create($data); 
                
            } else {
                // dd("dasdas");
                $invoice = ReturnsSalesInvoices::where('total', '!=', 0)
                    ->where('id_supplers', $data['id_customers'])
                    ->orderBy('created_at', 'asc')
                    ->first();
                // dd($invoice);
                $totalAmount = $invoice->total - $data['Amount'] ;
                
                 $Sales_invoices = ReturnsSalesInvoices::findOrFail($invoice->id);
                
                 $Sales_invoices->update(['total'=>$totalAmount]);
                
                
                // Update the total amount
                    
                $data['PurchaseInvoices_id'] = $invoice->id;
                $data['status'] = 3;
                $data['type_returns'] = 0;
                $Clientbond = Clientbond::create($data); 
                
            }
            
            
        } else {
            if ($data['type'] == 1) {
                $counter = 0;
                $total   = 0;
                $status  = 0;
                $ides    = $data['ids'];
                $amounts = $data['Amounts'];
                foreach( $ides as $invoices ) {
                    
                    if ($amounts[$counter] != "") {
                        $Sales_invoices = Sales_invoices::findOrFail($ides[$counter]);
                        $totalAmount = $Sales_invoices->total - $amounts[$counter];
                        // dd($totalAmount);
                        $Sales_invoices->update(['total'=>$totalAmount]);
                        
                        
                        // create in a new table ditails bounds
                        
                        $ClientBondsDitails = [
                            'code' => $data['code'], 
                            'id_customers' => $data['id_customers'],
                            'Date' => $data['Date'],
                            'id_Account' => $data['id_Account'],
                            'type' => 1,
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
                $Clientbond = Clientbond::create($data);
                
            } else {
                $counter = 0;
                $total   = 0;
                $status  = 0;
                $ides    = $data['ids'];
                $amounts = $data['Amounts'];
                foreach( $ides as $invoices ) {
                    
                    if ($amounts[$counter] != "") {
                        $Sales_invoices = ReturnsSalesInvoices::findOrFail($ides[$counter]);
                        $totalAmount = $Sales_invoices->total - $amounts[$counter];
                        // dd($totalAmount);
                        $Sales_invoices->update(['total'=>$totalAmount]);
                        
                        
                        // create in a new table ditails bounds
                        
                        $ClientBondsDitails = [
                            'code' => $data['code'], 
                            'id_customers' => $data['id_customers'],
                            'Date' => $data['Date'],
                            'id_Account' => $data['id_Account'],
                            'type' => 1,
                            'Note' => $data['Note'],
                            'Amount' => $amounts[$counter], 
                            'PurchaseInvoices_id' => $ides[$counter], 
                            'clientbons_id' => $count, 
                            'type_returns'  => 0
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
                $Clientbond = Clientbond::create($data); 
            }
            
            
        } 
        
        
        
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
        return redirect()->route('Clientbond.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientbond  $Clientbond
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientbond  $Clientbond
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Clientbond = Clientbond::FindOrFail($id);
        $Clients   = Client::all();
        $accounts  = Account::all();
        return view('Sales.Clientbond.update', compact('Clientbond', 'Clients', 'accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientbond  $Clientbond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Clientbond = Clientbond::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $Clientbond->update($data);
        return redirect()->route('Clientbond.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientbond  $Clientbond
     * @return \Illuminate\Http\Response
     */
     
    public function print($id){
         
      $Clientbonds = Clientbond::find($id);
      
      
      $Client = Client::where('id', $Clientbonds->id_customers)->first();
      $account = Account::where('id', $Clientbonds->id_Account)->first();
      $Sales_invoices = Sales_invoices::find($Clientbonds->PurchaseInvoices_id);
      $type           = $Clientbonds->PurchaseInvoices_id == "" ? 1 : 2;
      $ClientBondsDitails  = ClientBondsDitails::where("clientbons_id", $id)->get();
    //   dd($ClientBondsDitails);
      return view('Sales.Clientbond.print', compact('Client', 'Sales_invoices', 'Clientbonds','account', 'type', 'ClientBondsDitails'));
      
    }
    
    public function show($id){
         
      $Clientbonds = Clientbond::find($id);
      
      
      $Client = Client::where('id', $Clientbonds->id_customers)->first();
      $account = Account::where('id', $Clientbonds->id_Account)->first();
      $Sales_invoices = Sales_invoices::find($Clientbonds->PurchaseInvoices_id);
      $type           = $Clientbonds->PurchaseInvoices_id == "" ? 1 : 2;
      $ClientBondsDitails  = ClientBondsDitails::where("clientbons_id", $Clientbonds->id)->get();
      return view('Sales.Clientbond.show', compact('Client', 'Sales_invoices', 'Clientbonds','account', 'type', 'ClientBondsDitails'));
      
    }
     
     
     
    public function destroy($id)
    {
        try {
            $Clientbond = Clientbond::find($id);
            $Sales_invoices = Sales_invoices::find($Clientbond->PurchaseInvoices_id);
            if($Sales_invoices) {
                $totalAmount = $Sales_invoices->total + $Clientbond->Amount;
                
                $Sales_invoices->update(['total'=>$totalAmount]);
                
            }
            $deleted =  $Clientbond->delete();
            if (!$deleted) {
                return redirect()->route('Clientbond.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Clientbond.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Clientbond.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }

}
