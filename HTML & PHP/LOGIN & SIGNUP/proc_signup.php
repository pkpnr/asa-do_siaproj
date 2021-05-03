<?php
    if (isset($_POST["submit"]))
    {
        $student_id = $_POST["StudentID"];
        $email = $_POST["Email"];
        $username = $_POST["Username"];
        $pwd = $_POST["Pwd"];
        $confPwd = $_POST["re_Pwd"]; 
    

        require_once('../sqldb_ASADO.php');
        require_once 'func_login_signup.php';

        if(noInpSignup($student_id, $email, $username, $pwd, $confPwd) !== false)
        {
            header("location: sign-up.php?invalid=noInp");
            exit();
        } 

        if(inc_SID($student_id) !== false)
        {
            header("location: sign-up.php?invalid=wrongSID");
            exit();
        }

        if(inc_Email($email) !== false)
        {
            header("location: sign-up.php?invalid=wrongEmail");
            exit();
        }


        if(inc_UName($username) !== false)
        {
            header("location: sign-up.php?invalid=wrongUsername");
            exit();
        }

        if(checkPwds($pwd, $confPwd) !== false)
        {
            header("location: sign-up.php?invalid=PwdNoMatch");
            exit();
        }

        if(UName_present($conn, $username, $student_id) !== false)
        {
            header("location: sign-up.php?invalid=UNameAlreadyTaken");
            exit();
        }

        newUser($conn, $student_id, $email, $username, $pwd);

    }
    
    else
    {
        header("location: sign-up.php");
        exit();
    } 



    

?>