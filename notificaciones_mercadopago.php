<?php 
    http_response_code(200);

    $json = file_get_contents('php://input');
    // Converts it into a PHP object 
    $data = json_decode($json, true);

    //Something to write to txt log
    $log  = "Address: " . $_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a") . PHP_EOL .
            "POST Data: " . print_r($data, true) . PHP_EOL .
            "-------------------------" . PHP_EOL;

    //Save string to log, use FILE_APPEND to append.
    file_put_contents('./logs/mercadopago.log', $log, FILE_APPEND);

    return;
?>