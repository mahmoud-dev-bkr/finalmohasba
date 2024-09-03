<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use App\Company;

class TenantMiddleware
{
    public function handle($request, Closure $next)
    {
        // Extract the subdomain from the request
        $host = $request->getHost();
        // dd($request);
        $segments = explode('.', $host);
        // dd($segments);
        // Check if there is a subdomain (assuming the host includes 'localhost' or similar)
        if (count($segments) >= 2) {
            // dd($segments);
            $subdomain = $segments[0];

            // Find the company by the subdomain in the 'domain' column
            $company = Company::where('domain', $subdomain)->first();

            if ($company) {
                // Set the tenant connection details
                Config::set('database.connections.tenant.database', 'database_' . $company->organization_name);
                Config::set('database.connections.tenant.username', 'user_' . $company->organization_name);
                Config::set('database.connections.tenant.password', 'password_' . $company->organization_name);

                // Set the tenant as the default database connection
                Config::set('database.default', 'tenant');

                // Reconnect to apply the new settings
                DB::purge('mysql');
                DB::purge('tenant');
                DB::reconnect('tenant');
            } else {
                // Handle case where subdomain does not match any tenant
                // dd("subdomain does not match any tenant");
                return abort(404, 'Tenant not found');
            }
        } else {
            // No subdomain, set the default connection to 'mysql'
            Config::set('database.default', 'mysql');

            // Purge and reconnect to the default 'mysql' connection
            DB::purge('mysql');
            DB::purge('tenant');
            DB::reconnect('mysql');
        }

        return $next($request);
    }
}
