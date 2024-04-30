@if (isset($produto->id))
            <form action="{{route('produto.update',['produto'=>$produto->id])}}" method="post">
            @method('PUT')
            @csrf    
            @else
            <form action="{{route('produto.store')}}" method="post">
                @csrf
            @endif
            
            <input type="hidden" name="id">
            <input type="text" name="nome" value="{{$produto->nome ?? old('nome')}}" placeholder="Nome" class="borda-preta">
            {{$errors->has('nome') ? $errors->first('nome') : ''}}
            <input type="text" name="descricao" value="{{$produto->descricao ?? old('descricao')}}" placeholder="Descrição" class="borda-preta">
            {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
            <input type="text" name="altura" value="{{$produto->altura ?? old('altura')}}" placeholder="Altura" class="borda-preta">
            {{$errors->has('altura') ? $errors->first('altura') : ''}}
            <select name="unidade_id" >
                <option>--Selecione a Unidade de medida</option>
                @foreach ($unidades as $unidade)
                    <option value="{{$unidade->id}}"  {{$produto->unidade_id ?? old('unidade_id') == $unidade->id ? 'selected' : ''}}>{{$unidade->descricao}}</option>
                @endforeach
            </select>
            {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}
            <button type="submit" class="borda-preta">Cadastrar</button>
            </form>