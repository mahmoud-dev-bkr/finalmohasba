<?php

namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\DailyAccountingEntries;
use App\Site;
use Illuminate\Http\Request;

class DailyAccountingEntriesController extends Controller
{




    public function getDailyAccountingEntries(){

        $DailyAccountingEntries = DailyAccountingEntries::latest('id');
        $data = Datatables()->eloquent($DailyAccountingEntries)
        ->addColumn('action' , function($DailyAccountingEntries){
            return view('DailyAccountingEntries.actions' , ['type' => 'action' , 'DailyAccountingEntries' => $DailyAccountingEntries]);
        })




        ->toJson();



        return $data;
    }
    public function index()
    {
        $DailyAccountingEntries = DailyAccountingEntries::all();
        return view('DailyAccountingEntries.index', compact(
            [
                'DailyAccountingEntries'
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

        $title      = "قيد يدوي";
        $Sites      = Site::all();
        $accounts    = Account::all();
        return view('DailyAccountingEntries.create', compact(['Sites', 'title', 'accounts']));
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

        $len  = count($data['test']) / 4;
        $data['line'] = $len;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];
        $DailyAccountingEntries = DailyAccountingEntries::create($data);
        for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 4, false);

           $start += 4;

        }
        // dd($group);
        foreach ($group as $index) {
            if (count($data['test']) >= 4) {

                $unit[] = [
                    'account_id'                 => $index[0],
                    'type'                       => 7,
                    'account_type'               => $DailyAccountingEntries->id,
                    'ammount_from'               => $index[1],
                    'ammount_to'                 => $index[2],

                ];
            }
        }

        CcountEstrictions::insert($unit);

        return redirect()->route('DailyAccountingEntries.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DailyAccountingEntries  $DailyAccountingEntries
     * @return \Illuminate\Http\Response
     */
    public function show(Request $DailyAccountingEntries)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DailyAccountingEntries  $DailyAccountingEntries
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DailyAccountingEntries = DailyAccountingEntries::find($id);

        $title      = "قيد يدوي";
        $Sites      = Site::all();
        $accounts    = Account::all();
        // dd($accunt);
        return view('DailyAccountingEntries.update', compact('Sites', 'accunts',  'title', 'DailyAccountingEntries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DailyAccountingEntries  $DailyAccountingEntries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $DailyAccountingEntries = DailyAccountingEntries::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $DailyAccountingEntries->update($data);
        return redirect()->route('DailyAccountingEntries.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DailyAccountingEntries  $DailyAccountingEntries
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $DailyAccountingEntries = DailyAccountingEntries::find($id);
            $deleted =  $DailyAccountingEntries->delete();
            if (!$deleted) {
                return redirect()->route('DailyAccountingEntries.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('DailyAccountingEntries.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('DailyAccountingEntries.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }

}
