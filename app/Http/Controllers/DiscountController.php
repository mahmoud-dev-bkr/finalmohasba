<?php

namespace App\Http\Controllers;

use App\discount;
use App\employe;
use App\Employee;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function getdiscount(){
        $discount = discount::latest('id');
        $data = Datatables()->eloquent($discount)
        ->addColumn('action' , function($discount){
            return view('discount.actions' , ['type' => 'action' , 'discount' => $discount]);
        })

        ->editColumn('functionary', function ($discount) {
            $employe = Employe::where('id', $discount->functionary)->first();
            return $employe->name_en;
        })

        ->toJson();


        return $data;
    }
    public function index()
    {
        $discount = discount::all();
        return view('discount.index', compact(
            [
                'discount'
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
        $employe = employe::all();
        return view('discount.create', compact([
            'employe'
        ]));
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

        if ($request->pointsdiscount == 'on') {
            $data['pointsdiscount'] = 1;
        } else {
            $data['pointsdiscount'] = 0;
        }
        discount::create($data);
        // fill appointments em ployees
        return redirect()->route('discount.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Request $discount)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discount = discount::FindOrFail($id);
        return view('discount.update', compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discount = discount::findOrFail($id);
        $data = $request->all();

        if ($request->pointsdiscount == 'on') {
            $data['pointsdiscount'] = 1;
        } else {
            $data['pointsdiscount'] = 0;
        }
        //update in db
        $discount->update($data);
        return redirect()->route('discount.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $discount = discount::find($id);
            $deleted =  $discount->delete();
            if (!$deleted) {
                return redirect()->route('discount.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('discount.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('discount.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
