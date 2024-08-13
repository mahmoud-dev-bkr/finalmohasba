<?php

namespace App\Http\Controllers;

use App\Account;
use App\ManuProductOrder;
use App\ManutOrder;
use App\Product;
use App\Site;
use Illuminate\Http\Request;

class ManutOrderController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function getManutOrder(){
        $ManutOrder = ManutOrder::query();
        
        // if($request->name) 
        //     $ManutOrder->where('name', 'like', '%'. $request->name . '%')
        //     ->orWhere('name_ar', 'like', '%' . $request->name . '%');
            
        
        $data = Datatables()->eloquent($ManutOrder->latest('id'))
        ->addColumn('action' , function($ManutOrder){
            return view('ManutOrder.actions' , ['type' => 'action' , 'ManutOrder' => $ManutOrder]);
        })
        ->editColumn('id_location', function ($ManutOrder) {
            $Site = Site::where('id', $ManutOrder->id_location)->first();
            return optional($Site)->name_en;
        })
        ->editColumn('id_Account', function ($ManutOrder) {
            $Inventory = Account::where('id', $ManutOrder->id_Account)->first();
            return optional($Inventory)->name;
        })

        ->toJson();


        return $data;
    }
    public function index()
    {
        $ManutOrder = ManutOrder::all();
        return view('ManutOrder.index', compact(
            [
                'ManutOrder'
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
        $Inventory = Account::all();
        $Site      = Site::all();
        $products  = Product::where('type', 1)->get();
        return view('ManutOrder.create', compact(['Inventory', 'Site', 'products']));
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
        $len  = count($data['test']) / 2;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];
       for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 2, false);

           $start += 2;

        }

        $ManutOrder = ManutOrder::create($data);
        // dd($data);
        foreach ($group as $index) {
            $unit[] = [
                'id_product'            => $index[0],
                'Qun'                   => $index[1],
                'id_Manu_order'         => $ManutOrder->id,
            ];
        }

        ManuProductOrder::insert($unit);
        return redirect()->route('ManutOrder.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManutOrder  $ManutOrder
     * @return \Illuminate\Http\Response
     */
    public function show(Request $ManutOrder)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManutOrder  $ManutOrder
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ManutOrder = ManutOrder::FindOrFail($id);
        $ManuProductOrder = ManuProductOrder::where('id_Manu_order',$id)->get();
        $Inventory = Account::all();
        $Site      = Site::all();
        $products  = Product::where('type', 1)->get();
        return view('ManutOrder.update', compact(['Inventory','ManutOrder', 'products', 'Site', 'ManuProductOrder']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManutOrder  $ManutOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ManutOrder = ManutOrder::findOrFail($id);
        $data = $request->all();

        // sync
        //update in db
        $ManutOrder->update($data);
        return redirect()->route('ManutOrder.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManutOrder  $ManutOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $ManutOrder = ManutOrder::find($id);
            $deleted =  $ManutOrder->delete();
            if (!$deleted) {
                return redirect()->route('ManutOrder.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('ManutOrder.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('ManutOrder.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }

}
