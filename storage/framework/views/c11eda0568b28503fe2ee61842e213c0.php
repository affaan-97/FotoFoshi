<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <?php echo app('Illuminate\Foundation\Vite')([ 'resources/css/app.css',
                'resources/js/app.js',]); ?>
       
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <?php echo e($slot); ?>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\FotoFoshi\resources\views/components/layout.blade.php ENDPATH**/ ?>