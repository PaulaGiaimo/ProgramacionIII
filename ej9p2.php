<?php
/*Aplicación Nº 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.
*/
echo "Ejercicio Nº 9";
echo "<br>";
$lapicera=Array("color"=>$color,"marca"=>$marca, "trazo"=> $trazo, "precio"=>$precio);
echo "creando lapicera 1";
$color="azul";
$marca= "bic";
$trazo= "grueso";
$precio= 10;
echo "<br>";
$lapicera=Array("color"=>$color,"marca"=>$marca, "trazo"=> $trazo, "precio"=>$precio);
foreach ($lapicera as $valor1 => $valor2) {
	# code...
	echo $valor1;
	echo " es ";
	echo $valor2;
	echo "<br>";
}
echo "creando lapicera 2";
$color="roja";
$marca= "bic";
$trazo= "fino";
$precio= 8;
echo "<br>";
$lapicera=Array("color"=>$color,"marca"=>$marca, "trazo"=> $trazo, "precio"=>$precio);
foreach ($lapicera as $valor1 => $valor2) {
	# code...
	echo $valor1;
	echo " es ";
	echo $valor2;
	echo "<br>";
}
?>