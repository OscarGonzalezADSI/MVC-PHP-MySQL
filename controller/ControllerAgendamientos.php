<?php
include "model/ModelAgendamientos.php";

class ControllerAgendamientos{

    function __construct() {
        $this->agendamientos = new ModelAgendamientos();
    }

    function setAgendamiento($data){
        $this->agendamientos->setAgendamiento($data);
    }

    function getAgendamientos(){
        return $this->agendamientos->getAgendamientos();
    }

}
