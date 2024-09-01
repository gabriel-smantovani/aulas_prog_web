<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perímetro do retângulo</title>
    <link rel="stylesheet" href=<?php echo e(asset('css/exer.css')); ?>>
</head>
<body>
    <header>
        <nav>
            <a href="navegacao">voltar</a>
        </nav>
    </header>
    <form action="/respostaExer10" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="valorLargura">
        <input type="text" name="valorAltura">
        <button type="submit">Calcular o perímetro do retângulo</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer10.blade.php ENDPATH**/ ?>