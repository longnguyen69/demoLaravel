<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Translate extends Controller
{
    public function showFormTranslate(){
        return view('translate');
    }
    public function showTranslated(Request $request){
        $eng = ['hello'=>'xin chao','cat'=>'con meo','dog'=>'con cho','bye'=>'tam biet'];
        foreach ($eng as $key=>$value){
            if ($request->input == $key){
                $message = $value;
            }
        }
        return view('translated',compact('message'));
    }
}
