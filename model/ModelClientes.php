<?php

class ModelClientes{

    function __construct() {
        $this->data = array();
    }

    function setCliente($data){
        $nombres = $data['nombres'];
        $apellidos = $data['apellidos'];
        $correo = $data['correo'];
        $row = [$nombres, $apellidos, $correo];
        array_push($this->data, $row);
    }

    function getClientes(){
        return $this->data;
    }

}
