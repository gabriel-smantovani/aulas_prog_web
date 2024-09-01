<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do círculo</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer9" method="post">
        @CSRF
        <input type="text" name="valorRaio" placeholder="Digite o valor do raio do círculo">
        <button type="submit">Calcular área do círculo</button>
    </form>
</body>
</html>