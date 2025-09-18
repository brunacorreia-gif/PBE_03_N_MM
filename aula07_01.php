<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07_01</title>
</head>
<body>
    <h1>Aula07_01 - 18/09/25</h1>
    <h2>Aritméticos</h2>
    <?php
$a=10;
$b=2;
echo "Adição:".($a + $b);
echo "<br>Subtração:".($a - $b);
echo "<br>Multiplicação:".($a * $b);
echo "<br>Divisão:".($a / $b);
echo "<br>Módulo:".($a % $b);
echo "<br>Exponenciação:".($a ** $b);
?>
<h2><?php
$a=10;
$b=2;
$a+=$b;
$b-=5;
echo "a = ".$a; // 12
echo "<br>b = ".$b; // -3
$c=11;
$d=6;
$c%=$d; 
$d+=$a; 
echo "<br>c = ".$c; // 5
echo "<br>d = ".$d; // 18
?></h2>
<h2>String</h2>
<?php
$a = "Maria ";
echo "$a <br>";// Maria
$b = "Leopoldina "; 
echo "$b <br>"; // Leopoldina
echo $a . $b; // Maria Leopoldina
$b .= $a;
$b.= "Pedro";
echo "<br>$b";  
?>
<h2>Incremento/Decremento</h2>
<?php
$x = 100;
echo "x = ".$x++;
echo "<br>x final = ".$x;
echo "<hr>";
$i=10;
echo "<br> i = $i"; // 10
$i++;
$i++;
++$i;
++$i;
echo "<br> i = $i"; // 14
$i--;
$i--;
--$i;
echo "<br> i = $i"; // 11

?>
</body>
</html>