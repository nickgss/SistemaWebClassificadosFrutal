<nav>
    <div class="nav-wrapper blue">
      <div class="container">
        <a href="<?php echo e(route('site.home')); ?>" class="brand-logo">Classificados Frutal</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
          <li><a href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
          <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
         
        </ul>
      </div>  
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
    <li><a href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
    <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
  
  </ul>
  <?php /**PATH /var/www/html/tcc1/resources/views/layouts/_site/_nav.blade.php ENDPATH**/ ?>