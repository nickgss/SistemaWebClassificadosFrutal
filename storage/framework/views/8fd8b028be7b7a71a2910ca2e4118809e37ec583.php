<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  
 

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    

    <!-- Compiled and minified CSS -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    
    <!-- <script src="<?php echo e(asset('js/init.js')); ?>"></script> -->
    <script src="<?php echo e(asset('js/init.js')); ?>" type="text/javascript"></script>

</head>
<body>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">

    <header>
    <?php echo $__env->make('layouts._admin._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <main>
        <?php if(Session::has('mensagem')): ?>
        <div class="container">
            <div class="row">
            <div class="card <?php echo e(Session::get('mensagem')['class']); ?>">
                <div align="center" class="card-content">
                <?php echo e(Session::get('mensagem')['msg']); ?>

                </div>
            </div>
            </div>
            
        </div>
        <?php endif; ?> 
        
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="page-footer blue" >
        <div class="container">
            <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                <p>
                <a href="#"><i class="white-text mdi mdi-facebook mdi-24px"></i></a>
                <a href="#"><i class="white-text mdi mdi-twitter mdi-24px"></i></a>
                <a href="#"><i class="white-text mdi mdi-youtube-play mdi-24px"></i></a>
                </p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.home')); ?>">Home</a></li>
                <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
                <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
                
                </ul>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    
</body>

</html>
<?php /**PATH /var/www/html/tcc1/resources/views/layouts/app.blade.php ENDPATH**/ ?>