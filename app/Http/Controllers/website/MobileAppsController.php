<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobileAppsController extends Controller
{
    public function index()
    {
        return view('website.mobile-apps.mobile-apps');
    }
}
