<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2 class="center">Lista de Papéis para <?php echo e($usuario->name); ?></h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
				        <a href="<?php echo e(route('admin.usuarios')); ?>" class="breadcrumb">Lista de Usuários</a>
				        <a class="breadcrumb">Lista de Papéis</a>
			      	</div>
			    </div>
		  	</nav>
		</div>

		<div class="row">
			<form action="<?php echo e(route('admin.usuarios.papel.salvar',$usuario->id)); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="input-field">
				<select name="papel_id">
					<?php $__currentLoopData = $papel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($valor->id); ?>"><?php echo e($valor->nome); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
				<button class="btn blue">Adicionar</button>
			</form>
			
			
		</div>
	
		<div class="row">
			<table>
				<thead>
					<tr>
						
						<th>Papel</th>
						<th>Descrição</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $usuario->papeis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $papel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($papel->nome); ?></td>
						<td><?php echo e($papel->descricao); ?></td>
						
						<td>
							
							<a class="btn red" href="javascript: if(confirm('Remover esse papel?')){ window.location.href = '<?php echo e(route('admin.usuarios.papel.remover',[$usuario->id,$papel->id])); ?>' }">Remover</a>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			
		</div>
		
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/admin/usuarios/papel.blade.php ENDPATH**/ ?>