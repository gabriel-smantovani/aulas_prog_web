<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular juros composto</title>
</head>
<body>
    <form action="/respostaExer18" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="valorCapital">
        <input type="text" name="percentualTaxa">
        <input type="text" name="periodo">
        <button type="submit">Calcular juros composto</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer18.blade.php ENDPATH**/ ?>