<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo IMC</title>



<body>

<?php $__env->startSection('conteudo'); ?>

    <h1>Calculo de IMC</h1>


    <?php if($imc >=  18.5 && $imc <= 24.9): ?>
        <div class="alert alert-success">
            <?php echo e($resultado); ?>

        </div>
    <?php endif; ?>
    <?php if($imc <= 18.4 or $imc >= 25): ?>
        <div class="alert alert-danger">
            <?php echo e($resultado); ?>

        </div>
    <?php endif; ?>



<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layout.templete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\projeto1\resources\views/calculoimc.blade.php ENDPATH**/ ?>