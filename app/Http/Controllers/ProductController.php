<?php

namespace App\Http\Controllers;

use App\Account;
use App\Item;
use App\Product;
use App\ProductUint;
use App\ProductUintPrices;
use App\Uint;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    public function subAjaxUnit(Request $request) {
        $input = $request->all();
        $unit = Uint::create($input);
        $units = Uint::all();
        return response()->json($units);
    }


    public function subAjaxItem(Request $request) {
        $input = $request->all();
        $unit = Item::create($input);
        return response()->json(['success'=>$unit->id]);
    }



    public function getUnit() {
        $unit = Uint::all();
        return response()->json($unit);
    }

    public function getProduct(Request $request){
        $Product = Product::query();
        
        if ($request->code > 0)
           $Product->where('serial_number', 'like', '%'. $request->code . '%');

        
        if ($request->name_id)
            // dd(request()->name_id);
            $Product->where('name_ar', 'like', '%'.$request->name_id.'%')->orWhere('name_en', 'like', '%' . $request->name_id . '%');
            

        
        if ($request->barcode_id > 0)
            $Product->where('barCode','like','%'. $request->barcode_id."%");

        
        if ($request->item > 0)
            $Product->where('id_des', request()->item );

        
        
        
        
        $data = Datatables()->eloquent($Product->latest())
        ->addColumn('action' , function($Product){
            return view('Product.actions' , ['type' => 'action' , 'Product' => $Product]);
        })

        ->editColumn('type', function ($Product){
            if ($Product->type == 1) {
                return  "منتج";
            } elseif ($Product->type == 2) {
                return  "منتج مجمع";
            }  elseif ($Product->type == 3) {
                return  "مادة اولية";
            }  elseif ($Product->type == 4) {
                return  "خدمة";
            }  elseif ($Product->type == 5) {
                return  "مصروف";
            }
        })

        ->editColumn('id_unit', function ($Product){
            $unit = Uint::where('id', $Product->id_unit)->first();
            return  optional($unit)->name;
        })
        ->editColumn('id_des',  function ($Product){
            $item = Item::where('id', $Product->id_des)->first();
            if ($Product->id_des == 0) {
                return "رائيسي";
            }
            return optional($item)->name;
        })

        ->toJson();



        return $data;
    }
    public function getItemDataTable(Request $request){
        $Product = Item::query();
        
        $data = Datatables()->eloquent($Product->latest())
        // ->addColumn('action' , function($Product){
        //     return view('Product.actions' , ['type' => 'action' , 'Product' => $Product]);
        // })


        ->toJson();



        return $data;
    }
    
    
    public function getUnitDataTable(Request $request){
        $Product = Uint::query();
        
        $data = Datatables()->eloquent($Product->latest())
        // ->addColumn('action' , function($Product){
        //     return view('Product.actions' , ['type' => 'action' , 'Product' => $Product]);
        // })


        ->toJson();



        return $data;
    }
    
    
    
    public function index()
    {
        $Product = Product::all();
        $Item    = Item::all();
        return view('Product.index', compact(
            [
                'Product' ,
                'Item'
            ]
        ));
    }
    public function itemIndex()
    {
        $Product = Item::all();
        $Item    = Item::all();
        return view('Product.item', compact(
            [
                'Product' ,
                'Item'
            ]
        ));
    }
    
    public function unitIndex()
    {
        $Product = Uint::all();
        $Item    = Item::all();
        return view('Product.unit', compact(
            [
                'Product' ,
                'Item'
            ]
        ));
    }
    
    public function createUnit()
    {
        $Product = Uint::all();
        $Item    = Item::all();
        return view('Product.createUnit', compact(
            [
                'Product' ,
                'Item'
            ]
        ));
    }
    public function createItem()
    {
        $Product = Uint::all();
        $Item    = Item::all();
        return view('Product.CreateItem', compact(
            [
                'Product' ,
                'Item'
            ]
        ));
    }

    public function tenant()
    {
        return view('Product.add-product');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $product_id = $id;
        $title      = "";
        if ($product_id == 1) {
            $title = "منتج";
        } elseif ($product_id == 2) {
            $title = "منتج مجمع";
        }  elseif ($product_id == 3) {
            $title = "مادة اولية";
        }  elseif ($product_id == 4) {
            $title = "خدمة";
        }  elseif ($product_id == 5) {
            $title = "مصروف";
        }
        $units      = Uint::all();
        $items      = Item::all();
        $sites      = Site::where('type', '!=', 1)->get();
        $account1     = Account::where('type', 4)->get();
        $account2     = Account::where('type', 5)->get();
        return view('Product.newCreate', compact('product_id', 'units', 'items', 'title', 'account1', 'account2', 'sites'));
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
        
        // dd($data);
        
        $count_site = Site::where("id", "!=", 10)->get();
        $len  = count($data['test']) / 6;
        $lenSite =  count($data['ids']) /count($count_site);
        // dd($lenSite);
        $startsite  = 0;
        $unitsites  = [];
        $groupsite  = [];
        
        $end        = 0;
        $start      = 0;
        $group      = [];
        $unit       = [];
        $uintS = [];
        $counter_of_unit = [];
        $counter_of_unit[] = 1;
        $unitS[] = $data['id_unit'];
        for ($i=0; $i < $lenSite; $i++) {
    
           $groupsite[] = array_slice($data['ids'],$startsite , count($count_site), false);
           $startsite += count($count_site);
    
        }
        // dd($groupsite);
       for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 6, false);
    
           $start += 6;
    
       }
        // dd($group);
        $product = Product::create($data);
    

        foreach ($group as $index) {
            // if (count($index) >= 7) {
                $unit[] = [
                    'id_unit'           => $index[0],
                    'counter_of_unit'   => $index[1],
                    'price_buy'         => $index[2],
                     'is_buy_tex'       => $index[3],
                    'price_sell'        => $index[4],
                    'barcode'           => $index[5],
                    'id_product'        => $product->id
                ];
            // }
            $unitS[] = $index[0];
            $counter_of_unit[] = $index[1];
        } 
        // dd($unitS);
        $countunit = 0;
        foreach ($groupsite as $index) {
            foreach ($index as $in) {
                
                $arr = explode("-", $in);
            
                $unitsites[] = [
                    'unit_id'           => $unitS[$countunit],
                    'counter_of_unit'   => $counter_of_unit[$countunit],
                    'site_id'           => $arr[0],
                    'price'             => $arr[1],                
                    'product_id'        => $product->id,
                ];
                // create
            }
            $countunit += 1;
            
        } 
        
        
    
        ProductUint::insert($unit);
        ProductUintPrices::insert($unitsites);
        // dd($unitsites);
        return redirect()->route('Product.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product      = Product::with('unit')->find($id);
        // $p            = Uint::where("id", $Product->id_unit)->first();
        // $Product->id_unit    = $p->name;
        return response()->json($Product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = Product::FindOrFail($id);
      
    
          $product_id = $id;
        $title      = "";
        if ($product_id == 1) {
            $title = "منتج";
        } elseif ($product_id == 2) {
            $title = "منتج مجمع";
        }  elseif ($product_id == 3) {
            $title = "مادة اولية";
        }  elseif ($product_id == 4) {
            $title = "خدمة";
        }  elseif ($product_id == 5) {
            $title = "مصروف";
        }
        $units      = Uint::all();
        $items      = Item::all();
        $sites      = Site::all();
        $account1     = Account::where('type', 4)->get();
        $account2     = Account::where('type', 5)->get();
        $ProductUint  = ProductUint::where('id_product', $id)->get();
        $ProductUintPrices         = ProductUintPrices::where('product_id', $id)->where('unit_id', '!=' , $Product->id_unit)->get();
        $ProductUintPricesMain     = ProductUintPrices::where('product_id', $id)->where('unit_id',  $Product->id_unit)->get();
        // dd($ProductUintPricesMain);
        return view('Product.update' , compact('product_id','Product', 'units', 'items', 'title', 'account1', 'account2', 'sites','ProductUint','ProductUintPrices', 'ProductUintPricesMain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Product = Product::findOrFail($id);
        $data = $request->all();
        dd($data);
        

        $Product->update($data);
        return redirect()->route('Product.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Product = Product::find($id);
            $deleted =  $Product->delete();
            if (!$deleted) {
                return redirect()->route('Product.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Product.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Product.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
    
    
    public function copy($id)
    {
         $Product = Product::FindOrFail($id);
      
    
          $product_id = $id;
        $title      = "";
        if ($product_id == 1) {
            $title = "منتج";
        } elseif ($product_id == 2) {
            $title = "منتج مجمع";
        }  elseif ($product_id == 3) {
            $title = "مادة اولية";
        }  elseif ($product_id == 4) {
            $title = "خدمة";
        }  elseif ($product_id == 5) {
            $title = "مصروف";
        }
        $units      = Uint::all();
        $items      = Item::all();
        $sites      = Site::all();
        $account1     = Account::where('type', 4)->get();
        $account2     = Account::where('type', 5)->get();
        $ProductUint  = ProductUint::where('id_product', $id)->get();
        $ProductUintPrices         = ProductUintPrices::where('product_id', $id)->where('unit_id', '!=' , $Product->id_unit)->get();
        $ProductUintPricesMain     = ProductUintPrices::where('product_id', $id)->where('unit_id',  $Product->id_unit)->get();
        // dd($ProductUintPricesMain);
        return view('Product.copy' , compact('product_id','Product', 'units', 'items', 'title', 'account1', 'account2', 'sites','ProductUint','ProductUintPrices', 'ProductUintPricesMain'));
        
        
    }
    
    
    
}
