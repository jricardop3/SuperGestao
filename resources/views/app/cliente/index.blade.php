@extends('app.components.layout')
@section('title',  '- Cliente')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Clientes - Listar</h1>
    </div>

    
    <div class="informacao-pagina container">
        <div class="menu">
            <ul>
                <li><a href="{{route('cliente.create')}}">Cadastrar</a></li>
                <li><a href="{{route('app.home')}}">voltar</a></li>
            </ul>
        </div> <br>      
        <div class="table-responsive">

        <table class="table align-middle">
            <thead class="table-dark">
                <th>Nome</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            @foreach ($clientes as $cliente)
                <tbody>
                    <td>
                        {{$cliente->nome}}
                    </td>
                    <td>
                        <a class="btn btn-dark btn-sm" href="{{route('cliente.show',['cliente'=>$cliente->id])}}">Detalhes</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('cliente.destroy', ['cliente'=>$cliente->id])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"  type="submit">Deletar</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-dark btn-sm" href="{{route('cliente.edit',['cliente'=>$cliente->id])}}">Editar</a>
                    </td>
                </tbody>
            @endforeach
        </table>
        </div>
        <div style="width: 40%;" class="mx-auto">
            {{ $clientes-> appends($request)-> links() }}
            
        </div>      
    </div>
</div>

@endsection

