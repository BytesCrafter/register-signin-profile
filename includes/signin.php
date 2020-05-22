<?php

    if( isset($_POST["uname"]) &&  isset( $_POST["pword"]) ) {
        $response = array(
            "status" => "success",
            "session" => "hashsample",
            "uname" => $_POST["uname"],
            "pword" => $_POST["pword"]
        );
        
        echo json_encode($response);
    } else {
        $response = array(
            "status" => "error",
            "session" => "Some sort of an error."
        );
        echo json_encode($response);
    }

?>