@if (isset($cliente->id))
    <form action="{{route('cliente.update',['cliente'=>$cliente->id])}}" method="post">
    @method('PUT')
    @csrf    
@else
    <form action="{{route('cliente.store')}}" method="post">
    @csrf
@endif
    <input type="text" name="nome" value="{{$cliente->nome ?? old('cliente')}}" placeholder="Cliente" class="borda-preta">
    {{$errors->has('cliente') ? $errors->first('cliente') : ''}}
    <button type="submit" class="borda-preta">Cadastrar</button>
</form>