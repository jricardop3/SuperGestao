<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Gestão @yield('title')</title>
    <link href="{{ asset('css/basico.css') }}" rel="stylesheet">

</head>
<body>
    @component('components.nav')@endcomponent <!-- component do logo e menu de navegação. -->
    @yield('conteudo') <!-- conteudo rederizados das paginas principais. -->
    @component('components.footer')@endcomponent <!-- component do rodapé. -->
</body>
</html>