@extends('app.components.layout')
@section('title',  '- Produto')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Cliente - Create</h1>
    </div>

    
    <div class="informacao-pagina">
        <div class="menu">
            <ul>
                <li><a href="{{route('cliente.create')}}">Cadastrar</a></li>
                <li><a href="{{route('cliente.index')}}">voltar</a></li>
            </ul>
        </div>
        <div style="width: 30%; margin-left:auto; margin-right:auto;" >
            @component('app.components.form3')
                
            @endcomponent
        </div>
    </div>
</div>

@endsection

