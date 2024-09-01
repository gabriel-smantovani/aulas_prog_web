<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter dias em horas, minutos e segundos</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer19" method="post">
        @CSRF
        <input type="text" name="dias" placeholder="Digite o número de dias">
        <button type="submit">Converter</button>
    </form>
</body>
</html>