<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlLog extends Controller
{
    public function showFormLogin(){
        return view('login');
    }

    public function loginPost(Request $request){
        try {
            if ($request->userName == 'admin' && $request->password == 'admin'){
                echo 'heelo';
            } else {
                throw new \Exception('wrong');
            }
        } catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}
