<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão para centímetros</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer13" method="post">
        @CSRF
        <input type="text" name="valorMetros" placeholder="Digite a distância em metros">
        <button type="submit">Converter para centímetros</button>
    </form>
</body>
</html>