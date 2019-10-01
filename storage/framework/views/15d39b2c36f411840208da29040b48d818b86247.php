<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts._site._slides', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <?php echo $__env->make('layouts._site._lista_anuncios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tcc1/resources/views/site/home.blade.php ENDPATH**/ ?>