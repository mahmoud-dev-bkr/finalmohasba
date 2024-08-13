<?php

namespace App\Http\Controllers;

use App\reward;
use App\employe;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function getreward(){
        $reward = reward::latest('id');
        $data = Datatables()->eloquent($reward)
        ->addColumn('action' , function($reward){
            return view('reward.actions' , ['type' => 'action' , 'reward' => $reward]);
        })
        ->editColumn('status', function ($reward){
            if ($reward->status == 1) {
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
        $reward = reward::all();
        return view('reward.index', compact(
            [
                'reward'
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
        return view('reward.create', compact([
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

        if ($request->pointsreward == 'on') {
            $data['pointsreward'] = 1;
        } else {
            $data['pointsreward'] = 0;
        }
        reward::create($data);
        // fill appointments em ployees
        return redirect()->route('reward.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function show(Request $reward)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reward = reward::FindOrFail($id);
        return view('reward.update', compact('reward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reward = reward::findOrFail($id);
        $data = $request->all();

        if ($request->pointsreward == 'on') {
            $data['pointsreward'] = 1;
        } else {
            $data['pointsreward'] = 0;
        }
        //update in db
        $reward->update($data);
        return redirect()->route('reward.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $reward = reward::find($id);
            $deleted =  $reward->delete();
            if (!$deleted) {
                return redirect()->route('reward.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('reward.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('reward.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
