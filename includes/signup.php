<?php

    include("./conn.php");

    if( isset($_POST["uname"]) &&  isset( $_POST["pword"]) ) {

        $uname = $_POST['uname'];
        $pword = md5($_POST['pword']);

        $sql = "INSERT INTO users (uname, pword) VALUES ('$uname', '$pword') ";
        $result = $conn->query($sql);

        if ($result) {
            $response["status"] = "success";
            $response["data"] = "You can now signin.";

            echo json_encode($response);
        } else {
            
            $response["status"] = "error";
            $response["message"] = "User not Found!";
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