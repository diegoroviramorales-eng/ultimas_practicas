<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>areglo multidimencional</title>
</head>
<body>
<?php
/* CBTIS 89
   Programa que 
   rovira morales diego
   3°A programacion matutino
*/
   echo"Matriz A ";
   echo "<br>"; 
$numero= array();
$valor= 100;
for ($f = 0; $f<3;$f++){
   for ($c= 0;$c<3;$c++)
{$numeros[$c][$f]=$valor;
$valor+=10;
  }
}
for ($f =0; $f<3;$f++){
   for ($c=0;$c<3;$c++)
{
 echo $numeros[$c][$f]." ";}
  echo "<br>"; 
}
echo "<br>"; 
echo"Mantriz B ";
////////////////////////////////////////////////////
echo "<br>"; 
echo "<br>"; 
$h= array();
$t= 500;
for ($f = 0; $f<3;$f++){
   for ($c= 0;$c<3;$c++)
{$hs[$c][$f]=$t;
$t+=20;
  }
}
for ($f =0; $f<3;$f++){
   for ($c=0;$c<3;$c++)
{
 echo $hs[$c][$f]." ";}
  echo "<br>"; 
}
echo "<br>"; 
echo"Matriz C ";
echo "<br>"; 
echo "<br>"; 
//////////////////////////////////////////////////////
for ($f =0; $f<3;$f++){
   for ($c=0;$c<3;$c++)
{$cp[$c][$f]=$hs[$c][$f]+ $numeros[$c][$f];
 echo $cp[$c][$f]." ";}
 echo "<br>";} 
 echo "<br>";