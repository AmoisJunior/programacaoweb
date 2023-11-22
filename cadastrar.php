<?php

    if($_POST && strlen($_POST['email']) > 5 && strlen($_POST['senha']) > 5){
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //parte do cadastro


    } else {

        header('location:cadastro.php?cadastro=erro');

    }

?>