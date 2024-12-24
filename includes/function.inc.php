<?php
$result = '';
function emptyInputSignup($complete_name, $email, $username, $password, $passwordRepeat)
{
  if (empty($complete_name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email)
{
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validates email format
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidUserName($username)
{
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { // Allow only alphanumeric usernames 
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function passwordMatch($password, $pwdrepeat)
{
  $result = '';

  if ($password !== $pwdrepeat) {
    $repeat = true;
  } else {
    $repeat = false;
  }
  return $result;
}

function userExist($conn, $username, $email)
{
  $sql = "SELECT * users WHERE username = ? OR email = ?;";
  $stmt = mysqli_stmt_init($conn);
}
