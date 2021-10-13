<?php 
    // collego il database 
    require __DIR__ . '/../data/databasa.php';

    // setto risposta con protocollo JSON
    header('Content-Type: application/json');

    // invio la risposta
    echo json_encode($db);
?>