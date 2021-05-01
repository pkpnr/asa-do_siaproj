<?php
        $dbHost = "localhost"; 
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "siaproj";
        
        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

        if(!$conn)
        {
            die("Connection failed! " . mysqli_connect_error());
        }
        
    ?>