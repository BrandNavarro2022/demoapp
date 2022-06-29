<?php

$deportes = array (
    "Futbol" => array ("Liverpool", "Real Madrid", "Alianza Lima"),
    "Formula 1" => array ("Ferrari", "McLaren", "Honda"),
    "NBA" => array ("LA Lakers","Chicago Bulls","Miami Heat")
);

echo $deportes ["Futbol"][2]."<br />";
echo $deportes ["Formula 1"][0]."<br />";
echo $deportes ["NBA"][1]."<br /><br />";

function saludo($nombre){
    return "HOLA, $nombre";
}
echo saludo("Brandcito");