@extends('app.components.layout')
@section('title',  '- Pedido')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Pedidos - Listar</h1>
    </div>

    
    <div class="informacao-pagina container">
        <div class="menu">
            <ul>
                <li><a href="{{route('pedido.create')}}">Cadastrar</a></li>
                <li><a href="{{route('app.home')}}">voltar</a></li>
            </ul>
        </div> <br>      
        <div class="table-responsive">

        <table class="table align-middle">
            <thead class="table-dark">
                <th>ID pedido</th>
                <th>Cliente</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            @foreach ($pedidos as $pedido)
                <tbody>
                    <td>
                        {{$pedido->id}}
                    </td>
                    <td>
                        {{$pedido->cliente_id}}
                    </td>
                    <td>
                        <a href="{{route('pedido-produto.create', ['pedido'=>$pedido->id])}}">Adicionar produtos</a>
                    </td>
                    <td>
                        <a class="btn btn-dark btn-sm" href="{{route('pedido.show',['pedido'=>$pedido->id])}}">Detalhes</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('pedido.destroy', ['pedido'=>$pedido->id])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"  type="submit">Deletar</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-dark btn-sm" href="{{route('pedido.edit',['pedido'=>$pedido->id])}}">Editar</a>
                    </td>
                </tbody>
            @endforeach
        </table>
        </div>
        <div style="width: 40%;" class="mx-auto">
            {{ $pedidos-> appends($request)-> links() }}
            
        </div>      
    </div>
</div>

@endsection

