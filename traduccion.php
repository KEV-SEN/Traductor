<?php
$palabra_ingles = $_POST['palabra_php'];

if ($palabra_ingles == "help") {
    $traduccion = "ayuda";
} else if ($palabra_ingles == "cat") {
    $traduccion = "gato";
} else if ($palabra_ingles == "dog") {
    $traduccion = "perro";
} else if ($palabra_ingles == "cooffe") {
    $traduccion = "cafe";
} else if ($palabra_ingles == "tea") {
    $traduccion = "te";
} else if ($palabra_ingles == "book") {
    $traduccion = "libro";
} else if ($palabra_ingles == "library") {
    $traduccion = "biblioteca";
} else if ($palabra_ingles == "database") {
    $traduccion = "base de datos";
} else if ($palabra_ingles == "server") {
    $traduccion = "servidor";
} else if ($palabra_ingles == "bug") {
    $traduccion = "error";
} else {
    $traduccion = "No hay traduccion";
}

echo $traduccion;
?>