<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return view('website.api-integration.apiintegration');    
    }
}
