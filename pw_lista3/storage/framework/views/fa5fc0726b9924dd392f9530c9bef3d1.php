<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
    <link rel="stylesheet" href=<?php echo e(asset('css/exer.css')); ?>>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer15" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="valorPeso" placeholder="Digite o peso em quilos">
        <input type="text" name="valorAltura" placeholder="Digite a altura em metros">
        <button type="submit">Calcular o IMC</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer15.blade.php ENDPATH**/ ?>