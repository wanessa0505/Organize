<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Status;
use App\Models\User;

class TarefaController extends Controller
{
    function formulario(){
        $status = Status::all();
        return view('templates.addtarefa', ['status' => $status]);
    }
}
