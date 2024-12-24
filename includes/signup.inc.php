<?php

if (isset($_POST['register'])) {
  $complete_name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['user_name'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $pwdrepeat = password_hash($_POST['pwdrepeat'], PASSWORD_DEFAULT);

  require '../Database/connection.php';
  require 'function.inc.php';

  if (emptyInputSignup($complete_name, $email, $username, $password, $passwordRepeat) !== false) {
    header('location: ../signup.php?error=emptyinput');
    exit();
  }

  if (invalidEmail($email) !== false) {
    header('location: ../signup.php');
    exit();
  }

  if (invalidUserName($username) !== false) {
    header('location: ../signup.php?error=invalidUserName');
    exit();
  }
  if (passwordMatch($password, $pwdMatch) !== false) {
    header('location: ../signup.php?error=passwordsdontmatch');
    exit();
  }
  if (userExist($conn, $username, $email) !== false) {
    header('location: ../signup.php?error=usernamealreadyexist');
  }
} else {
  header('location: ../signup.php');
}
