@extends('app.components.layout')
@section('title',  '- Produtos')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Produtos - Listar</h1>
    </div>

    
    <div class="informacao-pagina container">
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.create')}}">Cadastrar</a></li>
                <li><a href="{{route('app.home')}}">voltar</a></li>
            </ul>
        </div> <br>      
        <div class="table-responsive">

        <table class="table align-middle">
            <thead class="table-dark">
                <th>Nome</th>
                <th>Descrição</th>
                <th>Nome fornecedor</th>
                <th>Site fornecedor</th>
                <th>Peso</th>
                <th>Unidade ID</th>
                <th>Comprimento</th>
                <th>Largura</th>
                <th>Altura</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            @foreach ($produtos as $produto)
                <tbody>
                    <td>
                        {{$produto->nome}}
                    </td>
                    <td>
                        {{$produto->descricao}}
                    </td>
                    <td>
                        {{$produto->fornecedor->nome}}
                    </td>
                    <td>
                        {{$produto->fornecedor->site}}
                    </td>
                    <td>
                        {{$produto->peso}}
                    </td>
                    <td>
                        {{$produto->unidade_id}}
                    </td>
                    <td>
                        {{$produto->produtoDetalhe->comprimento ?? ''}}
                    </td>
                    <td>
                        {{$produto->produtoDetalhe->largura ?? ''}}
                    </td>
                    <td>
                        {{$produto->produtoDetalhe->altura ?? ''}}
                    </td>
                    <td>
                        <a class="btn btn-dark btn-sm" href="{{route('produto.show',['produto'=>$produto->id])}}">Detalhes</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('produto.destroy', ['produto'=>$produto->id])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"  type="submit">Deletar</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-dark btn-sm" href="{{route('produto.edit',['produto'=>$produto->id])}}">Editar</a>
                    </td>
                </tbody>
            @endforeach
        </table>
        </div>
        <div style="width: 40%;" class="mx-auto">
            {{ $produtos-> appends($request)-> links() }}
            
        </div>      
    </div>
</div>

@endsection

