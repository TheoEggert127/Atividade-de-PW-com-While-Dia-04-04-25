<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    $tentativas = 0;

    echo "<h3>Subtrações:</h3>";

    do {
        $aleatorio = rand(1, 10);
        $numero -= $aleatorio;
        $tentativas++;
        echo "Subtraiu $aleatorio → Valor atual: $numero<br>";
    } while ($numero > 0);

    echo "<p>Total de subtrações: $tentativas</p>";
}
?>
    
</body>
</html>