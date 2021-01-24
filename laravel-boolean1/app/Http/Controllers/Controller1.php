<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function test() {
        return view('controllertest1');
    }
}
