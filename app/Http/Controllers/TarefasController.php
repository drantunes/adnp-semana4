<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefasController extends Controller
{
    protected $tarefas = [
        ["id" => 1, "titulo" => 'Teste Laravel', 'feito' => true],
        ["id" => 2, "titulo" => 'Testar Exemplos local', 'feito' => false] 
    ];

    public function index()
    {
        return view('tarefas', ['tarefas' => $this->tarefas]);
    }

    public function show($id)
    {
        $tarefa = array_filter($this->tarefas, function($t) use ($id) {
            return $t['id'] == $id;
        });
        return view('tarefa', ['tarefa' => array_pop($tarefa)]);
    }
}
