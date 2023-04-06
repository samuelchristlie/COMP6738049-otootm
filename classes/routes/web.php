<?php

use Illuminate\Support\Facades\Route;
use App\Models\SchoolClass;

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
    $classes = SchoolClass::latest()->get();
    return view('classes', compact('classes'));

    // return view('welcome');
});
