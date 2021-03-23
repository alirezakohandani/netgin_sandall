<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Master page
     *
     * @return void
     */
    public function index()
    {
        return view('layouts.app');
    }
}
