<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    require 'conexao.php';
    require 'Usuario.class.php';

    $u = new Usuario();

    $login = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);

    if($u->login($login, $password) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: index.php");

        }else{
            header("Location: login.php");
            }

    }else{
    header("Location: login.php");
        }

}else{
    header("Location: login.php");
}




?>