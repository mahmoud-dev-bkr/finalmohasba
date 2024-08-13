<?php

namespace App\Http\Controllers;


use App\drop;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class DropController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select(){
        return view('drop.select');
    }

     function getdrop(){
        $drop = drop::latest('id');
        $data = Datatables()->eloquent($drop)
        ->addColumn('action' , function($drop){
            return view('drop.actions' , ['type' => 'action' , 'drop' => $drop]);
        })
        ->editColumn('status', function ($drop){
            if ($drop->status == 1) {
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
        $drop = drop::all();
        return view('drop.index', compact(
            [
                'drop'
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
        return view('drop.create');
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

        if ($request->pointsdrop == 'on') {
            $data['pointsdrop'] = 1;
        } else {
            $data['pointsdrop'] = 0;
        }
        drop::create($data);
        // fill appointments em ployees
        return redirect()->route('drop.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\drop  $drop
     * @return \Illuminate\Http\Response
     */
    public function show(Request $drop)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\drop  $drop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drop = drop::FindOrFail($id);
        return view('drop.update', compact('drop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\drop  $drop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $drop = drop::findOrFail($id);
        $data = $request->all();

        if ($request->pointsdrop == 'on') {
            $data['pointsdrop'] = 1;
        } else {
            $data['pointsdrop'] = 0;
        }
        //update in db
        $drop->update($data);
        return redirect()->route('drop.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\drop  $drop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $drop = drop::find($id);
            $deleted =  $drop->delete();
            if (!$deleted) {
                return redirect()->route('drop.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('drop.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('drop.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
