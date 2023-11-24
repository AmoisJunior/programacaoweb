<?php
    require 'Aluno.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Formulário de Cadastro</h1>
    </header>
    <main>
        <div class="block">
            <form id="formulario">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" required><br>

                <label for="numMat">Matrícula:</label>
                <input type="text" id="numMat" required><br>

                <label for="num1">Nota 1:</label>
                <input type="number" id="num1" required><br>

                <label for="num2">Nota 2:</label>
                <input type="number" id="num2" required><br>

                <input type="submit" value="Calcular Média">
                <input type="reset">
            </div>
        </form>
    </main>
    <footer>
        <h1>Cadastrar Aluno</h1>
        <!-- Tabela será adicionada aqui -->
        <table border="solid;">
            <thead>
                <th>Nome</th>
                <th>Cadastro</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Média</th>
            </thead>
            <tbody id="container">

            </tbody>
        </table>
    </footer>
    <script src="main.js">

    </script>
</body>
</html>
