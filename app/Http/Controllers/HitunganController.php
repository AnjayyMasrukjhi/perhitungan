<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitunganController extends Controller
{
    public function index(){

        return view('hitung');
    }
    public function hitungan (Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 + $num2;
        return view('hitung', compact('result'));
    }
}
