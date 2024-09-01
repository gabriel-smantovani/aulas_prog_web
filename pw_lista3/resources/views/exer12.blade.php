<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular potência</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer12" method="post">
        @CSRF
        <input type="text" name="valorBase" placeholder="Digite o valor da base">
        <input type="text" name="valorExpoente" placeholder="Digite o valor do expoente">
        <button type="submit">Calcular a potenciação</button>
    </form>
</body>
</html>