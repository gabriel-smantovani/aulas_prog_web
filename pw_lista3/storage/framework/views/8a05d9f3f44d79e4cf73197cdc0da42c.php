<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtração</title>
</head>
<body>
    <form action="respostaExer2" method="POST">
        <?php echo csrf_field(); ?>
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <button type="submit">Subtrair</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\lista3\resources\views/exer2.blade.php ENDPATH**/ ?>