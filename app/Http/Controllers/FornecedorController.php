<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request)
    {
        
        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome'))
            ->where('site', 'like', '%'.$request->input('site'))
            ->where('uf', 'like', '%'.$request->input('uf'))
            ->where('email', 'like', '%'.$request->input('email'))
        ->get();
        
        return view('app.fornecedor.listar',['fornecedores' => $fornecedores]);
    }

    public function adicionar(Request $request)
    {
        $msg ='';
        //inclussão
        if ($request->input('_token') != '' && $request->input('id') == '' ){
            $regras = [
                'nome' =>'required',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];
            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido!',
                'uf.min' =>'Prencha a unidade federativa com 2 digitos!',
                'uf.max' =>'Prencha a unidade federativa com 2 digitos!',
                'usuario.email' =>'O E-Mail digitado é invalido!'
            ];
            $request->validate($regras, $feedback);
            
            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());
            $msg = 'Fornecedor Cadastrado com sucesso!';
        }
        //edição
        if ($request->input('_token') != '' && $request->input('id') != '' ){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());
            if ($update){
                $msg = "Atualizado";
            }else{
                $msg = "Não atualizado";
            }
            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }
        return view('app.fornecedor.adicionar', ['msg'=> $msg]);
    }
    public function editar($id, $msg = '')
    {

        $fornecedor = Fornecedor::find($id);
        return view('app.fornecedor.adicionar',['fornecedor' => $fornecedor, 'msg' => $msg]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
