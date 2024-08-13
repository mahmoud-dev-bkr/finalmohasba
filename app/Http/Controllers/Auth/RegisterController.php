<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\site;
use App\User;
use Companies;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user'      => 'nullable|array',
            'company'   => 'nullable|array',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $company = Company::create($data['company']);
        $site    = site::create([
            'name_ar'       => 'الرئيسية',
            'name_en'       => 'main',
            'Inventory_id'  => '37',
            'type'          => '1',
            'company_id' => $company->id,
        ]);
        return User::create([
            'name_en'    => $data['user']['first_name'] . ' ' .$data['user']['last_name'],
            'email'      => $data['user']['email'],
            'password'   => Hash::make($data['user']['password']),
            'company_id' => $company->id,
            'role_id'    => 1,
            'pos'        => 1,
        ]);
    }
}
