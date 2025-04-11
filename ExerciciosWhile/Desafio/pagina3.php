<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$sorte = $_GET['sorte'];
$tentativas = $_GET['tentativas'];
echo "<h3>🎉 Parabéns! Você acertou!</h3>";
echo "<p>Número sorteado: $sorte</p>";
echo "<p>Total de tentativas: $tentativas</p>";
?>
    
</body>
</html>

