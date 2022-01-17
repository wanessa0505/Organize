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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/anotacoes', function () {
    return view('anotacoes');
})->name('anotacoes');

Route::get('/tarefas', function () {
    return view('tarefas');
})->name('tarefas');

Route::get('/addanotacao', function () {
    return view('addanotacao');
})->name('addanotacao');

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');

Route::get('/addtarefa', function () {
    return view('addtarefa');
})->name('addtarefa');



Route::get('/usuario', function () {
    return view('usuario');
})->name('usuario');

Route::get('/ajuda', function () {
    return view('ajuda');
})->name('ajuda');
