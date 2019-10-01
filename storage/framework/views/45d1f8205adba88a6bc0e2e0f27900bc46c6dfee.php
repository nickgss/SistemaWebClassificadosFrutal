<div class="input-field">
	<input type="text" name="titulo" class="validade" value="<?php echo e(isset($pagina->titulo) ? $pagina->titulo : ''); ?>">
	<label>Título</label>
</div>
<div class="input-field">
	<input type="text" name="descricao" class="validade" value="<?php echo e(isset($pagina->descricao) ? $pagina->descricao : ''); ?>">
	<label>Descrição</label>
</div>
<?php if(isset($pagina->email)): ?>
<div class="input-field">
	<input type="text" name="email" class="validade" value="<?php echo e(isset($pagina->email) ? $pagina->email : ''); ?>">
	<label>E-mail</label>
</div>
<?php endif; ?>
<div class="input-field">
	<textarea name="texto" class="materialize-textarea">
		<?php echo e(isset($pagina->texto) ? $pagina->texto : ''); ?>

	</textarea>
	<label>Texto</label>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
		<span>Imagem</span>
			<input type="file" name="imagem">
		</div>
		<div class="file-path-wrapper">
			<input type="text" class="file-path validade">
		</div>		
	</div>
	<div class="col m6 s12">
	<?php if(isset($pagina->imagem)): ?>
		<img width="120" src="<?php echo e(asset($pagina->imagem)); ?>">
	<?php endif; ?>
	</div>
</div>

<div class="input-field">
	<textarea name="mapa" class="materialize-textarea">
		<?php echo e(isset($pagina->mapa) ? $pagina->mapa : ''); ?>

	</textarea>
	<label>Mapa</label>
</div>

<?php /**PATH /var/www/html/tcc1/resources/views/admin/paginas/_form.blade.php ENDPATH**/ ?>