<!-- <div class="row section">
    <h3 align="center">Imóveis</h3>
    <div class="divider"></div>
</div>
<div class="row section">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href ="#"><img src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="Imagem"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">Vende</b></p>
                <p><b>Titulo do Imovel</b></p>
                <p>Descrição do Imóvel</p>
                <p>R$ 200.000,00</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Mais </a>
            </div>

        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href ="#"><img src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="Imagem"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">Vende</b></p>
                <p><b>Titulo do Imovel</b></p>
                <p>Descrição do Imóvel</p>
                <p>R$ 200.000,00</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Mais </a>
            </div>

        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href ="#"><img src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="Imagem"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">Vende</b></p>
                <p><b>Titulo do Imovel</b></p>
                <p>Descrição do Imóvel</p>
                <p>R$ 200.000,00</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Mais </a>
            </div>

        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href ="#"><img src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="Imagem"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">Vende</b></p>
                <p><b>Titulo do Imovel</b></p>
                <p>Descrição do Imóvel</p>
                <p>R$ 200.000,00</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Mais </a>
            </div>

        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href ="#"><img src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="Imagem"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">Vende</b></p>
                <p><b>Titulo do Imovel</b></p>
                <p>Descrição do Imóvel</p>
                <p>R$ 200.000,00</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Mais </a>
            </div>

        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href ="#"><img src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="Imagem"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">Vende</b></p>
                <p><b>Titulo do Imovel</b></p>
                <p>Descrição do Imóvel</p>
                <p>R$ 200.000,00</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Mais </a>
            </div>

        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href ="#"><img src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="Imagem"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">Vende</b></p>
                <p><b>Titulo do Imovel</b></p>
                <p>Descrição do Imóvel</p>
                <p>R$ 200.000,00</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Mais </a>
            </div>

        </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <a href ="#"><img src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="Imagem"></a>
            </div>
            <div class="card-content">
                <p><b class="deep-orange-text darken-1">Vende</b></p>
                <p><b>Titulo do Imovel</b></p>
                <p>Descrição do Imóvel</p>
                <p>R$ 200.000,00</p>
            </div>
            <div class="card-action">
                <a href="#">Ver Mais </a>
            </div>

        </div>
    </div>

    
</div> -->

<div class="row section">
	<h3 align="center">Anuncios</h3>
	<div class="divider"></div>
	<br>
	<?php echo $__env->make('layouts._site._filtros', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="row section">
<?php $__currentLoopData = $imoveis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imovel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
	<div class="col s12 m3">
		<div class="card">
			<div class="card-image">
				<a href="<?php echo e(route('site.imovel',[$imovel->id,str_slug($imovel->titulo,'_')])); ?>"><img src="<?php echo e(asset($imovel->imagem)); ?>" alt="<?php echo e($imovel->titulo); ?>"></a>
			</div>
			<div class="card-content">
				<p><b class="deep-orange-text darken-1"><?php echo e($imovel->status); ?></b></p>
				<p><b><?php echo e($imovel->titulo); ?></b></p>
				<p><?php echo e($imovel->descricao); ?></p>
				<p>R$<?php echo e(number_format($imovel->valor,2,",",".")); ?></p>
			</div>
			<div class="card-action">
				<a href="<?php echo e(route('site.imovel',[$imovel->id,str_slug($imovel->titulo,'_')])); ?>">Ver mais..</a>
			</div>
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
<?php if($paginacao): ?>
	<div align="center" class="row">
		<?php echo e($imoveis->links()); ?>

	</div>
<?php endif; ?><?php /**PATH /var/www/html/tcc1/resources/views/layouts/_site/_lista_imoveis.blade.php ENDPATH**/ ?>