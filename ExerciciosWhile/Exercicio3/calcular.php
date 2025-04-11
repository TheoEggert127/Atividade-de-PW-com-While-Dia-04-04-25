<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$base = rand(0, 100);
$tentativas = 0;
$numerosGerados = [];

do {
    $n = rand(0, 100);
    $tentativas++;
    $numerosGerados[] = $n;
} while ($n !== $base);

echo "<h3>Adivinhação Automática</h3>";
echo "<p>Número base: $base</p>";
echo "<p>Total de tentativas: $tentativas</p>";
echo "<p>Números gerados: " . implode(', ', $numerosGerados) . "</p>";
?>
    
</body>
</html>