{{$slot}}
<form action="{{route('site.contato')}}" method="POST">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="motivo" value="{{ old('motivo') }}"  class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="borda-preta"> Preencha a mensagem aqui</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>

    <pre>
        {{print_r($errors)}}
    </pre>
</form>