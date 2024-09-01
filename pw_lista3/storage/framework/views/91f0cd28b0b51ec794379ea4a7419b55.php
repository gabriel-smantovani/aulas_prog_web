<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <form action="/respostaExer5" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="valor1">
        <input type="text" name="valor2">
        <input type="text" name="valor3">
        <button type="submit">Calcular média</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\lista3\resources\views/exer5.blade.php ENDPATH**/ ?>