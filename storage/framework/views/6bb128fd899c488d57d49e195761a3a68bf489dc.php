<?php $__env->startSection('content'); ?>

<div class="container">
	<h2>Entrar</h2>
	<form action="<?php echo e(route('admin.login')); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<?php echo $__env->make('admin.login._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<button class="btn blue">Entrar</button>		
	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/login/index.blade.php ENDPATH**/ ?>