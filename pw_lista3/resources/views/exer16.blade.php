<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular preço com desconto</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer16" method="post">
        @CSRF
        <input type="text" name="valorPreco" placeholder="Digite o valor do item">
        <input type="text" name="percentualDesconto" placeholder="Digite a porcentagem do desconto">
        <button type="submit">Calcular o preço com desconto</button>
    </form>
</body>
</html>