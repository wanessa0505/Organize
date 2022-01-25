<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\AnotacaoController;

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
    // rotas envolvendo tarefas
    Route::get('/tarefas', [TarefaController::class, 'index'])->name('tarefas');
    Route::get('/add-tarefa/create', [TarefaController::class, 'create'])->name('add-tarefa-create');
    Route::post('/add-tarefa/store', [TarefaController::class, 'store'])->name('add-tarefa-store');
    Route::delete('/tarefas/{id}/delete', [TarefaController::class, 'delete'])->name('tarefa-delete');
    Route::get('/tarefas/{id}/edit', [TarefaController::class, 'edit'])->name('tarefa-edit');
    Route::put('/tarefas/{id}/update', [TarefaController::class, 'update'])->name('tarefa-update');
    Route::get('/tarefas/{id}', [TarefaController::class, 'show'])->name('tarefa-show');


    //rotas de anotacoes/notas
    Route::get('/anotacoes', [AnotacaoController::class, 'index'])->name('anotacoes');
    Route::get('/addanotacao/create', [AnotacaoController::class, 'create'])->name('add-anotacao-create');
    Route::post('/addanotacao/store', [AnotacaoController::class, 'store'])->name('add-anotacao-store');
    Route::delete('/anotacoes/{id}', [AnotacaoController::class, 'delete'])->name('anotacao-delete');
    Route::get('/anotacoes/{id}/edit', [AnotacaoController::class, 'edit'])->name('anotacao-edit');
    Route::put('/anotacoes/{id}/update', [AnotacaoController::class, 'update'])->name('anotacao-update');
    Route::get('/anotacoes/{id}', [AnotacaoController::class, 'show'])->name('anotacao-show');


    //rotas de view
    Route::view('/ajuda', 'templates.ajuda')->name('ajuda');
    Route::view('/calendario', 'templates.calendario')->name('calendario');
});


require __DIR__ . '/auth.php';
