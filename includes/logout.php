<?php

    session_start();

    unset($_SESSION["token"]);

    echo json_encode(array(
        "logout" => "success"
    ));

?>