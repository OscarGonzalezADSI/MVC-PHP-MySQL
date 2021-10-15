<?php

require "./controller/ControllerClientes.php";
require "./view/viewClientes.php";

$data = array();
$clientes = new ControllerClientes();

echo "view clientes";

if(count($routes) == 3){
    $data = $clientes->getClientes();
    viewClientes("./", $data);
}else if(count($routes) == 4){
    if($routes[3] == ""){
        $data = $clientes->getClientes();
        viewClientes("../", $data);
    }else if($routes[3] == "registrar"){
        $clientes->setCliente($_POST);
        $data = $clientes->getClientes();
        viewClientes("../", $data);
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
