@extends('app.components.layout')
@section('title',  '- Adicionar detalhes do Produto')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Adicionar detalhes do produto: </h1>
    </div>

    
    <div class="informacao-pagina">
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.create')}}">Cadastrar</a></li>
                <li><a href="{{route('produto.index')}}">voltar</a></li>
            </ul>
        </div>
        <div style="width: 30%; margin-left:auto; margin-right:auto;" >
            @component('app.components.form2',['unidades'=>$unidades])
                
            @endcomponent
        </div>
    </div>
</div>

@endsection

