<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dividir</title>
</head>
<body>
    <form action="/respostaExer4" method="POST">
        <?php echo csrf_field(); ?>
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <button type="submit">Dividir</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer4.blade.php ENDPATH**/ ?>