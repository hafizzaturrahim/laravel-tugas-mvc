<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('form');
    }

    public function sapa_kirim(Request $request){
    	//dd($request->all()); //mirip var_dump
    	$nama = $request["fname"] ." ". $request["lname"];
    	// $data = $request->all();
    	return view('sapa',['nama' =>$nama]);
    }
}
