<?php
//array asociativo key->lcg_value
$personas = array(
    "nombre" => "Tony",
    "apellido" => "Stark",
    "heroe" => "Iron Man"
);
echo $personas["nombre"]; 
echo "<br />";
var_dump ($personas);
echo "<br /><br />";
//array asociativo multidimensional
$avengers = array(
    array (
        "nombre" => "Tony",
        "apellido" => "Stark",
        "heroe" => "Iron Man"
    ),
    array (
        "nombre" => "Bruce ",
        "apellido" => "Banner",
        "heroe" => "Hulk"
    ),
    array (
        "nombre" => "Natasha",
        "apellido" => "Romanoff",
        "heroe" => "Black Widow"
    ),
    array (
        "nombre" => "Steve",
        "apellido" => "Rogers",
        "heroe" => "Capitan America"
    ),
);
var_dump($avengers);
echo "<br /><br />";

foreach ($avengers as $key => $value){
    var_dump($value);
}