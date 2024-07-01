<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<body>
    <h1>Calculadora de Desconto</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="valor">Valor do Produto:</label>
        <input type="text" id="valor" name="valor">
        <input type="submit" value="Calcular Desconto">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o valor do produto do formulário
        $valor = $_POST['valor'];

        // Verifica se o valor do produto foi informado e se é numérico
        if (isset($valor) && is_numeric($valor)) {
            // Calcula o valor do desconto (7%)
            $desconto = $valor * 0.07;
            // Calcula o valor com o desconto aplicado
            $valorComDesconto = $valor - $desconto;

            // Exibe os resultados
            echo '<h2>Resultados:</h2>';
            echo '<p>Valor original do produto: R$ ' . $valor . '</p>';
            echo '<p>Valor do desconto (7%): R$ ' . $desconto . '</p>';
            echo '<p>Valor com desconto: R$ ' . $valorComDesconto . '</p>';
        } else {
            // Exibe uma mensagem de erro se o valor do produto não foi informado corretamente
            echo '<p>Por favor, informe um valor válido para o produto.</p>';
        }
    }
    ?>
</body>
</html>