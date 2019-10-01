 
<!-- <div id="app">
    <nav>
    <div class="nav-wrapper blue">
      <div class="container">
        <a href="<?php echo e(route('site.home')); ?>" class="brand-logo">SisAdmin</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
          <li><a href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
          <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
          <li><a href="mobile.html">Mobile</a></li>
        </ul>
      </div>  
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
    <li><a href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
    <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul> -->

<div id="app">
    <nav>
    <div class="nav-wrapper blue">
      <div class="container">
        <a href="<?php echo e(route('site.home')); ?>" class="brand-logo">SisAdmin</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo e(route('admin.principal')); ?>">Início</a></li>
            <li><a target="_blanck" href="<?php echo e(route('site.home')); ?>">Site</a></li>
            <!-- <?php if(Auth::guest()): ?> -->
              <li><a href="<?php echo e(route('admin.login')); ?>">Login</a></li>
            <!-- <?php else: ?> -->

            <li><a class="dropdown-trigger btn" href="#!" data-target="dropdown1"><?php echo e(Auth::user()->name); ?>

            <i class="material-icons right">arrow_drop_down</i></a></li>

            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!"><?php echo e(Auth::user()->name); ?></a></li>
              <li><a href="<?php echo e(route('admin.imoveis')); ?>">Imóveis</a></li>
              <li><a href="<?php echo e(route('admin.tipos')); ?>">Tipos</a></li>
              <li><a href="<?php echo e(route('admin.cidades')); ?>">Cidades</a></li>
              <li><a href="<?php echo e(route('admin.slides')); ?>">Slides</a></li>
              <!-- <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario_listar')): ?> -->
              <li><a href="<?php echo e(route('admin.usuarios')); ?>">Usuários</a></li>
              <!-- <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('papel_listar')): ?> -->
              <li><a href="<?php echo e(route('admin.papel')); ?>">Papel</a></li>
              <!-- <?php endif; ?> -->
              <li><a href="<?php echo e(route('admin.paginas')); ?>">Páginas</a></li>
            </ul>

            <li><a href="<?php echo e(route('admin.login.sair')); ?>">Sair</a></li>
            <?php endif; ?>
      </div>  
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
  <li><a href="<?php echo e(route('admin.principal')); ?>">Início</a></li>
            <li><a target="_blanck" href="<?php echo e(route('site.home')); ?>">Site</a></li>
            <?php if(Auth::guest()): ?>
              <li><a href="<?php echo e(route('admin.login')); ?>">Login</a></li>
            <?php else: ?>
            <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
            <li><a href="<?php echo e(route('admin.imoveis')); ?>">Imóveis</a></li>
            <li><a href="<?php echo e(route('admin.tipos')); ?>">Tipos</a></li>
            <li><a href="<?php echo e(route('admin.cidades')); ?>">Cidades</a></li>
            <li><a href="<?php echo e(route('admin.slides')); ?>">Slides</a></li>
            <li><a href="<?php echo e(route('admin.usuarios')); ?>">Usuários</a></li>
            <li><a href="<?php echo e(route('admin.papel')); ?>">Papel</a></li>
              <li><a href="<?php echo e(route('admin.paginas')); ?>">Páginas</a></li>
            <li><a href="<?php echo e(route('admin.login.sair')); ?>">Sair</a></li>
            <?php endif; ?>
</ul>

<!-- <nav>
    <div class="nav-wrapper blue">
        <div class="container">
          <a href="<?php echo e(route('admin.principal')); ?>" class="brand-logo">SisAdmin</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo e(route('admin.principal')); ?>">Início</a></li>
            <li><a target="_blanck" href="<?php echo e(route('site.home')); ?>">Site</a></li>
            <?php if(Auth::guest()): ?>
              <li><a href="<?php echo e(route('admin.login')); ?>">Login</a></li>
            <?php else: ?>

            <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo e(Auth::user()->name); ?>

            <i class="material-icons right">arrow_drop_down</i></a></li>

            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!"><?php echo e(Auth::user()->name); ?></a></li>
              <li><a href="<?php echo e(route('admin.imoveis')); ?>">Imóveis</a></li>
              <li><a href="<?php echo e(route('admin.tipos')); ?>">Tipos</a></li>
              <li><a href="<?php echo e(route('admin.cidades')); ?>">Cidades</a></li>
              <li><a href="<?php echo e(route('admin.slides')); ?>">Slides</a></li>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario_listar')): ?>
              <li><a href="<?php echo e(route('admin.usuarios')); ?>">Usuários</a></li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('papel_listar')): ?>
              <li><a href="<?php echo e(route('admin.papel')); ?>">Papel</a></li>
              <?php endif; ?>
              <li><a href="<?php echo e(route('admin.paginas')); ?>">Páginas</a></li>
            </ul>

            <li><a href="<?php echo e(route('admin.login.sair')); ?>">Sair</a></li>
            <?php endif; ?>
          </ul>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="<?php echo e(route('admin.principal')); ?>">Início</a></li>
            <li><a target="_blanck" href="<?php echo e(route('site.home')); ?>">Site</a></li>
            <?php if(Auth::guest()): ?>
              <li><a href="<?php echo e(route('admin.login')); ?>">Login</a></li>
            <?php else: ?>
            <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
            <li><a href="<?php echo e(route('admin.imoveis')); ?>">Imóveis</a></li>
            <li><a href="<?php echo e(route('admin.tipos')); ?>">Tipos</a></li>
            <li><a href="<?php echo e(route('admin.cidades')); ?>">Cidades</a></li>
            <li><a href="<?php echo e(route('admin.slides')); ?>">Slides</a></li>
            <li><a href="<?php echo e(route('admin.usuarios')); ?>">Usuários</a></li>
            <li><a href="<?php echo e(route('admin.papel')); ?>">Papel</a></li>
              <li><a href="<?php echo e(route('admin.paginas')); ?>">Páginas</a></li>
            <li><a href="<?php echo e(route('admin.login.sair')); ?>">Sair</a></li>
            <?php endif; ?>
          </ul>
          </div>
    </div>
</nav> --><?php /**PATH /var/www/html/tcc1/resources/views/layouts/_admin/_nav.blade.php ENDPATH**/ ?>