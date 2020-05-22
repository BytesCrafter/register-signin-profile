<?php
    //Check if database is setup.
    include("./includes/conn.php");
    $user_table = TAB_PREFIX . "users";

    if (!$conn->connect_error) {
        $sql = "SHOW TABLES LIKE '$user_table'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0) {
            //Redirect to index.php
            // header("Location: ".$site_url);
            // exit();
        } else {
            //Install database then redirect.
            $sql = "CREATE TABLE `".$user_table."` (";
                $sql .= "`ID` bigint(20) NOT NULL AUTO_INCREMENT, ";
                $sql .= "`uname` varchar(49) NOT NULL, ";
                $sql .= "`pword` varchar(120) NOT NULL, ";
                $sql .= "`timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, ";
                $sql .= "PRIMARY KEY (`ID`), ";
                $sql .= "UNIQUE  (`uname`) ";
                $sql .= ") ENGINE = InnoDB; ";
            $result = $conn->query($sql);

            header("Location: ".$site_url);
            exit();
        }
    }

    //If setup, the continue to index.php.
?>