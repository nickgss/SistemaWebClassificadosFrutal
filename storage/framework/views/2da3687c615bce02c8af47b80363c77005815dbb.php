<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row section">
        <h3 align="center">Imóvel</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <?php if($imovel->galeria()->count()): ?>
            <div class="row">
                <div class="slider">
                    <ul class="slides">
                    <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <img src="<?php echo e(asset($imagem->imagem)); ?>">
                            <div class="caption <?php echo e($direcaoImagem[rand(0,2)]); ?>">
                                <h3><?php echo e($imagem->titulo); ?></h3>
                                <h5><?php echo e($imagem->descricao); ?></h5>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </ul>
                </div>
            </div>
            <div class="row" align="center">
                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próxima</button>
            </div>
            <?php else: ?>
            <img class="responsive-img" src="<?php echo e(asset($imovel->imagem)); ?>">
            <?php endif; ?>
        </div>
        <div class="col s12 m4">
            <h4><?php echo e($imovel->titulo); ?></h4>
            <blockquote>
                <?php echo e($imovel->descricao); ?>

            </blockquote>
            <p><b>Código:</b> <?php echo e($imovel->id); ?></p>
            <p><b>Status:</b> <?php echo e($imovel->status); ?></p>
            <p><b>Tipo:</b> <?php echo e($imovel->tipo->titulo); ?></p>
            <p><b>Dormitórios:</b> <?php echo e($imovel->dormitorios); ?></p>
            <p><b>Endereço:</b> <?php echo e($imovel->endereco); ?></p>
            <p><b>Cep:</b> <?php echo e($imovel->cep); ?></p>
            <p><b>Cidade:</b> <?php echo e($imovel->cidade->nome); ?></p>
            <p><b>Valor:</b> R$ <?php echo e(number_format($imovel->valor,2,",",".")); ?></p>
            <p>
            <b>Compartilhar: </b>
            <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo e(isset($seo['url']) ? $seo['url'] : config('app.url')); ?>"><i class="blue-text mdi mdi-facebook mdi-24px"></i></a>
            <a target="_blank" href="http://twitter.com/intent/tweet?text=<?php echo e(isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo')); ?>&url=<?php echo e(isset($seo['url']) ? $seo['url'] : config('app.url')); ?>&via=SiteDinâmico"><i class="blue-text mdi mdi-twitter mdi-24px"></i></a>
            </p>
            <a class="btn deep-orange darken-1" href="<?php echo e(route('site.contato')); ?>">Entrar em contato</a>
        </div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="video-container">
                <?php echo $imovel->mapa; ?>

            </div>
        </div>
        <div class="col s12 m4">
            <h4>Detalhes:</h4>
            <p><?php echo e($imovel->detalhes); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/site/imovel.blade.php ENDPATH**/ ?>