<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$sorte = rand(0, 100);
?>
<form method="post" action="pagina2.php">
    <input type="hidden" name="sorte" value="<?= $sorte ?>">
    <input type="hidden" name="tentativas" value="0">
    <p>Digite seu número da sorte:</p>
    <input type="number" name="palpite" required>
    <input type="submit" value="Tentar">
</form>
    
</body>
</html>

