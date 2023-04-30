<?php

$servername = "localhost";
$username = "konstma";
$password = "Pitracin005";
$dbname = "konstma";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "mrdka";
  ?>

