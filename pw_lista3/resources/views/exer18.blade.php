<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular juros composto</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer18" method="post">
        @CSRF
        <input type="text" name="valorCapital" placeholder="Digite o capital">
        <input type="text" name="percentualTaxa" placeholder="Digite a taxa de juros">
        <input type="text" name="periodo" placeholder="Digite o período">
        <button type="submit">Calcular juros composto</button>
    </form>
</body>
</html>