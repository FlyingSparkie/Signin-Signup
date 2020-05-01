<?php

if(isset($_POST['signup-submit']))
{
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordrepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordrepeat))
    {
       header("Location ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);

    }
}
