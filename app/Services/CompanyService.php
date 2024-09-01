<?php

namespace App\Services;
use App\Company;
use App\Setting;
use App\site;
use Illuminate\Support\Facades\DB;

class CompanyService
{
    public function CompanyRegister (array $data)
    {
        // dd($data);
        $company = Company::create($data['company']);

        DB::statement('CREATE DATABASE tenant_' . $company->id );
        
        dd("Database created successfully.");
        // return User::create([
        //     'name_en'    => $data['user']['first_name'] . ' ' .$data['user']['last_name'],
        //     'email'      => $data['user']['email'],
        //     'password'   => Hash::make($data['user']['password']),
        //     'company_id' => $company->id,
        //     'role_id'    => 1,
        //     'pos'        => 1,
        // ]);
    }

    public function createCompanyUsernameAndPasswordDatabase (array $data)
    {
        $data['user']         = "root_"     .$data['user']['first_name'] . '_' .$data['user']['last_name'];
        $data['database']     = "dataase_"  .$data['user']['first_name'] . '_' .$data['user']['last_name'];
        $data['password']     = "password_"  .$data['user']['first_name'] . '_' .$data['user']['last_name'];
        $company = Company::create($data['company']);
    }
}
