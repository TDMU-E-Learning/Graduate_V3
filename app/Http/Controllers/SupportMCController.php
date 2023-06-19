<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportMCController extends Controller
{
    public function index(){
        return view('support_mc.index');
    }
}
