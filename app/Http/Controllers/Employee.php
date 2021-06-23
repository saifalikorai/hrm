<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee extends Controller
{
    public function index()
    {
    	echo "string";

    	return view('dashboard');
    }

    public function add_employee()
    {
    	return view('add_employee');
    }

     public function show_employee()
    {
    	return view('show_employee');
    }

    public function insert_employee(Request $request)
    {
    	//return $request->all();
    	return $request->input('email');
    	return $request->input('email');
    	return $request->input('email');

    	//require 'file';
    }


}
