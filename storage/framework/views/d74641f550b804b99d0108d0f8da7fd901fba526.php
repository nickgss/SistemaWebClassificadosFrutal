<div class="row section">
	<h3 align="center">Anuncios</h3>
	<div class="divider"></div>
	<br>
	<?php echo $__env->make('layouts._site._filtros', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="row section">
<?php $__currentLoopData = $anuncios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
	<div class="col s12 m3">
		<div class="card">
			<div class="card-image">
				<a href="<?php echo e(route('site.anuncio',[$anuncio->id,str_slug($anuncio->titulo,'_')])); ?>"><img src="<?php echo e(asset($anuncio->imagem)); ?>" alt="<?php echo e($anuncio->titulo); ?>"></a>
			</div>
			<div class="card-content">
				<p><b class="deep-orange-text darken-1"><?php echo e($anuncio->status); ?></b></p>
				<p><b><?php echo e($anuncio->titulo); ?></b></p>
				<p><?php echo e($anuncio->descricao); ?></p>
				<p>R$<?php echo e(number_format($anuncio->valor,2,",",".")); ?></p>
			</div>
			<div class="card-action">
				<a href="<?php echo e(route('site.anuncio',[$anuncio->id,str_slug($anuncio->titulo,'_')])); ?>">Ver mais..</a>
			</div>
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
<?php if($paginacao): ?>
	<div align="center" class="row">
		<?php echo e($anuncios->links()); ?>

	</div>
<?php endif; ?><?php /**PATH /var/www/html/tcc1/resources/views/layouts/_site/_lista_anuncios.blade.php ENDPATH**/ ?>