<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(10);
        
        
        return view('app.produto.index',['produtos' => $produtos, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidades = Unidade::all();
        return view('app.produto.create',['unidades'=>$unidades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $regras =[
            'nome'=>'required|min:1|max:50',
            'descricao' => 'required|min:1|max:2500',
            'peso' => 'required|integer',
            'unidade_id'=>'exists:unidades,id'
        ];
        $feedback = [
            'required'=> 'O campo :attribute deve ser preenchido.',
            'descricao.max'=> 'O campo não pode ultrapassar 2500 caracteres.',
            'nome.max'=> 'O campo não pode ultrapassar 50 caracteres.',
            'peso.integer' => 'Digite um valor valido!',
            'unidade_id.exists' => 'A Unidade de medida informada, não existe.'

        ];
        $request->validate($regras, $feedback);

        Produto::create($request->all());
        return redirect()->route('produto.index');
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
