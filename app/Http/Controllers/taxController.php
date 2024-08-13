<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tax;
use App\Account;

class taxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   $tax = tax::all();
   return view('tax.index',compact('tax'));
    }




    function gettaxs(){
        $tax = tax::latest('id');
        $data = Datatables()->eloquent($tax)
        ->addColumn('action' , function($tax){
            return view('tax.actions' , ['type' => 'action' , 'tax' => $tax]);
        })
        ->editColumn('status', function ($tax){
            if ($tax->status == 1) {
                return "مفعل";
            } else {
                return "غير مفعل";
            }
        })
        ->toJson();


        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account = Account::all();
        return  view('tax.create',compact('account'));
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

        if ($request->code == 1) {
            $data['code'] = 's';
        } elseif ($request->code == 2) {
            $data['code'] = 'z';
        }elseif ($request->code == 3) {
            $data['code'] = 'e';
        }elseif ($request->code == 4) {
            $data['code'] = 'o';
        }

        tax::create($data);
        // fill appointments em ployees
        return redirect()->route('tax.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $tax = tax::find($id);

        $account = Account::all();
        return  view('tax.update',compact('tax','account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tax = tax::find($id);
        $tax->update($data);
        return redirect()->route('tax.index')->with(['success' => 'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tax = tax::find($id);
        $tax->delete();
        return redirect()->route('tax.index')->with(['success' => 'تم الحذف بنجاح']);
    }
}
