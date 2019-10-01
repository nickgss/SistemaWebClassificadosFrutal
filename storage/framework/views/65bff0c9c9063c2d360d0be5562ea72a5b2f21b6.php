<div class="input-field">
	<input type="text" name="name" class="validade" value="<?php echo e(isset($usuario->name) ? $usuario->name : ''); ?>">
	<label>Nome</label>
</div>
<div class="input-field">
	<input type="text" name="email" class="validade" value="<?php echo e(isset($usuario->email) ? $usuario->email : ''); ?>">
	<label>E-mail</label>
</div>
<div class="input-field">
	<input type="password" name="password" class="validade">
	<label>Senha</label>
</div><?php /**PATH /var/www/html/tcc1/resources/views/admin/usuarios/_form.blade.php ENDPATH**/ ?>