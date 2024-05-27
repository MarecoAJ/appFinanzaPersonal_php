<?php
$rutaObtenida = explode("/", $_SERVER['REQUEST_URI']);
$rutaObtenida = array_filter($rutaObtenida);

if($rutaObtenida == 0){

    $mensaje = [
        'status' => 404,
        'response' => "No encontrado",
    ];

    echo json_encode($mensaje, http_response_code($mensaje["status"]));
 
} else{

    switch($_SERVER["REQUEST_METHOD"]){
        case 'GET':
        $mensaje = [
            'status' => 200,
            'response' => "Solicitud correcta",
        ];
    
        echo json_encode($mensaje, http_response_code($mensaje["status"]));
        break;
    }
}
?>