<?php

$uri = $_SERVER['REQUEST_URI'];

$routes = explode("/", $uri);

if($routes[2] == "home" || $routes[2] == "HOME"){
    if(count($routes) == 3){
        echo "view home";
    }else if(count($routes) == 4){
        echo "view home";
    }else{
        echo "Error.";
    }
}else if($routes[2] == "clientes"){
    include "routes/routesClientes.php";
}else if($routes[2] == "asesores"){
    include "routes/routesAsesores.php";
}else if($routes[2] == "agendamientos"){
    include "routes/routesAgendamientos.php";
}
