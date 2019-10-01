<div id="app">
    <nav>
    <div class="nav-wrapper blue">
      <div class="container">
        <a href="{{ route('admin.principal') }}" class="brand-logo">Sistema Administrativo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('admin.principal') }}">Início</a></li>
            <li><a target="_blanck" href="{{ route('site.home') }}">Site</a></li>
            @if(Auth::guest())
              <li><a href="{{ route('admin.login') }}">Login</a></li>
            @else

            <li><a class="dropdown-trigger btn" href="#!" data-target="dropdown1">{{ Auth::user()->name }}
            <i class="material-icons right">arrow_drop_down</i></a></li>

            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">{{ Auth::user()->name }}</a></li>
              <li><a href="{{route('admin.anuncios')}}">Anuncios</a></li>
              <li><a href="{{route('admin.tipos')}}">Tipos</a></li>
              <li><a href="{{route('admin.cidades')}}">Cidades</a></li>
              <li><a href="{{route('admin.slides')}}">Slides</a></li>
              @can('usuario_listar')
              <li><a href="{{route('admin.usuarios')}}">Usuários</a></li>
              @endcan
              @can('papel_listar') 
              <li><a href="{{route('admin.papel')}}">Papel</a></li>
              @endcan
              <li><a href="{{route('admin.paginas')}}">Páginas</a></li>
            </ul>

            <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
            @endif
      </div>  
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
  <li><a href="{{ route('admin.principal') }}">Início</a></li>
            <li><a target="_blanck" href="{{ route('site.home') }}">Site</a></li>
            @if(Auth::guest())
              <li><a href="{{ route('admin.login') }}">Login</a></li>
            @else
            <li><a href="#">{{ Auth::user()->name }}</a></li>
            <li><a href="{{route('admin.anuncios')}}">Anuncios</a></li>
            <li><a href="{{route('admin.tipos')}}">Tipos</a></li>
            <li><a href="{{route('admin.cidades')}}">Cidades</a></li>
            <li><a href="{{route('admin.slides')}}">Slides</a></li>
            <li><a href="{{route('admin.usuarios')}}">Usuários</a></li>
            <li><a href="{{route('admin.papel')}}">Papel</a></li>
              <li><a href="{{route('admin.paginas')}}">Páginas</a></li>
            <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
            @endif
</ul>