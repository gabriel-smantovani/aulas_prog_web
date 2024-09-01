<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer1" method="POST">
        @CSRF
        <input type="number" name="valor1" placeholder="Digite o primeiro valor">
        <input type="number" name="valor2" placeholder="Digite o segundo valor">
        <button type="submit">Somar</button>
    </form>
</body>
</html>