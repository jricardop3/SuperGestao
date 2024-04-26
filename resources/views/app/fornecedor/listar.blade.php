@extends('app.components.layout')
@section('title',  '- Fornecedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Fornecedor - Listar</h1>
    </div>

    @component('app.components.sub-nav')@endcomponent <!-- component do logo e menu de navegação. -->
    <div class="informacao-pagina">       
        <table border="2px" style="width: 50%; margin-left:auto; margin-right:auto;">
            <thead>
                <th>Fornecedor</th>
                <th>Site</th>
                <th>UF</th>
                <th>Email</th>
            </thead>
            @foreach ($fornecedores as $fornecedor)
                <tbody>
                    <td>
                        {{$fornecedor->nome}}
                    </td>
                    <td>
                        {{$fornecedor->site}}
                    </td>
                    <td>
                        {{$fornecedor->uf}}
                    </td>
                    <td>
                        {{$fornecedor->email}}
                    </td>
                    <td>
                        <a href="{{route ('app.fornecedor.editar',$fornecedor->id)}}">Editar</a>
                    </td>
                </tbody>
            @endforeach
        </table>       
    </div>
</div>

@endsection

