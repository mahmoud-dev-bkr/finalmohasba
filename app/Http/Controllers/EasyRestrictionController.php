<?php

namespace App\Http\Controllers;

use App\Account;
use App\EasyRestriction;
use App\accunt;
use App\CcountEstrictions;
use App\Journal;
use Illuminate\Http\Request;

class EasyRestrictionController extends Controller
{






    public function getEasyRestriction(){
        $EasyRestriction = EasyRestriction::latest('id');
        $data = Datatables()->eloquent($EasyRestriction)
        ->addColumn('action' , function($EasyRestriction){
            return view('EasyRestriction.actions' , ['type' => 'action' , 'EasyRestriction' => $EasyRestriction]);
        })

        ->editColumn('type', function ($EasyRestriction){
            if ($EasyRestriction->type == 1) {
                return  "تحركات اموال";
            } elseif ($EasyRestriction->type == 2) {
                return  " اضافة راس مال";
            }  elseif ($EasyRestriction->type == 3) {
                return  " اهلاك اصل ثابت";
            }  elseif ($EasyRestriction->type == 4) {
                return  "سحب المالك";
            }  elseif ($EasyRestriction->type == 5) {
                return  "توزيع الارباح ";
            }  elseif ($EasyRestriction->type == 5) {
                return  " محاسبة الرواتب ";
            }
        })

        ->editColumn('id_account_from', function ($EasyRestriction) {
            $accunt = Account::where('id', $EasyRestriction->id_account_from)->first();
            return $accunt->name;
        })
        ->editColumn('id_account_to', function ($EasyRestriction) {
            $accunt = Account::where('id', $EasyRestriction->id_account_to)->first();
            return $accunt->name;
        })


        ->toJson();



        return $data;
    }
    public function index()
    {
        $EasyRestriction = EasyRestriction::all();
        return view('EasyRestriction.index', compact(
            [
                'EasyRestriction'
            ]
        ));
    }

    public function tenant()
    {
     return view('EasyRestriction.add_EasyRestriction');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $EasyRestriction_id = $id;
        $title      = "";
        if ($EasyRestriction_id == 1) {
            $title = "تحركات اموال";
        } elseif ($EasyRestriction_id == 2) {
            $title = "اضافة راس مال ";
        }  elseif ($EasyRestriction_id == 3) {
            $title = "اهلاك اصل ثابت";
        }  elseif ($EasyRestriction_id == 4) {
            $title = "سحب المالك";
        }  elseif ($EasyRestriction_id == 5) {
            $title = "توزيع ارباح";
        }  elseif($EasyRestriction_id == 6){
            $title = " محاسبة الرواتب";
        }
        $accunts      = Account::all();
        // dd($accunt);
        return view('EasyRestriction.create', compact('EasyRestriction_id', 'accunts',  'title'));
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

        $EasyRestriction = EasyRestriction::create($data);
        $CcountEstrictions = [
            'account_id' => $request->id_account_to,
            'type' => '5',
            'account_type' => $EasyRestriction->id,
            'ammount_from' => 0,
            'ammount_to'   => $request->amunt,
        ];
        CcountEstrictions::create($CcountEstrictions);
        $CcountEstrictions = [
            'account_id' => $request->id_account_from,
            'type' => '5',
            'account_type' => $EasyRestriction->id,
            'ammount_from' => $request->amunt,
            'ammount_to'   => 0,
        ];
        CcountEstrictions::create($CcountEstrictions);
        $Journal = [];
        $Journal[] = [
            'journal_id' => $EasyRestriction->id,
            'type' => 5,
            'acount_from' => $request->id_account_from,
            'acount_to'   => $request->id_account_to,
        ];
        Journal::insert($Journal);
        return redirect()->route('EasyRestriction.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EasyRestriction  $EasyRestriction
     * @return \Illuminate\Http\Response
     */
    public function show(Request $EasyRestriction)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EasyRestriction  $EasyRestriction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $EasyRestriction = EasyRestriction::find($id);
        $EasyRestriction_id = $id;
        $title      = "";
        if ($EasyRestriction_id == 1) {
            $title = "تحركات اموال";
        } elseif ($EasyRestriction_id == 2) {
            $title = "اضافة راس مال ";
        }  elseif ($EasyRestriction_id == 3) {
            $title = "اهلاك اصل ثابت";
        }  elseif ($EasyRestriction_id == 4) {
            $title = "سحب المالك";
        }  elseif ($EasyRestriction_id == 5) {
            $title = "توزيع ارباح";
        }  elseif($EasyRestriction_id == 6){
            $title = " محاسبة الرواتب";
        }
        $accunts      = Account::all();
        // dd($accunt);
        return view('EasyRestriction.update', compact('EasyRestriction_id', 'accunts',  'title', 'EasyRestriction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EasyRestriction  $EasyRestriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $EasyRestriction = EasyRestriction::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $EasyRestriction->update($data);
        return redirect()->route('EasyRestriction.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EasyRestriction  $EasyRestriction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $EasyRestriction = EasyRestriction::find($id);
            $deleted =  $EasyRestriction->delete();
            if (!$deleted) {
                return redirect()->route('EasyRestriction.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('EasyRestriction.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('EasyRestriction.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
