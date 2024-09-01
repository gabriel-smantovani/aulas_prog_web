<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura</title>
    <link rel="stylesheet" href=<?php echo e(asset('css/exer.css')); ?>>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer6" method="POST">
        <?php echo csrf_field(); ?>
        <input type="number" name="valorCelsius">
        <button type="submit">Converter em Fahrenheit</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer6.blade.php ENDPATH**/ ?>