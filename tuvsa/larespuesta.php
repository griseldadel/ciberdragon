<?php
error_reporting (E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$usuariotabla = '';
$passwordtabla = '';

$con = new SQLite3("data.db");

$cs = $con -> query("SELECT * FROM login where usuario = '$usuario' AND password = '$password'");


while ($resul = $cs -> fetchArray())

{
    $usuariotabla = $result['usuario'];
    $passwordtabla = $resul['password'];
}
if($usuario == $usuariotabla){
    if($password == $passwordtabla){
        echo 'usuario y contraseña correcta';

    }
} else {
    echo'usuario y contraseña incorrecta';
}


// $ = isset($_POST['']) ? $_POST[''] : '':


?>