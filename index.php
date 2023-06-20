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

    <?php

    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>

    <h1>cadastro</h1>

    <form action="config.php" method="post">

        <label for="author">nome:</label>
        <input type="text" name="author" id="author" placeholder="Digite o nome" required>;

        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" placeholder="Digite o e-mail" required>

        <input type="submit" value="enviar">
      
    </form>

</body>

</html>