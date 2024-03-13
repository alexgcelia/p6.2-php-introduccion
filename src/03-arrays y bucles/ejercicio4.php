<?php
echo "<h1>Escribe un script PHP que realice las siguientes acciones:</h1>";

# Inicia el array
$numerosRango = array();

# Bucle para recorrer el array.
for ($i=1;$i<=10;$i++)
{
#   Añadimos los numeros aleatorios del 1 al 30
    echo $numerosRango[$i] = rand(1,30);  
    echo "<br>";
}  
echo "<br>";
echo "#-----------------------------#" . "\n" . "<br>";
# Sacamos el valor mínimo del array
$minimo = min($numerosRango);
echo "El valor mínimo del array es: " . $minimo;
?>