<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if (isset($_POST['valor'])) {
    $valor = intval($_POST['valor']);
    $notas = [100, 50, 20, 10, 5, 2, 1];

    echo "<h3>Notas necessárias para R$$valor,00:</h3>";

    $i = 0;
    do {
        $nota = $notas[$i];
        $qtd = intdiv($valor, $nota);
        $valor %= $nota;
        echo "R$$nota,00 = $qtd<br>";
        $i++;
    } while ($i < count($notas));
}
?>
    
</body>
</html>
