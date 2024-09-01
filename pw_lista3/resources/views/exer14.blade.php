<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão Km para milha</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer14" method="post">
        @CSRF
        <input type="text" name="valorKm" placeholder="Digite a distância em quilômetros">
        <button type="submit">Converter para milha</button>
    </form>
</body>
</html>