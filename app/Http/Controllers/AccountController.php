<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getAccount(){
        $Account = Account::latest('id');
        $data = Datatables()->eloquent($Account)
        ->addColumn('action' , function($Account){
            return view('Account.actions' , ['type' => 'action' , 'Account' => $Account]);
        })


        ->toJson();



        return $data;
    }
    public function getAccountajax($id) {
        $Account = Account::find($id);
        return response()->json($Account);
    }
    public function index()
    {
            $Accounts = Account::tree();

            return view('Account.index', compact(
                [
                    'Accounts'
                ]
            ));
    }
    public function sub_account() {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


       $Accounts = Account::all();
        return view('Account.create', compact('Accounts'));
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
        if ($request->parent_id != 0) {
            $Account = Account::findOrFail($request->parent_id);
            $count_child = [
                'count_child' => $Account->count_child + 1
            ];
            $Account->update($count_child);
        }

        Account::create($data);

        // fill appointments em ployees
        return redirect()->route('Account.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $Account
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Account)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $Account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Account = Account::FindOrFail($id);

        return view('Account.update', compact('Account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $Account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Account = Account::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $Account->update($data);
        return redirect()->route('Account.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $Account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Account = Account::find($id);
            $deleted =  $Account->delete();
            if (!$deleted) {
                return redirect()->route('Account.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Account.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Account.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }

}
