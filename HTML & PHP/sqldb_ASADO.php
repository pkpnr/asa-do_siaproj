<?php
        $dbHost = "localhost"; 
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "lolo"; //change dbname according to unsay gi-userdefine ninyo na pangalan
        
        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

        if(!$conn)
        {
            die("Connection failed! " . mysqli_connect_error());
        }
        
    ?>