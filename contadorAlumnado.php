<?php
date_default_timezone_set('Europe/Madrid');

$fecha=date("d/m/Y H:i:s");

//función isset se usa para verificar si una variable está definida y su
//valor no es NULL. La función isset devuelve true si la variable está
//definida y no es nula
if(isset($_COOKIE["visita"])){
    //aquí va el código se debéis de programar

}else{
    print "<h2> Hola, aquesta és la primera vegada que entres en aquesta pàgina. </h2>";
    setcookie("visita","1|" . $fecha);
}

?>