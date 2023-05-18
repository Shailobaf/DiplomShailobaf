<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM games WHERE id = ".$_GET["gameId"].";";
$result = $conn->query($sql);
header("Location: http://localhost:3000/admin.php");
die();
?>