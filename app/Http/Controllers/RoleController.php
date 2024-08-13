<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\ProjectFunction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{




    public function index(Request $request)
    {
        $permissions = DB::table('permissions')->get();
        $roles = DB::table('roles')->get();

        return view('dashboard.roles.index', compact('roles', 'permissions'));

    }//end of index


    public function create()
    {
        $permissions = $this->getPermissions();
        // dd($permissions[21]);
        return view('Role.create',compact('permissions'));
    }


    public function store(Request $request)
    {
        
        // dd($request);
        $role = Role::create(
            array(
                'name'   =>   $request->name
            )
        );

        $role->permission()->sync(array_filter((array)$request->permission_id));

        return redirect()->route('roles.create')->with(['success' => 'تم الحفظ بنجاح']);

    }/* end of store */


    public function edit($role_id)
    {
        $role = Role::FindOrFail($role_id);
        $permissions = $this->getPermissions();
        return view('dashboard.roles.edit',compact('role','permissions'));
    }


    public function update(Request $request, $role_id)
    {


        // $user = auth()->user();


        // dd($user);
         try{
            $role = Role::find($role_id);
            if(!$role){
                return null;
            }
        //update in db
     
            $role -> update($request->except('_token'));
            $role->permission()->sync(array_filter((array)$request->permission_id));
            
            dd("done");

        }catch(\Exception $ex){
            return redirect()->route('admin.roles.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);

        }
       

    }


    public function destroy(Request $request)
    {
        $role = DB::table('roles')->where('id', $request->role_id)->first();
        
        $role->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.roles.index');
    }
    public function getPermissions(){
        $permissions_data = [];
        $permissions = ProjectFunction::all();
        
        $numItems = count($permissions);
        foreach ($permissions as $p) {
            $permissions_data[] = Permission::where('function_id', $p->id)->get();
        }
        // dd($permissions_data);
        return $permissions_data;
    }
    
    public function getPermissions1(){
        $permissions_data = [];

        $permissions = Permission::all();

        $current_name = null;
        $collection = [];

        $numItems = count($permissions[0]);
        $i = 0;
        foreach ($permissions as $p) {
            $p_name = $p->name;
            $arr_of_words = explode('_' , $p_name);
            $first_word = current($arr_of_words);
            $last_word = end($arr_of_words);
            $possible_not_wanted_prefixes = array(
                'add' , 'create' , 'update' , 'edit' , 'delete',
                'remove' , 'delete' , 'read' , 'show' , 'display',
                'reset', 'print', 'status'
            );

            $prefix = in_array($last_word , $possible_not_wanted_prefixes) ? $first_word:
            $last_word;

            if (!$current_name) {
                // first loob
                array_push($collection, $p);
            } elseif ($prefix == $current_name) {
                array_push($collection, $p);
            } elseif ($prefix != $current_name) {
                array_push($permissions_data, $collection);
                $collection = [];
                array_push($collection, $p);
            }
            if (++$i === $numItems) {
                array_push($permissions_data, $collection);
            }

            $current_name = $prefix;
        }
        return $permissions_data;
    }
}
