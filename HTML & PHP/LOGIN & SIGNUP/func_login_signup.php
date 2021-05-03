<?php

    function noInpSignup($student_id, $email, $username, $pwd, $confPwd)
    {
        $res;

        if(empty($student_id) || empty($email) || empty($username) || empty($pwd) || empty($confPwd))
        {
            $res = true;
        }
        else
        {
            $res = false;
        }

        return $res;
    } 


    function inc_SID($student_id)
    {
        $res;

        if(strlen((string)$student_id) > 11)
        {
            $res = true;
        }
        else
        {
            $res = false;
        }

        return $res;
    }

    function inc_Email($email)
    {
        $res;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $res = true;   
        }
        else
        {
            $res = false;
        }

        return $res;
    }


    function inc_UName($username)
    {
        $res;

        if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
        {
            $res = true;
        }
        else
        {
            $res = false;
        }

        return $res;
    }

    function checkPwds($pwd, $confPwd)
    {
        $res;

        if(!($pwd == $confPwd))
        {
            $res = true;
        }
        else
        {
            $res = false;
        }

        return $res;
    }

    function UName_present($conn, $username, $student_id)
    {
        $sql = "SELECT * FROM STUDENTS WHERE Username = ? OR StudentID = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("location: sign-up.php?invalid=stmtFail");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $student_id);
        mysqli_stmt_execute($stmt);

        $resData = mysqli_stmt_get_result($stmt);

        if($r = mysqli_fetch_assoc($resData))
        {
            return $r;
        }
        else
        {
            $res = false;
            return $res;
        }

        mysqli_stmt_close($stmt);
    }

    function newUser($conn, $student_id, $email, $username, $pwd)
    {
        $sql = "INSERT INTO STUDENTS
                VALUES
                (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("location: sign-up.php?invalid=stmtFail");
            exit();
        }

        $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "isss", $student_id, $email, $username, $hashPwd); //"ssss" = passing four strings
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: sign-up.php?invalid=none");
        exit();
    }

    function noInpLogin($username, $pwd)
    {
        $res;

        if(empty($username) || empty($pwd))
        {
            $res = true;
        }
        else
        {
            $res = false;
        }

        return $res;
    } 

    function lgnStudent($conn, $username, $pwd)
    {
        $UName_present = UName_present($conn, $username, $username);

        if ($UName_present === false)
        {
            header("location: login.php?invalid=LoginError"); //check login info
            exit();
        }

        $hashPwd = $UName_present["S_Pwd"];
        $veriPwd = password_verify($pwd, $hashPwd);

        if ($veriPwd === false)
        {
            header("location: login.php?invalid=LoginError");
            exit();
        }
        else if ($veriPwd === true)
        {
            session_start();
            $_SESSION["SID"] = $UName_present["StudentID"];
            $_SESSION["UName"] = $UName_present["Username"];

            header("location: ../MAIN PAGES/home-page.php");
            exit();
        }
    }

?>