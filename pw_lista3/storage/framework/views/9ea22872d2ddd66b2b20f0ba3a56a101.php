<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar</title>
    <link rel="stylesheet" href="exer.css">
</head>
<body>
    <header>
        <nav>
            <a href="navegacao">voltar</a>
        </nav>
    </header>
    <form action="/respostaExer3" method="POST">
        <?php echo csrf_field(); ?>
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <button type="submit">Multiplicar</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer3.blade.php ENDPATH**/ ?>