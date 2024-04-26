@extends('app.components.layout')
@section('title',  '- Fornecedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-f">
        <h1>Fornecedor - Listar</h1>
    </div>

    @component('app.components.sub-nav')@endcomponent <!-- component do logo e menu de navegação. -->
    <div class="informacao-pagina py-5 container">       
        <div class="table-responsive">

        <table class="table align-middle">
            <thead class="table-dark">
                <th>Fornecedor</th>
                <th>Site</th>
                <th>UF</th>
                <th>Email</th>
                <th></th>
                <th></th>
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
                        <a href="{{route ('app.fornecedor.excluir',$fornecedor->id)}}">Excluir</a>
                    </td>
                    <td>
                        <a href="{{route ('app.fornecedor.editar',$fornecedor->id)}}">Editar</a>
                    </td>
                </tbody>
            @endforeach
        </table>
        </div>
        <div style="width: 40%;" class="mx-auto pt-5">
            {{ $fornecedores-> appends($request)-> links() }}
            
        </div>      
    </div>
</div>

@endsection

