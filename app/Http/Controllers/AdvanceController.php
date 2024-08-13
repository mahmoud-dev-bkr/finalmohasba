<?php

namespace App\Http\Controllers;
use App\advance;
use App\employe;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AdvanceController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     function getadvance(){
        $advance = advance::latest('id');
        $data = Datatables()->eloquent($advance)
        ->addColumn('action' , function($advance){
            return view('advance.actions' , ['type' => 'action' , 'advance' => $advance]);
        })

        ->toJson();


        return $data;
    }
    public function index()
    {
        $advance = advance::all();
        return view('advance.index', compact(
            [
                'advance'
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
        return view('advance.create', compact([
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

        if ($request->pointsadvance == 'on') {
            $data['pointsadvance'] = 1;
        } else {
            $data['pointsadvance'] = 0;
        }
        advance::create($data);
        // fill appointments em ployees
        return redirect()->route('advance.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advance  $advance
     * @return \Illuminate\Http\Response
     */
    public function show(Request $advance)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advance  $advance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advance = advance::FindOrFail($id);
        return view('advance.update', compact('advance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advance  $advance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $advance = advance::findOrFail($id);
        $data = $request->all();

        if ($request->pointsadvance == 'on') {
            $data['pointsadvance'] = 1;
        } else {
            $data['pointsadvance'] = 0;
        }
        //update in db
        $advance->update($data);
        return redirect()->route('advance.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advance  $advance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $advance = advance::find($id);
            $deleted =  $advance->delete();
            if (!$deleted) {
                return redirect()->route('advance.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('advance.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('advance.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
