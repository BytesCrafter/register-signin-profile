<?php
    session_start();

    if(isset($_SESSION["token"])) {
        //Redirect to profile.
        if($page != "profile") {
            echo "<script> console.log('logout'); </script>";
            header("Location: ".$site_url."/install.php");
            exit();
        }
    } else {
        if($page != "home") {
            //Redirect to Signin.
            echo "<script> console.log('logout'); </script>";
            header("Location: ".$site_url."/index.php");
            exit();
        }
    }
?>