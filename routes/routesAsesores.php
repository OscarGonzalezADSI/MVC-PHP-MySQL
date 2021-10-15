<?php

require "./controller/ControllerAsesores.php";
require "./view/viewAsesores.php";
$data = array();
$asesores = new ControllerAsesores();

echo "view Asesores";

if(count($routes) == 3){
    $data = $asesores->getAsesores();
    viewAsesores("./", $data);
}else if(count($routes) == 4){
    if($routes[3] == ""){
        $data = $asesores->getAsesores();
        viewAsesores("../", $data);
    }else if($routes[3] == "registrar"){
        $asesores->setAsesor($_POST);
        $data = $asesores->getAsesores();
        viewAsesores("../", $data);
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
