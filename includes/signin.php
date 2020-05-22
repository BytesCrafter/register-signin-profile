<?php

    include("./conn.php");

    if( isset($_POST["uname"]) &&  isset( $_POST["pword"]) ) {

        $uname = $_POST['uname'];
        $pword = md5($_POST['pword']);

        $user_table = TAB_PREFIX . "users";

        $sql = "SELECT * FROM $user_table WHERE uname='$uname' AND pword='$pword'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION["token"]="sample";

            $response["status"] = "success";
            $response["data"] = $result->fetch_assoc();

            echo json_encode($response);
        } else {
            
            $response["status"] = "error";
            $response["message"] = "Mysql query error.";
            echo json_encode($response);
        }

    } else {
        $response = array(
            "status" => "failed",
            "session" => "Invalid inputs."
        );
        echo json_encode($response);
    }

?>