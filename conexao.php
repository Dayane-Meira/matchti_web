<?php
$localhost="localhost";
$usuario="root";
$senha="usbw";
$banco="matchti";

$connect=mysqli_connect($localhost, $usuario, $senha, $banco);

if (mysqli_connect_errno()) { //Número do erro
    echo "Connection fail MySQL: " . mysqli_connect_error(); //Retorna o código do erro, descrição
}
$connect->set_charset("utf8");
?>