<?php

require "./controller/ControllerAgendamientos.php";
require "./view/viewAgendamientos.php";

$data = array();
$agendamientos = new ControllerAgendamientos();

echo "view agendamientos";

if(count($routes) == 3){
    $data = $agendamientos->getAgendamientos();
    viewAgendamientos("./", $data);
}else if(count($routes) == 4){
    if($routes[3] == ""){
        $data = $agendamientos->getAgendamientos();
        viewAgendamientos("../", $data);
    }else if($routes[3] == "registrar"){
        $agendamientos->setAgendamiento($_POST);
        $data = $agendamientos->getAgendamientos();
        viewAgendamientos("../", $data);
    }else{
        echo "Error.";
    }
}else if(count($routes) == 5){
    $ref = $routes[4];
    $ref = (int)$ref;
    if($ref){
        if($routes[3] == "modificar"){
            echo "modificar {$ref}";
        }else if($routes[3] == "eliminar"){
            echo "eliminar {$ref}";
        }
    }else{
        echo "Error.";
    }
}else{
    echo "Error.";
}
