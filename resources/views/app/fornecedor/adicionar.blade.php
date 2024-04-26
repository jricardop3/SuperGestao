@extends('app.components.layout')
@section('title',  '- Fornecedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Fornecedor - Adicionar <h5>{{$msg ?? ''}}</h5></h1>
    </div>

    @component('app.components.sub-nav')@endcomponent <!-- component do logo e menu de navegação. -->
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left:auto; margin-right:auto;" >
            <form action="{{route('app.fornecedor.adicionar')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$fornecedor->id ?? ''}}">
            <input type="text" name="nome" value="{{$fornecedor->nome ?? old('nome')}}" placeholder="Nome" id="" class="borda-preta">
            {{$errors->has('nome') ? $errors->first('nome') : ''}}
            <input type="text" name="site" value="{{$fornecedor->site ?? old('site')}}" placeholder="Site" id="" class="borda-preta">
            {{$errors->has('site') ? $errors->first('site') : ''}}
            <input type="text" name="uf" value="{{$fornecedor->uf ?? old('uf')}}" placeholder="UF" id="" class="borda-preta">
            {{$errors->has('uf') ? $errors->first('uf') : ''}}
            <input type="text" name="email" value="{{$fornecedor->email ?? old('email')}}" placeholder="E-mail" id="" class="borda-preta">
            {{$errors->has('email') ? $errors->first('email') : ''}}
            <button type="submit" class="borda-preta">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

@endsection

