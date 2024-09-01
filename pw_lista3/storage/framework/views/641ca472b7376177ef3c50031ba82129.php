<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter dias em horas, minutos e segundos</title>
    <link rel="stylesheet" href=<?php echo e(asset('css/exer.css')); ?>>
</head>
<body>
    <header>
        <nav>
            <a href="navegacao">voltar</a>
        </nav>
    </header>
    <form action="/respostaExer19" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="dias">
        <button type="submit">Converter</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer19.blade.php ENDPATH**/ ?>