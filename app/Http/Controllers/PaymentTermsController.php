<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentTerms;

class PaymentTermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PaymentTerms = PaymentTerms::all();
        return view('PaymentTerms.index', compact('PaymentTerms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PaymentTerms.create');
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



        PaymentTerms::create($data);
        // fill appointments em ployees
        return redirect()->route('PaymentTerms.index')->with(['success' => 'تم الحفظ بنجاح']);
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
        $PaymentTerms = PaymentTerms::find($id);
        return view('PaymentTerms.update', compact('PaymentTerms'));
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
        $PaymentTerms = PaymentTerms::find($id);
        $PaymentTerms->update($data);
        return redirect()->route('PaymentTerms.index')->with(['success' => 'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PaymentTerms = PaymentTerms::find($id);
        $PaymentTerms->delete();
        return redirect()->route('PaymentTerms.index')->with(['success' => 'تم الحذف بنجاح']);
    }
    function getPaymentTermss(){
        $PaymentTerms = PaymentTerms::latest('id');
        $data = Datatables()->eloquent($PaymentTerms)
        ->addColumn('action' , function($PaymentTerms){
            return view('PaymentTerms.actions' , ['type' => 'action' , 'PaymentTerms' => $PaymentTerms]);
        })
        ->editColumn('status', function ($PaymentTerms){
            if ($PaymentTerms->status == 1) {
                return "مفعل";
            } else {
                return "غير مفعل";
            }
        })
        ->toJson();


        return $data;
    }
}
