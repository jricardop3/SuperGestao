@extends('app.components.layout')
@section('title',  '- Pedido produto')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Pedido produto - Create</h1>
    </div>

    
    <div class="informacao-pagina">
        <div class="menu">
            <ul>
                <li><a href="">Cadastrar</a></li>
                <li><a href="{{route('pedido.index')}}">voltar</a></li>
            </ul>
            
        </div>
        <div style="width: 30%; margin-left:auto; margin-right:auto;" >
            <h4>Detalhees Pedido: </h4>
            <p>Id: do Pedido: {{$pedido->id}}</p>
            <p>Cliente: {{$pedido->cliente_id}}</p>
            <div class="container"><h5>Detalhees Pedido:</h5></div>
            
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nome do produto</th>
                    <th>Data Inclussão</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($pedido->produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->pivot->created_at->format('d/m/Y')}}</td>
                        <td>
                            <form method="post" action="{{route('pedido-produto.destroy', ['pedidoProduto'=>$produto->pivot->id, 'pedido_id'=>$pedido->id])}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"  type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
           @component('app.components.form5',['pedido' => $pedido, 'produtos'=> $produtos]) 
           @endcomponent
        </div>
    </div>
</div>

@endsection

