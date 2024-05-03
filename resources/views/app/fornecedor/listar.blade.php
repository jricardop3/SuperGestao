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
                    <tr>
                        <td>
                            <p>Lista de produtos:</p>
                            <table class="table align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($fornecedor->produtos as $produto) <!-- provocar erro: //foreach($fornecedor->produtos as $key => $produto) -->
                                    <tr>    
                                        <td>{{$produto->id}}</td>
                                        <td>{{$produto->nome}}</td> 
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        </div>
        <div style="width: 40%;" class="mx-auto">
            {{ $fornecedores-> appends($request)-> links() }}
            
        </div>      
    </div>
</div>

@endsection

