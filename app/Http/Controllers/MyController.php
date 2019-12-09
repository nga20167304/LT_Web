<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function xinChao(){
        echo "Hello";
    }

    public function getURL(Request $request){
        return $request->path();
    }

    public function postForm(Request $request){
    	// echo $request->HoTen;
    	// echo $request->input('HoTen');
    	if($request->has('tuoi'))
    		echo "Có Tham số";
    	else echo "Không có tham số";
    }
}
