<?php
    #Definimos una lista de variables.
    $nombre = "Juan";
    $nota = 7
    $edad = 25;
    $es_repetidor = false;

    echo $nombre;
    echo "br";
    echo $nota;
    echo "br";
    echo $edad;
    echo "br";
    echo "$es_repetidor";
print_r($nombre);

# Ejemplo de una constante numérica de tipo real
define("PI", 3.141592);

# Ejemplo de una constante de tipo string
define("CONSTANTE", "Hola mundo");



$nombre = "Juan";
$edad = 25;
$nota = 7;

var_dump($nombre);
# string(4) "Juan"

var_dump($edad);
# int(30)

var_dump($nota);
# float(7.5)


$lista = array("Juan", "Alex", "Marta");

print_r($lista);

?>