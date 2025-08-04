<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class LocalizationController extends Controller
{
    public function lang($locale) {
        App::setlocale($locale);
        Session::put('locale', $locale);
        return redirect()->back();
    }

    public function changeSites($site_id) {
        Session::put('site_id', $site_id);
        return redirect()->back();
    }
}
