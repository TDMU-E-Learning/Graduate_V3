<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MCController extends Controller
{
    public function index(){
        return view('mc.index');
    }
}
