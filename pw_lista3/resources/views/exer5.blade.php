<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href={{ asset('css/exer.css')}}>
</head>
<body>
    <header>
        <nav class="navExer">
            <a href="navegacao">&#8592 voltar</a>
        </nav>
    </header>
    <form action="/respostaExer5" method="POST">
        @CSRF
        <input type="text" name="valor1" placeholder="Digite a primeira nota">
        <input type="text" name="valor2" placeholder="Digite a segunda nota">
        <input type="text" name="valor3" placeholder="Digite a terceira nota">
        <button type="submit">Calcular média</button>
    </form>
</body>
</html>