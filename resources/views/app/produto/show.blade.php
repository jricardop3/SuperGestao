@extends('app.components.layout')
@section('title',  '- Produto')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Deatalhes produto:</h1>
    </div>

    
    <div class="informacao-pagina">
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.create')}}">Cadastrar</a></li>
                <li><a href="{{route('produto.index')}}">voltar</a></li>
            </ul>
        </div>
        <div style="width-min: 30%; margin-left:auto; margin-right:auto;" >
            <table class="table align-middle">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Peso</th>
                    <th>Unidade ID</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                
                    <tbody>
                        <td>
                            {{$produto->id}}
                        </td>
                        <td>
                            {{$produto->nome}}
                        </td>
                        <td>
                            {{$produto->descricao}}
                        </td>
                        <td>
                            {{$produto->peso}}
                        </td>
                        <td>
                            {{$produto->unidade_id}}
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
                
            </table>
        </div>
    </div>
</div>

@endsection

