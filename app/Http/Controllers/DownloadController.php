<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadExcelClient()
    {
        $filepath = public_path('excel\Clients.xlsx');
        return Response()->download($filepath, 'Clients.xlsx', [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ]);
    }
    public function downloadExcelSupplier()
    {
        $filepath = public_path('excel\Clients.xlsx');
        return Response()->download($filepath, 'Suppliers.xlsx', [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ]);
    }

}
