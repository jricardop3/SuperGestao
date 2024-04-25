@extends('app.components.layout')
@section('title',  '- Fornecedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Fornecedor - Adicionar</h1>
    </div>

    @component('app.components.sub-nav')@endcomponent <!-- component do logo e menu de navegação. -->
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left:auto; margin-right:auto;" >
            <form action="" method="post">
            @csrf
            <input type="text" name="nome" placeholder="Nome" id="" class="borda-preta">
            <input type="text" name="site" placeholder="Site" id="" class="borda-preta">
            <input type="text" name="uf" placeholder="UF" id="" class="borda-preta">
            <input type="text" name="email" placeholder="E-mail" id="" class="borda-preta">
            <button type="submit" class="borda-preta">Pesquisar</button>
            </form>
        </div>
    </div>
</div>

@endsection

