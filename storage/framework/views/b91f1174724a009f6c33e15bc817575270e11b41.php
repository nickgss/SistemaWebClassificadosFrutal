<?php if(isset($registro->imagem)): ?>


<div class="input-field">
	<input type="text" name="titulo" class="validade" value="<?php echo e(isset($registro->titulo) ? $registro->titulo : ''); ?>">
	<label>Título</label>
</div>
<div class="input-field">
	<input type="text" name="descricao" class="validade" value="<?php echo e(isset($registro->descricao) ? $registro->descricao : ''); ?>">
	<label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="ordem" class="validade" value="<?php echo e(isset($registro->ordem) ? $registro->ordem : ''); ?>">
    <label>Ordem</label>
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
	
		<img width="120" src="<?php echo e(asset($registro->imagem)); ?>">
	
	</div>
</div>

<?php else: ?>

<div class="row">
    <div class="file-field input-field col m12 s12">
        <div class="btn">
        <span>Upload de Imagens</span>
            <input type="file" multiple name="imagens[]">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>    
</div>

<?php endif; ?>











<?php /**PATH /var/www/html/tcc1/resources/views/admin/galerias/_form.blade.php ENDPATH**/ ?>