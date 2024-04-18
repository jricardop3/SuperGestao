@extends('components.layout')
@section('title',  '- Contato')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            @component('components.form')
                <h1>Olá</h1>
            @endcomponent
        </div>
    </div>  
</div>

@endsection

