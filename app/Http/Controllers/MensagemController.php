<?php

namespace App\Http\Controllers;

use App\Mensagem;
use App\Atividade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMensagem = Mensagem::all();
        return view('mensagens.list',['mensagens' => $listaMensagem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listaAtividades = Atividade::all();
        return view('mensagens.create',['listaAtividades' => $listaAtividades]);
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
            'titulo.required' => 'É obrigatório um título para a atividade',
            'autor.required' => 'É obrigatória uma descrição para a atividade',
            'mensagem.required' => 'É obrigatório o cadastro da data/hora da atividade',
        );
        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'autor' => 'required',
            'mensagem' => 'required|string',
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
        $obj_Mensagem = new Mensagem();
        $obj_Mensagem->titulo =       $request['titulo'];
        $obj_Mensagem->autor = $request['autor'];
        $obj_Mensagem->mensagem = $request['mensagem'];
        $obj_Mensagem->user_id = Auth::id();
        $obj_Mensagem->atividade_id = $request['atividade_id'];
        $obj_Mensagem->save();
        return redirect('/mensagens')->with('success', 'Mensagem criada com sucesso!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mensagem  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensagens = Mensagem::find($id);
        return view('mensagens.show', ['mensagens' => $mensagens]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensagem  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensagem $id)
    {
        $obj_Mensagem = Mensagem::find($id)->first();
        //dd($obj_Mensagem);
        return view('mensagens.edit', ['mensagens' => $obj_Mensagem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensagem  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'titulo.required' => 'É obrigatório um título para a atividade',
            'autor.required' => 'É obrigatória uma descrição para a atividade',
            'mensagem.required' => 'É obrigatório o cadastro da mensagem',
        );
        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'autor' => 'required',
            'mensagem' => 'required|string',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect("mensagens/$id/edit")
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Mensagem = Mensagem::findOrFail($id);
        //dd($obj_Mensagem);
        $obj_Mensagem->titulo =       $request['titulo'];
        $obj_Mensagem->autor = $request['autor'];
        $obj_Mensagem->mensagem = $request['mensagem'];
        $obj_Mensagem->save();
        return redirect('/mensagens')->with('success', 'Mensagem criada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensagem  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $obj_Mensagem = Mensagem::find($id);
        return view('mensagens.delete', ['mensagens' => $obj_Mensagem]);
    }
    
    public function destroy($id)
    {
        $obj_Mensagem = Mensagem::findOrFail($id);
        $obj_Mensagem->delete($id);
        return Redirect('/mensagens')->with('sucess', 'Atividade excluída com Sucesso!');
    }

   
}
