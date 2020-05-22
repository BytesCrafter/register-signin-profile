<?php

    include("./conn.php");

    if( isset($_POST["uname"]) &&  isset( $_POST["pword"]) ) {

        $uname = $_POST['uname'];
        $pword = $_POST['pword'];

        $sql = "SELECT * FROM users WHERE uname='$uname' AND pword='$pword'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION["token"]="sample";

            $response["status"] = "success";
            $response["data"] = $result->fetch_assoc();

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