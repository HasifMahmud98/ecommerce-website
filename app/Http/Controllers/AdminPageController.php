<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function create()
    {
        return view('backend.create');
    }
}