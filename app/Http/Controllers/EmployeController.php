<?php

namespace App\Http\Controllers;

use App\Employe;
use App\Exports\ExportEmploye;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use App\Imports\EmployeeImport;
use App\site;

class EmployeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function getemployes(){
        $employe = Employe::latest('id');
        $data = Datatables()->eloquent($employe)
        ->addColumn('action' , function($employe){
            return view('employes.actions' , ['type' => 'action' , 'employe' => $employe]);
        })

        ->toJson();


        return $data;
    }
    public function index()
    {
        $employe = Employe::all();
        return view('employes.index', compact(
            [
                'employe'
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
        $sites = site::all();
        return view('employes.create', compact('sites'));
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

        if ($request->pointsemploye == 'on') {
            $data['pointsemploye'] = 1;
        } else {
            $data['pointsemploye'] = 0;
        }
        Employe::create($data);
        // fill appointments em ployees
        return redirect()->route('employe.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Request $employe)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = Employe::FindOrFail($id);
        return view('employes.update', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employe = Employe::findOrFail($id);
        $data = $request->all();

        if ($request->pointsemploye == 'on') {
            $data['pointsemploye'] = 1;
        } else {
            $data['pointsemploye'] = 0;
        }
        //update in db
        $employe->update($data);
        return redirect()->route('employe.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $employe = Employe::find($id);

            return redirect()->route('employe.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('employe.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
    public function exportData () {
        return "a7a";
    }
}
