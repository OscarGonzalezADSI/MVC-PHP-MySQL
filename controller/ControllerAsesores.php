<?php
include "./model/ModelAsesores.php";

class ControllerAsesores{

    function __construct() {
        $this->asesores = new ModelAsesores();
    }

    function setAsesor($data){
        $this->asesores->setAsesor($data);
    }

    function getAsesores(){
        return $this->asesores->getAsesores();
    }

}
