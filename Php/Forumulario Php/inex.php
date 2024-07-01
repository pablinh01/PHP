<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>

<body>
    <form action="foo.php" method="post">   
            Nome: <input name="username" type="text" ><br>
            Email: <input type="email" name="email" ><br>
            Senha: <input name="password" type="password"><br>
            Cpf: <input name="cpf" type="number"><br>
            Data de nascimento: <input name="data" type="date"><br>
            Sexo: <select name="sexo">
                <option>Selecione um sexo</option>
                <option>Masculino</option>
                <option>Feminino</option>
            </select><br>
            Endereço: <input type="number" name="endereco" ><br>
            <input type="submit" value="Me aperte!">
    </form>


</html>