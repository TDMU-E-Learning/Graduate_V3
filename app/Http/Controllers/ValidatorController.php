<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidatorController extends Controller
{
    public function showQueue()
    {
        return view('validator.queue');
    }
}
