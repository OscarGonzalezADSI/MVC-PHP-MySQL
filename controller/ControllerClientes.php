<?php
include "model/ModelClientes.php";

class ControllerClientes{

    function __construct() {
        $this->clientes = new ModelClientes();
    }

    function setCliente($data){
        $this->clientes->setCliente($data);
    }

    function getClientes(){
        return $this->clientes->getClientes();
    }

}
