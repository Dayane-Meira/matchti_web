<meta charset="UTF-8">
<?php
include "conexao.php";
session_start();
    $id = $_SESSION['idProfissional'];
    $nome = $_POST['NomeProfissional'];
    $cpf = $_POST['Cpf'];
    $data_nascimento = $_POST['DataNascimento'].date($data_nascimento);
    $telefone = $_POST['Telefone'];
    $celular = $_POST['Celular'];
    $habilidades = $_POST['habilidades'];
    $email = $_POST['Email'];


    $sql = "UPDATE tblprofissional SET NomeProfissional='$nome', Cpf='$Cpf', DataNascimento='$DataNascimento', Telefone='$Telefone', Celular='$Celular', DescricaoHabilidades='$habilidades', Email='$Email'  WHERE IdProfissional=$id";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
?>
<script>
    alert ("Cadastro autualizado com sucesso!");
    window.location.href="src/views/usuario.php";
</script>