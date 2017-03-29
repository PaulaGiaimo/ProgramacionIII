<?PHP

$var1=rand(0,10);
$var2=rand(0,10);
$var3=rand(0,10);


echo "Variable 1: ".$var1."<br>";
echo "Variable 2: ".$var2."<br>";
echo "Variable 3: ".$var3."<br>";

if ($var1 >$var2 && $var1<$var3 || $var1 >$var3 && $var1<$var2)
echo "La variable uno esta en el medio";

elseif ($var2 >$var1 && $var2<$var3 || $var2 >$var3 && $var2<$var1)
echo "La variable dos esta en el medio";

elseif ($var3 >$var2 && $var3<$var1 || $var3 >$var1 && $var3<$var2)
echo "La variable tres esta en el medio";

else 

echo "no hay variable en el medio";
?>