<div class="input-field">
	<input type="text" name="nome" class="validade" value="<?php echo e(isset($registro->nome) ? $registro->nome : ''); ?>">
	<label>Nome do papel</label>
</div>

<div class="input-field">
	<input type="text" name="descricao" class="validade" value="<?php echo e(isset($registro->descricao) ? $registro->descricao : ''); ?>">
	<label>Descrição</label>
</div>


<?php /**PATH /var/www/html/tcc1/resources/views/admin/papel/_form.blade.php ENDPATH**/ ?>