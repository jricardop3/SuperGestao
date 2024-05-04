<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\ProdutoDetalhe;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(5);
        /*
        foreach($produtos as $key => $produto) {
            //print_r($produto->getAttributes());
            //echo '<br><br>';
            $produtoDetalhe = ProdutoDetalhe::where('produto_id', $produto->id)->first();
            if(isset($produtoDetalhe)){
                print_r($produtoDetalhe->getAttributes);
                $produtos[$key]['comprimento'] = $produtoDetalhe->comprimento;
                $produtos[$key]['largura'] = $produtoDetalhe->largura;
                $produtos[$key]['altura'] = $produtoDetalhe->altura;
            }
            //echo '<hr>';
        }
        */
        return view('app.produto.index',['produtos' => $produtos,  'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidades = Unidade::all();
        $fornecedores = Fornecedor::all();
        return view('app.produto.create',['unidades'=>$unidades, 'fornecedores'=>$fornecedores]);
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
    public function show(Produto $produto)
    {
        
        return view('app.produto.show',['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        $unidades = Unidade::all();
        $fornecedores = Fornecedor::all();
        return view('app.produto.edit',['produto'=>$produto, 'unidades' => $unidades, 'fornecedores'=>$fornecedores]);
        //return view('app.produto.create',['produto'=>$produto, 'unidades' => $unidades]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $regras =[
            'nome'=>'required|min:1|max:50',
            'descricao' => 'required|min:1|max:2500',
            'peso' => 'required|integer',
            'unidade_id'=>'exists:unidades,id',
            'fornecedor_id'=>'exists:fornecedores,id'
        ];
        $feedback = [
            'required'=> 'O campo :attribute deve ser preenchido.',
            'descricao.max'=> 'O campo não pode ultrapassar 2500 caracteres.',
            'nome.max'=> 'O campo não pode ultrapassar 50 caracteres.',
            'peso.integer' => 'Digite um valor valido!',
            'unidade_id.exists' => 'A Unidade de medida informada, não existe.',
            'fornecedor_id.exists' => 'O fornecedor informado, não existe.'

        ];
        $request->validate($regras, $feedback);
        
        $produto->update($request->all());
        $fornecedores = Fornecedor::all();
        return redirect()->route('produto.show',['produto'=>$produto->id, 'fornecedores=>'=>$fornecedores]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produto.index');
    }
}
