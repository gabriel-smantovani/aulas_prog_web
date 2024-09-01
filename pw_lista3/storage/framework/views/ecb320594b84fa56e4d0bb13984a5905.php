<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura</title>
</head>
<body>
    <form action="/respostaExer7" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="valorFahrenheit">
        <button type="submit">Converter em Celsius</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer7.blade.php ENDPATH**/ ?>