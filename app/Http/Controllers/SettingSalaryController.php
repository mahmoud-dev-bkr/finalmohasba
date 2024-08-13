<?php

namespace App\Http\Controllers;

use App\SettingSalary;
use Illuminate\Http\Request;

class SettingSalaryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select(){
        return view('SettingSalary.select');
    }

     function getSettingSalary(){
        $SettingSalary = SettingSalary::latest('id');
        $data = Datatables()->eloquent($SettingSalary)
        ->addColumn('action' , function($SettingSalary){
            return view('SettingSalary.actions' , ['type' => 'action' , 'SettingSalary' => $SettingSalary]);
        })

        ->toJson();


        return $data;
    }
    public function index()
    {
        $SettingSalary = SettingSalary::all();
        return view('SettingSalary.index', compact(
            [
                'SettingSalary'
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
        return view('SettingSalary.create');
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
        SettingSalary::create($data);
        // fill appointments em ployees
        return redirect()->route('SettingSalary.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SettingSalary  $SettingSalary
     * @return \Illuminate\Http\Response
     */
    public function show(Request $SettingSalary)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SettingSalary  $SettingSalary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $SettingSalary = SettingSalary::FindOrFail($id);
        return view('SettingSalary.update', compact('SettingSalary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SettingSalary  $SettingSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $SettingSalary = SettingSalary::findOrFail($id);
        $data = $request->all();
        //update in db
        $SettingSalary->update($data);
        return redirect()->route('SettingSalary.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SettingSalary  $SettingSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $SettingSalary = SettingSalary::find($id);
            $deleted =  $SettingSalary->delete();
            if (!$deleted) {
                return redirect()->route('SettingSalary.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('SettingSalary.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('SettingSalary.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }

}
