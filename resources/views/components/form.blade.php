{{$slot}}

<form action="{{route('site.contato')}}" method="POST">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
    @if ($errors->has('nome'))
    {{$errors->first('nome')}}
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="borda-preta">
    @if ($errors->has('telefone'))
    {{$errors->first('telefone')}}
    @endif
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
    <br>
    @if ($errors->has('email'))
    {{$errors->first('email')}}
    @endif
    <select name="motivo_id" value="{{ old('motivo_id') }}"  class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $motivo) 
            <option value="{{$motivo->id}}" {{old('motivo_id') == $motivo->id ? 'selected': ''}}>{{$motivo->motivo}}</option> 
        @endforeach
        
    </select>
    @if ($errors->has('motivo_id'))
    {{$errors->first('motivo_id')}}
    @endif
    <br>
    <textarea name="mensagem" class="borda-preta"> Preencha a mensagem aqui</textarea>
    {{$errors->has('mensagem') ? $errors->first('mensagem'): ''}}
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
    @if ($errors->any())

        @foreach ($errors->all() as $erros)
        {{print_r($erros)}}
        <hr>
        @endforeach
    <pre>
        
    </pre>
    @endif
    
    
</form>