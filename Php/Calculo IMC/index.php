<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Altura (m): <input type="text" name="altura">
        Peso (kg): <input type="text" name="peso">
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores do formulário
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];

        // Verifica se os campos foram preenchidos
        if (!empty($altura) && !empty($peso)) {
            // Calcula o IMC
            $imc = $peso / ($altura * $altura);

            // Exibe o resultado
            echo '<div>O seu IMC é: ' . number_format($imc, 2) . '</div>';
        } else {
            // Exibe uma mensagem se algum campo estiver vazio
            echo '<div>Preencha todos os campos.</div>';
        }
    }
    ?>
</body>
</html>
