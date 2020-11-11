<?php

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

Route::get('/', 'EstructurasDeControl@welcome');

Route::get('/i', 'EstructurasDeControl@inicio');


Route::get('/p1',[
     'uses' => 'EstructurasDeControl@pintor1',
     'as'=> 'pintor1'
    ]);
Route::get('/p2',[
    'uses' => 'EstructurasDeControl@pintor2',
    'as'=> 'pintor2'
]);
Route::get('/p3',[
    'uses' => 'EstructurasDeControl@pintor3',
    'as'=> 'pintor3'
]);
Route::get('/p4',[
    'uses' => 'EstructurasDeControl@pintor4',
    'as'=> 'pintor4'
]);

Route::post('/validar','EstructurasDeControl@validar');
Route::get('/login','EstructurasDeControl@login');
