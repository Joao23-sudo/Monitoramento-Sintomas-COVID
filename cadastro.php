<?php
    include_once('conexao2.php');

    $nome_cadastro = $_POST['nome_cadastro'];
    $email_cadastro = $_POST['email_cadastro'];
    $senha_cadastro = $_POST['senha_cadastro'];

    $result = mysqli_query($conexao2, "INSERT INTO usuarios(nome,email,senha) 
    VALUES ('$nome_cadastro','$email_cadastro','$senha_cadastro')");

    header("Location: sucesso.html");
?>