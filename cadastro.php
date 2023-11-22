<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Cadastrar</h1>
    <form action="cadastrar.php" method="post">

        <label for="email">Email:</label> <br>
        <input type="text" name="email" id="email"> <br>

        <label for="senha">Senha:</label> <br>
        <input type="text" name="senha" id="senha">

        <button id="botao" disabled>cadastrar</button>

    </form>
    <a href="index.php">login</a>
    <div style="color: red;">

        <?php
            if($_GET && $_GET['cadastro'] == 'erro'){
                echo 'ERRO';
            }
        ?>

    </div>


</body>

<script>

    setInterval(() => {
        let email = document.getElementById('email').value;
        let senha = document.getElementById('senha').value;
        let botao = document.getElementById('botao');
        
        if(email.length > 5 && senha.length > 5){
            
            botao.disabled = false;

        } else {

            botao.disabled = true;

        }

    }, 20);

    

</script>

</html>