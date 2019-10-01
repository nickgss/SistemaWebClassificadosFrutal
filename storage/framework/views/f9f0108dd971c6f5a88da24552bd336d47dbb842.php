<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2 class="center">Lista de Cidades</h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
				        <a class="breadcrumb">Lista de Cidades</a>
			      	</div>
			    </div>
		  	</nav>
		</div>

	
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>						
						<th>Estado</th>						
						<th>Sigla do Estado</th>				
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($registro->id); ?></td>
						<td><?php echo e($registro->nome); ?></td>
						<td><?php echo e($registro->estado); ?></td>
						<td><?php echo e($registro->sigla_estado); ?></td>
						<td>
							<a class="btn orange" href="<?php echo e(route('admin.cidades.editar',$registro->id)); ?>">Editar</a>
							<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '<?php echo e(route('admin.cidades.deletar',$registro->id)); ?>' }">Deletar</a>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			
		</div>
		<div class="row">
			<a class="btn blue" href="<?php echo e(route('admin.cidades.adicionar')); ?>">Adicionar</a>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/cidades/index.blade.php ENDPATH**/ ?>