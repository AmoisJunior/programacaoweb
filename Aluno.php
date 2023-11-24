<?php

class Aluno{

    public function registrar(){
        try{
            $pdo;
            $pdo = new PDO('mysql:host=localhost;dbname=cad_alunos','root', '')
        } catch (PDOException $e){
            echo $e
        }
    }

}

?>