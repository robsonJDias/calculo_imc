<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo IMC</title>



<body>

<?php $__env->startSection('conteudo'); ?>

    <h1>Calculo de IMC</h1>

    <div>
        <?php echo e('calculoIMC'['resultado']); ?>

    </div>


<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layout,templete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\projeto1\resources\views/calculoIMC.blade.php ENDPATH**/ ?>