<meta charset="UTF-8">
<?php
include "conexao.php";
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'].date($data_nascimento);
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $habilidades = $_POST['habilidades'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO tblprofissional (NomeProfissional, Cpf, DataNascimento, Telefone, Celular, DescricaoHabilidades, Email, Senha) VALUES('$nome', '$cpf', '$data_nascimento', '$telefone', '$celular', '$habilidades', '$email', '$senha')";

    mysqli_query($connect, $sql);
    mysqli_close($connect);
?>
<script>
    window.location.href="src/views/login.html";
</script>