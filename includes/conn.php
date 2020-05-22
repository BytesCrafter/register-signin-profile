<?php

    include( dirname( __DIR__ ) . "../config.php" );

    $conn = new mysqli($mysql_lhost, $mysql_uname, $mysql_pword, $mysql_dbase);

    // Check connection
    if ($conn->connect_error) {
        $response = array(
            "status" => "mysql",
            "message" => $conn->connect_error
        );
        echo json_encode( $response );
    }

?>