
<form action="{{route('pedido-produto.store', ['pedido' => $pedido])}}" method="post">
@csrf
    <select name="produto_id" >
    <option>--Selecione um produto</option>
    @foreach ($produtos as $produto)
        <option value="{{$produto->id}}"  {{old('cliente_id') == $produto->id ? 'selected' : ''}}>{{$produto->nome}}</option>
    @endforeach
    </select>
    {{$errors->has('produto_id') ? $errors->first('produto_id') : ''}}
    <input type="number" name="quantidade" value="{{old('quantidade') ? old('quantidade') : ''}}" placeholder="Quantidade">
    {{$errors->has('quantidade') ? $errors->first('quantidade') : ''}}
    <button type="submit" class="borda-preta">Cadastrar</button>
</form>