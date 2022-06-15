<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class AdminPageController extends Controller
{
    
    public function index()
    {
        return view('backend.index');
    } 
    
}