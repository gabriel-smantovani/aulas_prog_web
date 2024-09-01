<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <form action="/respostaExer1" method="POST">
        <?php echo csrf_field(); ?>
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <button type="submit">Somar</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\lista3\resources\views/exer1.blade.php ENDPATH**/ ?>