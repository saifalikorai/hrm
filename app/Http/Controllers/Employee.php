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
    	echo $name = $request->post('email');

    	//require 'file';
    }


}
