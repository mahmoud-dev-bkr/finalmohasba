<?php

namespace App\Http\Controllers;

use App\bonds;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class bondsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function getbonds(){
        $bonds = bonds::latest('id');
        $data = Datatables()->eloquent($bonds)
        ->addColumn('action' , function($bonds){
            return view('Sales.bonds.actions' , ['type' => 'action' , 'bonds' => $bonds]);
        })
        ->editColumn('status', function ($bonds){
            if ($bonds->status == 1) {
                return "مفعل";
            } else {
                return "غير مفعل";
            }
        })
        ->toJson();


        return $data;
    }
    public function index()
    {
        $bonds = bonds::all();
        return view('Sales.bonds.index', compact(
            [
                'bonds'
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
        return view('Sales.bonds.create');
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

        if ($request->pointsbonds == 'on') {
            $data['pointsbonds'] = 1;
        } else {
            $data['pointsbonds'] = 0;
        }
        bonds::create($data);
        // fill appointments em ployees
        return redirect()->route('bonds.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bonds  $bonds
     * @return \Illuminate\Http\Response
     */
    public function show(Request $bonds)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bonds  $bonds
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bonds = bonds::FindOrFail($id);
        return view('Sales.bonds.update', compact('bonds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bonds  $bonds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bonds = bonds::findOrFail($id);
        $data = $request->all();

        if ($request->pointsbonds == 'on') {
            $data['pointsbonds'] = 1;
        } else {
            $data['pointsbonds'] = 0;
        }
        //update in db
        $bonds->update($data);
        return redirect()->route('bonds.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bonds  $bonds
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $bonds = bonds::find($id);
            $deleted =  $bonds->delete();
            if (!$deleted) {
                return redirect()->route('bonds.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('bonds.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('bonds.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
