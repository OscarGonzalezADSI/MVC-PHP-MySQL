<?php

class ModelAgendamientos{

    function __construct() {
        $this->data = array();
    }

    function setAgendamiento($data){
        $nombres = $data['nombres'];
        $apellidos = $data['apellidos'];
        $correo = $data['correo'];
        $row = [$nombres, $apellidos, $correo];
        array_push($this->data, $row);
    }

    function getAgendamientos(){
        return $this->data;
    }

}
