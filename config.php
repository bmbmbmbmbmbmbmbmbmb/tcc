<?php

session_start();
include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);

//filtrar dados e garantir que o campo seja limpo apos a submissão//

$result = "insert into usuarios (nome, email, data) values('$nome', 'email', NOW()";
$resultado = mysqli_query($conn, $result);

if(mysqli_insert_id($conn)){

    $_SESSION ['msg'] = "<p>usuario cadastrado com sucesso</p>";
    header("location:index.php");

}else{

    header("location:index.php");
    
}

echo "nome: $nome <br>";
echo "email: $email <br>";

 ?>
