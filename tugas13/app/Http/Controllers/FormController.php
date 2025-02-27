<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function daftar () {
        return view('register');
    }
    public function halo () {
        return view('welcome');
    }
    public function data(Request $request){
        $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name'=> 'required|string|max:255',
        ]);
        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        return view('welcome',[
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
    }
}
