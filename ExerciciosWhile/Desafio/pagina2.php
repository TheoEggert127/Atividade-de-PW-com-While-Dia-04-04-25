<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$sorte = $_POST['sorte'];
$palpite = $_POST['palpite'];
$tentativas = $_POST['tentativas'] + 1;

if ($palpite == $sorte) {
    header("Location: pagina3.php?sorte=$sorte&tentativas=$tentativas");
    exit;
} else {
    $mensagem = $palpite > $sorte ? "Tente um número menor." : "Tente um número maior.";
}
?>
<form method="post" action="pagina2.php">
    <p><?= $mensagem ?></p>
    <input type="hidden" name="sorte" value="<?= $sorte ?>">
    <input type="hidden" name="tentativas" value="<?= $tentativas ?>">
    <p>Digite novamente:</p>
    <input type="number" name="palpite" required>
    <input type="submit" value="Tentar">
</form>
    
</body>
</html>
