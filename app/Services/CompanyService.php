<?php

namespace App\Services;

use App\Company;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;

class CompanyService
{
    public function CompanyRegister(array $data)
    {
        $company = $this->createCompanyUsernameAndPasswordDatabase($data);

        // Create a new user in your application's user table
        // $user = User::create([
        //     'name'       => $data['user']['first_name'] . ' ' . $data['user']['last_name'],
        //     'email'      => $data['user']['email'],
        //     'password'   => Hash::make($data['user']['password']),
        //     'company_id' => $company->id,
        //     'role_id'    => 1,
        //     'pos'        => 1,
        // ]);

        // Switch to the new tenant's database
        $this->switchToTenantDatabase($company);

        // Run the migrations for the tenant database
        Artisan::call('migrate', [
            '--path' => 'database/migrations/tenant',
            '--database' => 'tenant',
        ]);

        dd("Database, user created and migrations run successfully.");
    }

    public function createCompanyUsernameAndPasswordDatabase(array $data)
    {
        $username = 'user_'     . $data['company']['organization_name'];
        $database = 'database_' . $data['company']['organization_name'];
        $password = 'password_' . $data['company']['organization_name'];
        $data['company']['database'] = $database;
        $data['company']['user']     = $username;
        $data['company']['password'] = $password;
        $data['company']['domain']   = $data['company']['organization_name'];
        // Create the company record in the database
        $company = Company::create($data['company']);

        // Create the new database
        DB::statement('CREATE DATABASE ' . $database);

        // Create a new database user with the specified username and password
        DB::statement("CREATE USER '$username'@'localhost' IDENTIFIED BY '$password'");

        // Grant all privileges on the new database to the new user
        DB::statement("GRANT ALL PRIVILEGES ON $database.* TO '$username'@'localhost'");

        // Flush privileges to ensure that the changes take effect
        DB::statement('FLUSH PRIVILEGES');

        // Return the company instance for further use
        return $company;
    }

    protected function switchToTenantDatabase(Company $company)
    {
        // Set the tenant connection details
        Config::set('database.connections.tenant.database', 'database_' . $company->organization_name);
        Config::set('database.connections.tenant.username', 'user_' . $company->organization_name);
        Config::set('database.connections.tenant.password', 'password_' . $company->organization_name);

        // Reconnect to apply the new settings
        DB::purge('tenant');
        DB::reconnect('tenant');
    }
}
