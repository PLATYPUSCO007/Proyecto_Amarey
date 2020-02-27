<?php

function get_registry() {
    return 'http://localhost/Proyecto_Amarey/registry';
}

//Obtener la posicion del ultmo slash de la url
function get_posicion_ch($name) {
    return strrpos($name, "/", -1);
}

//obtener el nombre del video
function get_frag_title($name) {
    //Obtenemos la posicion del ultimo slash de la url
    $position = get_posicion_ch($name);
    //Restamos la posicion del ultimo slash con el largo del nombre, 
    //para obtener el largo del nombre del video
    $length = strlen($name) - $position;
    //Guardamos el substring de la url completa,
    //*el substring es el nombre del video*
    $result = substr($name, $position + 1, $length);
    //retornamos el resultado
    return $result;
}


