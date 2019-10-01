<?php $__env->startSection('content'); ?>
<div class="container">
	<h2 class="center">Adicionar Tipos</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
			        <a href="<?php echo e(route('admin.tipos')); ?>" class="breadcrumb">Lista de Tipos</a>
			        <a class="breadcrumb">Adicionar Tipo</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	<div class="row">
		<form action="<?php echo e(route('admin.tipos.salvar')); ?>" method="post">

		<?php echo e(csrf_field()); ?>

		<?php echo $__env->make('admin.tipos._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/tipos/adicionar.blade.php ENDPATH**/ ?>