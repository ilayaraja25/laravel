<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Collage;

use Illuminate\Support\Facades\Route;

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

Route ::get('/',[Collage::class,'Create']);
Route ::post('/update',[Collage::class,'update']);
Route ::get('list',[Collage::class,'list']);
Route ::get('edit/{id}',[Collage::class,'edit']);
Route ::post('updates/{id}',[Collage::class,'updates']);
Route ::get('delete/{id}',[Collage::class,'delete']);
//Route::resource('students', 'App\Http\Controllers\StudentController');



