@extends('app.components.layout')
@section('title',  '- Fornecedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Produto - Create</h1>
    </div>

    
    <div class="informacao-pagina">
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.create')}}">Cadastrar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div style="width: 30%; margin-left:auto; margin-right:auto;" >
            <form action="{{route('produto.store')}}" method="post">
            @csrf
            <input type="hidden" name="id">
            <input type="text" name="nome" value="{{$produto->nome ?? old('nome')}}" placeholder="Nome" id="" class="borda-preta">
            {{$errors->has('nome') ? $errors->first('nome') : ''}}
            <input type="text" name="descricao" value="{{$produto->nome ?? old('nome')}}" placeholder="Descrição" id="" class="borda-preta">
            {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
            <input type="number" min="1" name="peso" value="{{$produto->nome ?? old('nome')}}" placeholder="Peso" id="" class="borda-preta">
            {{$errors->has('peso') ? $errors->first('peso') : ''}}
            <select name="unidade id" >
                <option>--Selecione a Unidade de medida</option>
                @foreach ($unidades as $unidade)
                <option value="{{$unidade->id}}"  {{old('unidade_id') == $unidade->id ? 'selected' : ''}}>Unidade</option>
                @endforeach
            </select>
            {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}
            <button type="submit" class="borda-preta">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

@endsection

