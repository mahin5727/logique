<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebDevController extends Controller
{
    public function index()
    {
        return view('website.web-development.web-development');
    }
}
