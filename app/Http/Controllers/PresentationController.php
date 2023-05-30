<?php

namespace App\Http\Controllers;

class PresentationController extends Controller
{
    public function show()
    {
        return view('presentation.presentation');
    }

    public function showQueue(){
        return view('presentation.mc');
    }
}
