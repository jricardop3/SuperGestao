@extends('components.layout')
@section('title',  '- Contato')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Login</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            <div style="max-width: 30%; margin-left:auto; margin-right:auto;">
                <form action="{{route('site.login')}}" method="post">
                    @csrf
                    <input type="text" name="usuario" value="{{old('usuario')}}" id="" placeholder="Usuario" class="borda-preta">
                    {{$errors->has('usuario') ? $errors->first('usuario') : ''}}
                    <input type="password" name="senha" value="{{old('senha')}}" id="" placeholder="Senha" class="borda-preta">
                    {{$errors->has('senha') ? $errors->first('senha') : ''}}
                    <button type="submit" class="borda-preta">Entrar</button>
                    </form>
                    {{isset($erro) && $erro != '' ? $erro : ''}}
            </div>
            
        </div>
    </div>  
</div>

@endsection

