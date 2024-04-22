<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        /*
        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo = $request->input('motivo');
        $contato->mensagem = $request->input('mensagem');
        //recupera o objeto e salva
        $contato->save();
        
        $contato = new Contato();
        //meteodo fill filtra o request, recebendo todos os atributos e atribuindo ao objeto instanciado.
        $contato->fill($request->all());
        //salva o objeto contato com os dados recebidos do request em formato de array, fornecido pelo metodo fill.
        $contato->save();
        
        $contato = new Contato();
        //salva no objeto instanciado com o metodo create, com base no request com os parametros recebidos via requisição.
        $contato->create($request->all());
        */
        
        
        return view('site.contato');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //validações do formulário:
        $request->validate([
        'nome' => 'required' ,
        'telefone' => 'required|min:10|max:11',
        'email' => 'email' ,
        'motivo' => 'required' ,
        'mensagem' => 'required|min:10|max:1500'
        ]);
        //instancia um novo objeto recebendo o model contato e separando os request de cada imput individualmente.
        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo = $request->input('motivo');
        $contato->mensagem = $request->input('mensagem');
        //recupera o objeto e salva
        $contato->save();
       
        return view('site.contato');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contato $contato)
    {
        //
    }
}
