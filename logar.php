<?php

    if($_POST && strlen($_POST['email']) > 5 && strlen($_POST['senha']) > 5){
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //parte do login

    } else {

        header('location:index.php?login=erro');

    }


    //
    //CREATE TABLE tb_usuarios(
    //     id int not null PRIMARY KEY AUTO_INCREMENT,
    //     email varchar(50) not null,
    //     senha varchar(50) not null
    // );
?>