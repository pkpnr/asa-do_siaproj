<?php
    if (isset($_POST["submit"]))
    {
        
        $username = $_POST["Username"];
        $pwd = $_POST["Pwd"];

        require_once('../sqldb_ASADO.php');
        require_once('func_login_signup.php');

        if(noInpLogin($username, $pwd) !== false)
        {
            header("location: login.php?invalid=noInp");
            exit();
        }
        
        lgnStudent($conn, $username, $pwd);
    }
?>