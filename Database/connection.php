<?php

// <-- DALAWANG URI NG PAG CONNECT NG DATABASE-->

// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $db_name = 'procedural_login';


$conn = mysqli_connect('localhost', 'root', '', 'procedural_login');

if (!$conn) {
  die('Connection Failed' . mysqli_connect_error());
}
echo ('Connected Successfully!');
