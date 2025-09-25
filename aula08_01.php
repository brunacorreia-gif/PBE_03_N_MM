<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_01</title>
</head>
<body>
    <h1>Aula08_01 - 25/09/25</h1>
    <h2>Relacionais</h2>
    <?php
    $a=10; 
    $b="10"; 
    
    echo "Igualdade = ". ($a==$b). "<br>";
    echo "Idêntico = ". ($a===$b). "<br>";
    echo "Não igual = ". ($a!=$b). "<br>";
    echo "Não idêntico = ". ($a!==$b). "<br>";
    
    $a=10;
    $b=10;
    $c=11;
    echo "Menor: ".($a<$b)."<br>";
    echo "Menor ou igual: ".($a<=$b)."<br>";
    echo "Maior: ".($c>$b)."<br>";
    echo "Maior ou igual: ".($c>=$b)."<br>";
    ?>
    <h2>Lógicos</h2>
    <?php
    
    $a=50;
    $b=120;
    $c= ($a<=$b); //true
    $d= !($a<=$b); //false
    var_dump($c);
    echo "<br>";
    var_dump($d);
    $e=(($a<=$b) && ($a>=200)); //false
    echo "<br>";
    var_dump($e);
    $f=(($a<=$b) || ($a>=200)); //
    echo "<br>";
    var_dump($f);
    $g=(($a<=$b) xor ($a>=200)); //
    echo "<br>";
    var_dump($g);
    ?>
    <h2>Ternário</h2>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=($a<=$b) ? "Verdadeiro" : "Falso";
    $e=($a>=$c) ? "Verdadeiro" : "Falso";
    echo "d = $d<br>e = $e";
    ?>

    
    
</body>
</html>