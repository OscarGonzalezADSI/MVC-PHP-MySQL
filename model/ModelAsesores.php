<?php

class ModelAsesores{

    function __construct() {
        $this->data = array();
    }

    function setAsesor($data){
        $nombres = $data['nombres'];
        $apellidos = $data['apellidos'];
        $correo = $data['correo'];
        $row = [$nombres, $apellidos, $correo];
        array_push($this->data, $row);
    }

    function getAsesores(){
        return $this->data;
    }

}
