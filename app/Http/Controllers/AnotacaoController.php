<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class AnotacaoController extends Controller
{
    public function index()
    {
        $notas = Nota::all();
        return view('templates.anotacoes', ['notas' => $notas]);
    }
    public function create()
    {
        return view('templates.add-anotacao');
    }
    public function store(Request $request)
    {

        $nota = new Nota();
        $nota->titulo = $request->titulo;
        $nota->descricao = $request->descricao;

        $nota->save();

        return redirect()->route('anotacoes');
    }
    public function delete($id)
    {

        Nota::destroy($id);
        return redirect()->route('anotacoes');
    }
    public function edit($id)
    {
        $nota = Nota::findOrFail($id);
        return view('templates.anotacao-edit', ['nota' => $nota]);
    }
    public function update(Request $request)
    {
        Nota::findOrFail($request->id)->update($request->all());
        return redirect()->route('anotacoes');
    }
    public function show($id)
    {
        $nota = Nota::findOrFail($id);
        return view('templates.anotacao-show', ['nota' => $nota]);
    }
}
