<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Stocktaking;
use App\Site;
use App\Account;

class Stocktakingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::where('company_id', auth()->user()->comapny_id)->get();
        $Stocktaking = Stocktaking::where('company_id', auth()->user()->comapny_id)->get();

        return view('Stocktaking.index', compact(
            [

                'sites',
                'Stocktaking',

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
        $products  = Product::all();
        $accountPlus = Account::all();
        $accountMin  = Account::all();
        return view('Stocktaking.create', compact('products', 'accountPlus', 'accountMin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
