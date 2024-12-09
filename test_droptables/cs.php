<?php

$db_host = "localhost";
$db_user = "targetuser";
$db_pass = "UnSuperPassword1234";
$db = "targetdb";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}



$sql = "SELECT * FROM users";


if(isset($_GET['q'])) {
	$sql = $_GET['q'];
}




$res = $mysqli->query($sql);


 while($row = $res->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["lastname"]. "<br>";
  }


$mysqli->close();






?>
