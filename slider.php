<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM games";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo 
    '<div class="flex flex-shrink-0 relative w-full sm:w-auto card-wrapper">
        <a href="game.php?gameId=', $row["id"], '"><img src="./img/games/' , $row["image"], '" alt="" class="card-img object-fit w-[380px] h-[420px]" /></a>    
      </div>';
  }
} else {
  echo "0 results";
}

$conn->close();
?>