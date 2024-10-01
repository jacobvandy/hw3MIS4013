<?php
function get_db_connection() {
  $servername = "mis4013-jv.mysql.database.azure.com";
  $username = "jacobvandy";
  $password = "mis4013!";
  $dbname = "mis4013-jv";
  $port = "3306";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  return $conn;
}
?>
