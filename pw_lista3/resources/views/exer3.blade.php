<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer3" method="POST">
        @CSRF
        <input type="number" name="valor1" placeholder="Digite o primeiro fator">
        <input type="number" name="valor2" placeholder="Digite o segundo fator">
        <button type="submit">Multiplicar</button>
    </form>
</body>
</html>