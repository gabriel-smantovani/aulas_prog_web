<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura</title>
</head>
<body>
    <form action="/respostaExer6" method="POST">
        <?php echo csrf_field(); ?>
        <input type="number" name="valorCelsius">
        <button type="submit">Converter em Fahrenheit</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\lista3\resources\views/exer6.blade.php ENDPATH**/ ?>