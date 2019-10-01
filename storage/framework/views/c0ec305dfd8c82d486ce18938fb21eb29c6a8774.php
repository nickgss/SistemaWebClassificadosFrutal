<?php $__env->startSection('content'); ?>

<div class="container">
	<h2 class="center">Admin</h2>
	<div class="row">
        <div class="col s12 m4">
          <div class="card green darken-1">
            <div class="card-content white-text">
              <span class="card-title">Anuncios</span>
              <p>Lista de Anuncios</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="<?php echo e(route('admin.anuncios')); ?>">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card blue darken-1">
            <div class="card-content white-text">
              <span class="card-title">Tipos</span>
              <p>Lista de tipos</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="<?php echo e(route('admin.tipos')); ?>">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card orange darken-1">
            <div class="card-content white-text">
              <span class="card-title">Cidades</span>
              <p>Lista de cidades</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="<?php echo e(route('admin.cidades')); ?>">Acessar</a>
            </div>
          </div>
        </div>
	</div>
	<div class="row">
        <div class="col s12 m6">
          <div class="card deep-purple ">
            <div class="card-content white-text">
              <span class="card-title">Slides</span>
              <p>Lista de slides</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="<?php echo e(route('admin.slides')); ?>">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card deep-orange">
            <div class="card-content white-text">
              <span class="card-title">Usuários</span>
              <p>Lista de usuários</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="<?php echo e(route('admin.usuarios')); ?>">Acessar</a>
            </div>
          </div>
        </div>
        
	</div>
	<div class="row">
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('papel_listar')): ?>
		<div class="col s12 m6">
          <div class="card red darken-1">
            <div class="card-content white-text">
              <span class="card-title">Papel</span>
              <p>Lista de papéis</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="<?php echo e(route('admin.papel')); ?>">Acessar</a>
            </div>
          </div>
        </div>
    <?php endif; ?>
        <div class="col s12 m6">
          <div class="card green  darken-2 ">
            <div class="card-content white-text">
              <span class="card-title">Páginas</span>
              <p>Lista de páginas</p>
            </div>
            <div class="card-action">
              <a class="white-text" href="<?php echo e(route('admin.paginas')); ?>">Acessar</a>
            </div>
          </div>
        </div>
        
	</div>
	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/principal/index.blade.php ENDPATH**/ ?>