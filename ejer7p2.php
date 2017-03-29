
<?PHP
/*
Aplicación Nº 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el 
Neiner, Maximiliano – Villegas, Octavio PHP- 2017 Página 2
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.
*/

$miArray=array();

for ($i=0; $i<10; $i++)
{
$miArray[$i]=$i+1;
if($miArray[$i]%2==0)
{
	
echo "el numero".$miArray[$i]."es par";
echo "<br>";
}
else{
	echo "el numero".$miArray[$i]."es impar";

echo "<br>";
}
}
echo "<br>";
echo "con while";
echo "<br>";
$i=0;
while($miArray[$i]<10)
{
if($miArray[$i]%2==0)
{
	
echo "el numero".$miArray[$i]."es par";
echo "<br>";
}
else{
	echo "el numero".$miArray[$i]."es impar";

echo "<br>";
}
$i++;

}
echo "<br>";
echo "con foreach";
echo "<br>";
$nuevoArray=array(0,1,2,3,4,5,6,7,8,9);
foreach ($nuevoArray as $value) {
if($value%2==0){
echo $value."es par";	# code...

}
else
	echo $value."es impar";
echo "<br>";
}




?>
