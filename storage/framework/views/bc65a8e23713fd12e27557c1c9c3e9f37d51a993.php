<div class="input-field">
	<input type="text" name="titulo" class="validade" value="<?php echo e(isset($registro->titulo) ? $registro->titulo : ''); ?>">
	<label>Título</label>
</div>
<div class="input-field">
	<input type="text" name="descricao" class="validade" value="<?php echo e(isset($registro->descricao) ? $registro->descricao : ''); ?>">
	<label>Descrição</label>
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
	<?php if(isset($registro->imagem)): ?>
		<img width="120" src="<?php echo e(asset($registro->imagem)); ?>">
	<?php endif; ?>
	</div>
</div>

<div class="input-field">
    <select name="status">
        <option value="aluga" <?php echo e((isset($registro->status) && $registro->status == 'aluga'  ? 'selected' : '')); ?>>Alugar</option>
        <option value="vende" <?php echo e((isset($registro->status) && $registro->status == 'vende'  ? 'selected' : '')); ?>>Vender</option>
        <option value="servico" <?php echo e((isset($registro->status) && $registro->status == 'servico'  ? 'selected' : '')); ?>>Serviços</option>
    </select>
    <label>Status</label>
</div>

<div class="input-field">
    <select name="tipo_id">
        <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($tipo->id); ?>" <?php echo e((isset($registro->tipo_id) && $registro->tipo_id == $tipo->id  ? 'selected' : '')); ?>><?php echo e($tipo->titulo); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label>Tipo de Anuncio</label>
</div>

<div class="input-field">
    <input type="text" name="endereco" class="validate" value="<?php echo e((isset($registro->endereco) ? $registro->endereco : '')); ?>">
    <label>Endereço</label>
</div>

<div class="input-field">
    <input type="text" name="cep" class="validate" value="<?php echo e((isset($registro->cep) ? $registro->cep : '')); ?>">
    <label>CEP (Ex: 96848-146)</label>
</div>

<div class="input-field">
    <select name="cidade_id">
        <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($cidade->id); ?>" <?php echo e((isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')); ?>><?php echo e($cidade->nome); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label>Cidade</label>
</div>

<div class="input-field">
    <input type="text" name="valor" class="validate" value="<?php echo e((isset($registro->valor) ? $registro->valor : '')); ?>">
    <label>Valor (Ex: 234.90)</label>
</div>

<div class="input-field">
    <input type="text" name="detalhes" class="validate" value="<?php echo e((isset($registro->detalhes) ? $registro->detalhes : '')); ?>">
    <label>Detalhes (Ex: Alugo... Vendo... Presto serviços....)</label>
</div>

<div class="input-field">
<textarea name="mapa" class="materialize-textarea">
    <?php echo e((isset($registro->mapa) ? $registro->mapa : '')); ?>

</textarea>
    <label>Mapa (Cole o iframe do Google Maps)</label>
</div>

<div class="input-field">
    <select name="publicar">
        <option value="nao" <?php echo e((isset($registro->publicar) && $registro->publicar == 'nao'  ? 'selected' : '')); ?>>Não</option>
        <option value="sim" <?php echo e((isset($registro->publicar) && $registro->publicar == 'sim'  ? 'selected' : '')); ?>>Sim</option>
    </select>
    <label>Publicar?</label>
</div>




<?php /**PATH /var/www/html/tcc1/resources/views/admin/anuncios/_form.blade.php ENDPATH**/ ?>