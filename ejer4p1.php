<?php

echo "Ejercicio 4, parte 1";

/*Aplicación Nº 4 (Calculadora)
Escribir un programa que use la variable $operador 
que pueda almacenar los símbolos matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; 
y definir dos variables enteras $op1 y $op2. 
De acuerdo al símbolo que tenga la variable $operador, 
deberá realizarse la operación indicada y mostrarse el resultado por pantalla.

*/

$operador=2;
$op1 = rand(0,10);
$op2 = rand(0,10);
echo "Suma"."<br>";
$operador = "+";

echo "El resultado es =".$op1.$operador.$op2."<br>";
$resul= $op1+$op2;

echo $resul;

?>