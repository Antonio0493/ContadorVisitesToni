<?php
date_default_timezone_set('Europe/Madrid');

$fecha=date("d/m/Y H:i:s");

//funcion isset se usa para verificar si una variable esta definida y su
//valor no es NULL. La funcion isset devuelve true si la variable esta
//definida y no es nula
if(isset($_COOKIE["visita"])){
    //aqui va el codigo se debeis de programar
    // aqui separamos contador de la ultima fecha en cookie
    list($contador, $ultimaVisita) = explode('|', $_COOKIE["visita"]);
    $contador++; // Incrementar el contador de visitas

    // Actualizamos cookie con el nuevo contador y la fecha actualizada
    setcookie("visita", $contador . "|" . $fecha, time() + (60 * 60 * 24 * 30));

    // mensajes mostrados
    print "<h2> Hola de nou, esta es la visita numero: <strong>$contador</strong>. </h2>";
    print "<h3> La data actual de la ultima visita es: <strong>$ultimaVisita</strong>. </h3>";

}else{
    // Primera visita: iniciamos cookie
    setcookie("visita", "1|" . $fecha, time() + (60 * 60 * 24 * 30));

    // mensaje primera visita
    print "<h2> Hola, aquesta es la primera vegada que entres en aquesta pagina. </h2>";
}

?>