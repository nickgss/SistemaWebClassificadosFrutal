<?php $__env->startSection('content'); ?>
<div class="container">
	<h2 class="center">Adicionar Slide</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
			        <a href="<?php echo e(route('admin.slides')); ?>" class="breadcrumb">Lista de Slides</a>
			        <a class="breadcrumb">Adicionar Slide</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	<div class="row">
		<form action="<?php echo e(route('admin.slides.salvar')); ?>" method="post" enctype="multipart/form-data">

		<?php echo e(csrf_field()); ?>

		<?php echo $__env->make('admin.slides._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/slides/adicionar.blade.php ENDPATH**/ ?>