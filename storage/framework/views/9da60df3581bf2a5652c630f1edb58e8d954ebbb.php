<?php $__env->startSection('content'); ?>
<div class="container">
	<h2 class="center">Editar Papel</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
			        <a href="<?php echo e(route('admin.papel')); ?>" class="breadcrumb">Lista de Papéis</a>
			        <a class="breadcrumb">Editar Papel</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	<div class="row">
		<form action="<?php echo e(route('admin.papel.atualizar',$registro->id)); ?>" method="post">

		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="_method" value="put">
		<?php echo $__env->make('admin.papel._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<button class="btn blue">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/papel/editar.blade.php ENDPATH**/ ?>