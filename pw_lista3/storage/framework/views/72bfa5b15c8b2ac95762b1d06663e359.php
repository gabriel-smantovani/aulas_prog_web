<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular preço com desconto</title>
</head>
<body>
    <form action="/respostaExer16" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="valorPreco">
        <input type="text" name="percentualDesconto">
        <button type="submit">Calcular o preço com desconto</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gabriel\Documents\ADS\PW\lista3\resources\views/exer16.blade.php ENDPATH**/ ?>