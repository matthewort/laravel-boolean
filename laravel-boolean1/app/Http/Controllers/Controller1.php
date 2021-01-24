<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function test() {
        return view('controllertest');
    }

    public function test1() {
        return view('controllertest1', [
            'name' => 'Juan'
        ]);
    }

    public function test2() {
        return view('controllertest1', [
            'name' => 'Jose'
        ]);
    }
}
