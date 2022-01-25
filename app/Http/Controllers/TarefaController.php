<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Status;
use App\Models\User;

class TarefaController extends Controller
{
    function index()
    {
        $tarefas = Tarefa::all();
        return view('templates.tarefas', ['tarefas' => $tarefas]);
    }
    public function create()
    {
        return view('templates.add-tarefa');
    }
    public function store(Request $request)
    {

        $tarefa = new Tarefa();
        $tarefa->titulo = $request->titulo;
        $tarefa->datainicial = $request->datainicial;
        $tarefa->dataconclusao = $request->dataconclusao;
        $tarefa->descricao = $request->descricao;
        $tarefa->status = $request->status;
        $tarefa->save();

        return redirect()->route('tarefas');
    }
    public function delete($id)
    {
        Tarefa::destroy($id);
        return redirect()->route('tarefas');
    }
    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('templates.tarefa-edit', ['tarefa' => $tarefa]);
    }
    public function update(Request $request)
    {
        Tarefa::findOrFail($request->id)->update($request->all());
        return redirect()->route('tarefas');
    }
    public function show($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('templates.tarefa-show', ['tarefa' => $tarefa]);
    }
}
