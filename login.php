<?php session_start();
require 'config.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if($usuario == CREDENTIALS['username'] && $password == CREDENTIALS['password']){
        if($_POST['remember_me']){
            setcookie('password', $password, time() + (60*60*24*365));
            setcookie('usuario', $usuario, time() + (60*60*24*365));
        }
        else{
            setcookie('password', $password, time() - 1000);
            setcookie('usuario', $usuario, time() - 1000);
        }

        $_SESSION['usuario'] = $usuario;
        header('Location: pagina1.php');

    }else{
        header('Location: index.php');
    }
}else{
    header('Location: index.php');
}

?>