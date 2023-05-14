<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: http://localhost:3000/login.php");
  die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/input.css" />
  <link rel="shortcut icon" href="./icons/free-icon-vr-glasses-2161752.png" type="image/x-icon" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Admin</title>
</head>


<body class="container mx-auto min-h-screen bg-slate-900">
  <a href="logout.php">Выйти</a>
  <h1 class="w-full text-center text-3xl text-gray-200 font-bolt mt-6">Игры</h1>
 <section class="w-full rounded-lg bg-slate-700 text-white mt-6  text-base grid grid-cols-10">
  <div class=" py-2 text-center truncate">ID</div>
  <div class=" py-2 text-center truncate">Превью</div>
  <div class=" py-2 col-span-2 text-center truncate">Название</div>
  <div class=" py-2 col-span-4 truncate">Описание</div>
  <a href="adminCreate.php" class="py-2 text-green-500 col-span-2 text-right pr-6 truncate">Добавить</a>
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
                      while ($row = $result->fetch_assoc()) {
                        echo
                          '
                          <div class=" py-2 text-center truncate">',$row["id"],'</div>
                          <div class=" flex justify-center"><img src="./img/games/', $row["image"], '" alt="" class="h-[50px] w-[50px] object-cover" /></div>
                          <div class=" py-2 col-span-2 text-center truncate">', $row["name"],'</div>
                          <div class=" py-2 col-span-4 text-center truncate">',$row["desc"],'</div>
                          <div class=" flex flex-col items-end pr-6 py-2 col-span-2 text-center truncate"><a class="text-blue-500 mb-2" href="#">Редактировать</a><a class="text-red-600" href="#">Удалить</a></div>
                          ';
                      }
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
?>
       
</section>
</body>
</html>