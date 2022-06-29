<?php
//isset
//es un metodo de php
//que comprueba la existencia de un dato
//devuelve true o false
if(isset($_GET['numero'])){

    $numero = (int) $_GET['numero'];

}else{
    $numero = 1;
}

echo "<h1> Tabla de multiplicar del: $numero</h1>";

$contador = 0;
while($contador <= 12){
    echo "$numero x $contador = ".($numero*$contador)."<br />";
    $contador++;
}