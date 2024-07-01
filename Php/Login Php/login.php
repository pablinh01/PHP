<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logincss.css">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Login: <input type="text" name="login" value="">
        Senha: <input type="password" name="senha" value="">
        <input type="submit" name="cadastra" id="bntentrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if ($login == "admin" && $senha == "123456") {
            echo "Login efetuado com sucesso!";
        } else {
            echo "Login ou senha inválidos!";
        }
    }
    ?>
</body>

</html>
