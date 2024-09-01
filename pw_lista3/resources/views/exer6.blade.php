<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer6" method="POST">
        @CSRF
        <input type="number" name="valorCelsius" placeholder="Digite a temperatura em celsius">
        <button type="submit">Converter em Fahrenheit</button>
    </form>
</body>
</html>