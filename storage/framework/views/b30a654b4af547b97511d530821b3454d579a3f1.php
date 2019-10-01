<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2 class="center">Lista de Papéis</h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
				        <a class="breadcrumb">Lista de Papéis</a>
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
						<th>Descrição</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($registro->id); ?></td>
						<td><?php echo e($registro->nome); ?></td>
						<td><?php echo e($registro->descricao); ?></td>
						
						<td>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('papel_editar')): ?>
								<?php if($registro->nome != 'admin'): ?>
								<a class="btn orange" href="<?php echo e(route('admin.papel.editar',$registro->id)); ?>">Editar</a>
								<a class="btn blue" href="<?php echo e(route('admin.papel.permissao',$registro->id)); ?>">Permissão</a>
								<?php else: ?>
								<a class="btn orange disabled" >Editar</a>
								<a class="btn blue disabled" >Permissão</a>
								<?php endif; ?>

							<?php endif; ?>

							
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('papel_deletar')): ?>
								<?php if($registro->nome != 'admin'): ?>
								<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '<?php echo e(route('admin.papel.deletar',$registro->id)); ?>' }">Deletar</a>
								<?php else: ?>
								<a class="btn red disabled" >Deletar</a>
								<?php endif; ?>
							<?php endif; ?>
							
							
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			
		</div>
		<div class="row">
			<a class="btn blue" href="<?php echo e(route('admin.papel.adicionar')); ?>">Adicionar</a>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/papel/index.blade.php ENDPATH**/ ?>