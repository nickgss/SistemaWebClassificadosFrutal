<div class="row">
	<form action="<?php echo e(route('site.busca')); ?>" >
		<div class="input-field col s6 m4">
			<select name="status">
				<option <?php echo e(isset($busca['status']) && $busca['status'] == 'todos' ? 'selected' : ''); ?> value="todos">Aluga,Vende e Servicos</option>
				<option <?php echo e(isset($busca['status']) && $busca['status'] == 'aluga' ? 'selected' : ''); ?> value="aluga">Aluga</option>
				<option <?php echo e(isset($busca['status']) && $busca['status'] == 'vende' ? 'selected' : ''); ?> value="vende">Vende</option>
				<option <?php echo e(isset($busca['status']) && $busca['status'] == 'servico' ? 'selected' : ''); ?> value="servico">Servico</option>
			</select>
			<label>Status</label>
		</div>
		<div class="input-field col s6 m4">
			<select name="tipo_id">
				<option <?php echo e(isset($busca['tipo_id']) && $busca['tipo_id'] == 'todos' ? 'selected' : ''); ?> value="todos">Todos os Tipos</option>
				<?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option <?php echo e(isset($busca['tipo_id']) && $busca['tipo_id'] == $tipo->id ? 'selected' : ''); ?> value="<?php echo e($tipo->id); ?>"><?php echo e($tipo->titulo); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			<label>Tipo de Anuncio</label>
		</div>
		<div class="input-field col s6 m4">
			<select name="cidade_id">
				<option <?php echo e(isset($busca['cidade_id']) && $busca['cidade_id'] == 'todos' ? 'selected' : ''); ?> value="todos">Todas as Cidades</option>
				<?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option <?php echo e(isset($busca['cidade_id']) && $busca['cidade_id'] == $cidade->id ? 'selected' : ''); ?> value="<?php echo e($cidade->id); ?>"><?php echo e($cidade->nome); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			<label>Cidade</label>
		</div>
		<!-- <div class="input-field col s6 m3">
			<select name="dormitorios">
				<option <?php echo e(isset($busca['dormitorios']) && $busca['dormitorios'] == 0 ? 'selected' : ''); ?> value="0">Todos</option>
				<option <?php echo e(isset($busca['dormitorios']) && $busca['dormitorios'] == 1 ? 'selected' : ''); ?> value="1">1</option>
				<option <?php echo e(isset($busca['dormitorios']) && $busca['dormitorios'] == 2 ? 'selected' : ''); ?> value="2">2</option>
				<option <?php echo e(isset($busca['dormitorios']) && $busca['dormitorios'] == 3 ? 'selected' : ''); ?> value="3">3</option>
				<option <?php echo e(isset($busca['dormitorios']) && $busca['dormitorios'] == 4 ? 'selected' : ''); ?> value="4">Mais</option>
			</select>
			<label>Dormitórios</label>
		</div> -->
		<div class="input-field col s12 m4">
			<select name="valor">
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 0 ? 'selected' : '' )); ?> value="0">Todos os Valores</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 1 ? 'selected' : '' )); ?> value="1">Até R$ 500,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 2 ? 'selected' : '' )); ?> value="2">R$ 500,00 a 1.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 3 ? 'selected' : '' )); ?> value="3">R$ 1.000,00 a 5.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 4 ? 'selected' : '' )); ?> value="4">R$ 5.000,00 a 10.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 5 ? 'selected' : '' )); ?> value="5">R$ 10.000,00 a 50.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 6 ? 'selected' : '' )); ?> value="6">R$ 50.000,00 a 100.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 7 ? 'selected' : '' )); ?> value="7">R$ 100.000,00 a 200.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 8 ? 'selected' : '' )); ?> value="8">R$ 200.000,00 a 300.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 9 ? 'selected' : '' )); ?> value="9">R$ 300.000,00 a 500.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 10 ? 'selected' : '' )); ?> value="10">R$ 500.000,00 a 1.000.000,00</option>
				<option <?php echo e((isset($busca['valor']) && $busca['valor'] == 11 ? 'selected' : '' )); ?> value="11">Acima de R$ 1.000.000,00</option>
				
			</select>
			<label>Valor</label>
		</div>
		<div class="input-field col s12 m3">
			<input class="validate" type="text" name="bairro" value="<?php echo e(isset($busca['bairro'])  ? $busca['bairro'] : ''); ?>">
			<label>Bairro</label>
		</div>
		<div class="input-field col s12 m2">
			<button class="btn deep-range darken-1 right">Filtrar</button>
		</div>
	</form>
</div><?php /**PATH /var/www/html/tcc1/resources/views/layouts/_site/_filtros.blade.php ENDPATH**/ ?>