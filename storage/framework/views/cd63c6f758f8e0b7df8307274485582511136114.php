<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2 class="center">Lista de Slides</h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
				        <a class="breadcrumb">Lista de Slides</a>
			      	</div>
			    </div>
		  	</nav>
		</div>

	
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Ordem</th>
						<th>Título</th>					
						<th>Descrição</th>
						<th>Publicado</th>
						<th>Imagem</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($registro->ordem); ?></td>
						<td><?php echo e($registro->titulo); ?></td>
						<td><?php echo e($registro->descricao); ?></td>	
						<td><?php echo e($registro->publicado); ?></td>	
						<td><img width="100" src="<?php echo e(asset($registro->imagem)); ?>"></td>
						<td><?php echo e($registro->ordem); ?></td>
						<td>
							<a class="btn orange" href="<?php echo e(route('admin.slides.editar',$registro->id)); ?>">Editar</a>
							<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '<?php echo e(route('admin.slides.deletar',$registro->id)); ?>' }">Deletar</a>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			
		</div>
		<div class="row">
			<a class="btn blue" href="<?php echo e(route('admin.slides.adicionar')); ?>">Adicionar</a>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/slides/index.blade.php ENDPATH**/ ?>