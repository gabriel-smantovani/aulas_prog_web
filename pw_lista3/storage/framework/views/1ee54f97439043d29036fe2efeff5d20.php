<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar</title>
</head>
<body>
    <form action="/respostaExer3" method="POST">
        <?php echo csrf_field(); ?>
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <button type="submit">Multiplicar</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\lista3\resources\views/exer3.blade.php ENDPATH**/ ?>