<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

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
    return view('templates.welcome');
})->name('index');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('templates.tarefas');
    });
    Route::get('/dashboard/addtarefa', [TarefaController::class, 'formulario'])->name('add-tarefa');
});

require __DIR__.'/auth.php';

