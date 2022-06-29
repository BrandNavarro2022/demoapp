<?php
$autos = array("Toyota", "Ford", "Kia");
$motos = ["Honda", "Yamaha", "Lifan", "Suzuki", "Zongshen"];
$numeros = [23,5,490,65,29,109,8,0,35];
$varios = [255, "Palabra", false, 34.66, 'c'];

var_dump($autos);
echo "<br />";
var_dump($motos);
echo "<br />";
var_dump($numeros);
echo "<br />";
var_dump($varios);
echo "<br />";
echo "<br />";

for($i = 0; $i < count($motos); $i++){
    echo $motos[$i] . "<br />";
}
echo "<br />";

foreach($autos as $auto){
    echo $auto . "<br />";
}

echo "<br />";

function mostrarNumeros($numeros){
    foreach($numeros as $numero){
        echo $numero . "<br />";
    }
}
sort($numeros);

mostrarNumeros($numeros);
echo "<br />";
echo "<br /> Nro. de Elementos del array: " . count($numeros) . "<br />";

//buscar un elemento dentro del array
$elemento = 8;
if(array_search($elemento, $numeros)){
    echo "El numero $elemento se encuentra en el array";
}else{
    echo "El numero $elemento no se encontró";
}