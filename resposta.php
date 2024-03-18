<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
    <h1>Resultado final</h1>
    <p>
<?php 
$n = $_REQUEST["num"] ?? 0;
$a =  $n-1;
$s= $n+1;
echo "o número escolhido foi $n";
echo "<br>seu sucessor é + $s";
echo "<br>seu antecessor é + $a";

?>

    </p>
    <button onclick="javascript:history.go(-1)">voltar</button>
   </main> 
</body>
</html>