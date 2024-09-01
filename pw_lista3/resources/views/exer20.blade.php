<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distância/tempo</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer20" method="post">
        @CSRF
        <input type="text" name="valorDistancia" placeholder="Digite a distância">
        <input type="text" name="tempo" placeholder="Digite o tempo">
        <button type="submit">Calcular distância pelo tempo</button>
    </form>
</body>
</html>