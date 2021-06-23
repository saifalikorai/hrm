<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/add_employee', [Employee::class, 'add_employee']);

Route::get('/show_employee', [Employee::class, 'show_employee']);

Route::post('/insert_employee', [Employee::class, 'insert_employee']);





