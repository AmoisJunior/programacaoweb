<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <script src="scripts.js"></script>
</head>
<body>
    <div id="maincontainer">
            <h1>Bem vindo ao sistema vamos cadastrar os alunos?</h1>
            <form id="register-form">
                <div class="full-box"></div>

                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" placeholder="Digite sua Matrícula"><br>

                <label for="nome">Nome:</label>
                <input type="text" id="nome" placeholder="Digite o seu nome"><br>

                <label for="nota1">Primeira nota:</label>
                <input type="number" id="nota1" placeholder="Qual foi sua primeira nota?"><br>

                <label for="nota2">Segunda Nota:</label>
                <input type="number" id="nota2" placeholder="Qual foi sua segunda nota?"><br>
                <input type="button" value="Calcular Média" onclick="calcularMedia()">
            </form>
    </div>
    
    <table id="tabela">
    <tr>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Primeira Nota</th>  
        <th>Segunda Nota</th>
        <th>Média</th>
    </tr>
</table>
</body>
</html>