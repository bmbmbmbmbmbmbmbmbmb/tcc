<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    

    <!-- if (isset($_SESSION['form_comments'])) {
        echo $_SESSION['form_comments'];
        unset($_SESSION['form_comments']);
    } -->

   

    <h1>cadastro</h1>

    <form action="https://api.staticforms.xyz/submit" method="post">
        <input type="hidden" name="accessKey" value="855acaa8-377d-43bd-bded-8b8d4d7b298a">
        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome" required>;

        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" placeholder="Digite o e-mail" required>
        <!-- <input type="hidden" name="redirectTo" value="http://localhost/nicoly/aula8/index.html"> -->
        <input type="submit" value="enviar">
      
    </form>

</body>

</html>