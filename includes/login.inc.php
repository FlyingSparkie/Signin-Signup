<?php

if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header(("Location: ../index.php?error=emptyfields"));
        exit();
    } 
    else {
        $sql = "SELECT * FROM users WHERE uidUser=? OR emailUser=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{
            // ss correponds to the two string params
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = msqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
             $pwdcheck = password_verify($password, $row['pwdUsers']);
             if ($pwdcheck == false){
                header ("Location: ../index.php?error=wrongpwd");
                exit();
             }  
             else if($pwdcheck == true){
                session_start();
                $_SESSION['userid']=$row['idUsers'];
                $_SESSION['userUid']=$row['uidUser'];
                header ("Location: ../index.php?login=success");
                exit();
             } 
             else {
                header ("Location: ../index.php?error=wrongpwd");
                exit();
             }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
                }
        }
    }
} 
else {

    header("Location: ../index.php");
    exit();
}