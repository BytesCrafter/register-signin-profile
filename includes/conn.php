<?php

    $conn = new mysqli("localhost","admin","admin","emathrix");

    // Check connection
    if ($conn->connect_error) {
        $response = array(
            "status" => "nothing"
        );
        exit( json_encode( $response ) );
    }

    session_start();

?>