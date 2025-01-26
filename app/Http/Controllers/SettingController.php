<?php

namespace App\Http\Controllers;

use App\SaleInvoiceSetting;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $model;
    protected $path = 'settings';

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $settings = $this->model::first();
        $salesInvoices = SaleInvoiceSetting::first();
        if (empty($salesInvoices)) {
            $salesInvoices = new SaleInvoiceSetting();
        }
        // months names in array
        $months = [
            'jan',
            'feb',
            'mar',
            'apr',
            'may',
            'jun',
            'jul',
            'aug',
            'sep',
            'oct',
            'nov',
            'dec',
        ];
        return view('settings.index', compact('settings', 'months', 'salesInvoices'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $settings = $this->model::first();
        if ($request->hasFile('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('uploads/' . $this->path . '/'), $imageName);
            $data['logo'] = 'uploads/' . $this->path . '/' . $imageName;
        }
        $settings->update($data);
        return redirect()->route('settings.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    public function updateSalesInvoices(Request $request)
    {
        $data = $request->all();
        if (!is_numeric($request->numbering_sales_invoices)) {
            return redirect()->route('settings.index')->with(['error' => 'يرجى ادخال رقم صحيح']);
        } 


        $settingInvoice = SaleInvoiceSetting::first();
        if (empty($settingInvoice)) {
            $settingInvoice = new SaleInvoiceSetting();
            $settingInvoice->create($data);

        } else {
            $settingInvoice->update($data);
        }
       
        return redirect()->route('settings.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }


    
}
