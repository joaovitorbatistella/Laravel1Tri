<?php

namespace App\Http\Controllers;

use App\Mensagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class mensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMensagens = Mensagem::all();
        return view('mensagem.list',['mensagens' => $listaMensagens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensagens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'title.required' => 'É obrigatório um título para a atividade',
            'description.required' => 'É obrigatória uma descrição para a atividade',
            'scheduledto.required' => 'É obrigatório o cadastro da data/hora da atividade',
        );
        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string|max:255',
            'description' => 'required',
            'scheduledto' => 'required|string',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('mensagens/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Mensagens = new Mensagem();
        $obj_Mensagens->title =       $request['title'];
        $obj_Mensagens->description = $request['autor'];
        $obj_Mensagens->save();
        return redirect('/mensagens')->with('success', 'Mensagem criada com sucesso!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensagens = Mensagem::find($id);
        return view('mensagem.show', ['mensagem' => $mensagens]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensagens $mensagens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensagens $mensagens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensagens $mensagens)
    {
        //
    }
}
