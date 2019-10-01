<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row section">
        <h3 align="center">Anuncio</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <?php if($anuncio->galeria()->count()): ?>
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
            <img class="responsive-img" src="<?php echo e(asset($anuncio->imagem)); ?>">
            <?php endif; ?>
        </div>
        <div class="col s12 m4">
            <h4><?php echo e($anuncio->titulo); ?></h4>
            <blockquote>
                <?php echo e($anuncio->descricao); ?>

            </blockquote>
            <p><b>Código:</b> <?php echo e($anuncio->id); ?></p>
            <p><b>Status:</b> <?php echo e($anuncio->status); ?></p>
            <p><b>Tipo:</b> <?php echo e($anuncio->tipo->titulo); ?></p>           
            <p><b>Endereço:</b> <?php echo e($anuncio->endereco); ?></p>
            <p><b>Cep:</b> <?php echo e($anuncio->cep); ?></p>
            <p><b>Cidade:</b> <?php echo e($anuncio->cidade->nome); ?></p>
            <p><b>Valor:</b> R$ <?php echo e(number_format($anuncio->valor,2,",",".")); ?></p>
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
                <?php echo $anuncio->mapa; ?>

            </div>
        </div>
        <div class="col s12 m4">
            <h4>Detalhes:</h4>
            <p><?php echo e($anuncio->detalhes); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/site/anuncio.blade.php ENDPATH**/ ?>