<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function test()
    {
        return view('test',[

            "user" => Auth::user()
        ]);
    }
}
