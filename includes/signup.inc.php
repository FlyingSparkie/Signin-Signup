<?php

if (isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';
  $username       = $_POST['uid'];
  $email          = $_POST['mail'];
  $password       = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];
  echo "Username ={$username}, email={$email}";
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location ../signup?error=emptyfields&uid=" . $username . "&mail=" . $email);
    echo "empty fields detected";
    exit();
  } 
  //check for chars entered//
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidmail&uid=");
    echo "dunno";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=" . $username);
    echo "invalid email or user id";
    exit();
  } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&mail=" . $email);
    echo "User name doesn't match email";
    exit();
  } 
  // check password match
  else if ($password !== $passwordRepeat) {
    header("Location: ../signup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
    echo "Password does not match or missing";
    exit();
  } else {
    $sql  = "SELECT * FROM users WHERE uidUser=?";
    //$sql  = "SELECT * FROM users WHERE uidUser=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror");
      echo "not connected to database {$stmt}";
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $mailuid);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../signup.php?error=usertaken&mail=" . $email);
        echo "User has another email already registered";
        exit();
      } else {
        $sql  = "INSERT INTO users(uidUser,emailUser,pwdUsers) VALUES(?,?,?)";
        //$stmt = mysli_stmt_init($conn);
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?error=sqlerror");
          echo "Query error, posibly miss type";
          exit();
        } else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php?signup=success");
     
          exit();
        }
      }
    }

  }
  mysqli_stmt_close($stmt);
  echo "stmt closed ";
  mysqli_close($conn);
  echo "connection closed";
} else {
  header("Location: ../signup.php");
  echo "end of line";
  exit();
}
