<meta charset="UTF-8">
<?php
include "conexao.php";

$email = $_POST['email'];
$_SESSION['email'] = $email;
$senha = $_POST['senha'];

$sql = "SELECT * FROM  tblprofissional WHERE Email = '$email' AND Senha = '$senha'";


$carregador=mysqli_query($connect, $sql);

if ($linha=mysqli_fetch_array($carregador)) {
    session_start();
    $_SESSION['email']=$linha['email'];
    // $_SESSION['senha']=$linha['senha'];
    echo "<script> window.location.href='src/views/usuario.php';</script>";
}
else {
    echo "<script> alert ('Usuário não encontrado. Tente novamente, ou cadastre-se.'); window.location.href='src/views/login.html';</script>";
}
?>