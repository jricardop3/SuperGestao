
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src=" {{asset('img/logo.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Super Gestão
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav me-5">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('site.index')}}">Principal</a></li> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site.sobrenos')}}">Sobre Nós</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site.contato')}}">Contato</a></li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('site.login')}}">Login</a></li>
        </li>
      </ul>
    </div>
    </div>
  </nav>


