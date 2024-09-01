<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do retângulo</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer8" method="post">
        @CSRF
        <input type="text" name="valorLargura" placeholder="Digite o valor da largura">
        <input type="text" name="valorAltura" placeholder="Digite o valor da altura">
        <button type="submit">Calcular área</button>
    </form>
</body>
</html>