<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distância/tempo</title>
</head>
<body>
    <form action="/respostaExer20" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="valorDistancia">
        <input type="text" name="tempo">
        <button type="submit">Calcular distância pelo tempo</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer20.blade.php ENDPATH**/ ?>