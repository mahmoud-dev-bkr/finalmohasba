<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inventory = Inventory::all();
        return view('inventory.index', ['Inventory' => $Inventory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
    public function getInventory(Request $request)
    {
        $Inventory = Inventory::query();

        $Inventory = $this->filtter($Inventory, $request);

        return $Inventory;
    }

    public function filtter($Inventory,  $request)
    {
        

        if ($request->date)
            $Inventory->where('date', $request->date);

            
        return $data = Datatables()->eloquent($Inventory->latest())
            ->addColumn('action', function ($Inventory) {
                $premation = $Inventory->total == $Inventory->old_balance ? 'ok' : 'notEdit';
                $is_done   = $Inventory->total == 0 ? 'notDeleted' : 'ok';
                return view('inventory.actions', ['type' => 'action', 'Inventory' => $Inventory, 'premation' => $premation, 'is_done' => $is_done]);
            })
        ->toJson();
    }
}
