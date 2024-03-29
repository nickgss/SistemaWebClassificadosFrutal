<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2 class="center">Lista de Usuários</h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
				        <a class="breadcrumb">Lista de Usuários</a>
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
						<th>E-mail</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($usuario->id); ?></td>
						<td><?php echo e($usuario->name); ?></td>
						<td><?php echo e($usuario->email); ?></td>
						<td>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario_editar')): ?>
							<a class="btn orange" href="<?php echo e(route('admin.usuarios.editar',$usuario->id)); ?>">Editar</a>
							<a class="btn blue" href="<?php echo e(route('admin.usuarios.papel',$usuario->id)); ?>">Papel</a>
							<?php endif; ?>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario_deletar')): ?>
							<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '<?php echo e(route('admin.usuarios.deletar',$usuario->id)); ?>' }">Deletar</a>
							<?php endif; ?>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			
		</div>
		<div class="row">
			<a class="btn blue" href="<?php echo e(route('admin.usuarios.adicionar')); ?>">Adicionar</a>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/usuarios/index.blade.php ENDPATH**/ ?>