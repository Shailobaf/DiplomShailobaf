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
  <h1 class="w-full text-center text-3xl text-gray-200 font-bolt mt-6">Добавление игр</h1>
  <form method=" post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="my-2">
      <span class="block mb-2 text-xl text-gray-200">Название</span>
      <input required name="name" type="text" minlength="4" class="w-full text-white bg-slate-700 px-3 py-2 placeholder-gray-300 border border-gray-300 
      rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
        placeholder="Название игры" />
    </div>
    <div class="my-2">
      <span class="block mb-2 text-xl text-gray-200">Описание</span>
      <input required name="desc" type="text" minlength="10" class="w-full text-white bg-slate-700 px-3 py-2 placeholder-gray-300 border border-gray-300 
      rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" placeholder="Описание" />
    </div>
    <div class="my-2">
      <span class="block mb-2 text-xl text-gray-200">Режим</span>
      <input required name="mode" type="text" minlength="4" class="w-full text-white bg-slate-700 px-3 py-2 placeholder-gray-300 border border-gray-300 
      rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
        placeholder="Режим игры" />
    </div>
    <div class="my-2">
      <span class="block mb-2 text-xl text-gray-200">Кол-во игроков</span>
      <input required name="players" type="text" class="w-full text-white bg-slate-700 px-3 py-2 placeholder-gray-300 border border-gray-300 
      rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
        placeholder="Кол-во игроков игры" />
    </div>
    <div class="my-2">
      <span class="block mb-2 text-xl text-gray-200">Возраст</span>
      <input required name="restriction" type="text" class="w-full text-white bg-slate-700 px-3 py-2 placeholder-gray-300 border border-gray-300 
      rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
        placeholder="Возраст игры" />
    </div>
    <div class="my-2">
      <span class="block mb-2 text-xl text-gray-200">Продолжительность</span>
      <input required name="duration" type="text" class="w-full text-white bg-slate-700 px-3 py-2 placeholder-gray-300 border border-gray-300 
      rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
        placeholder="Продолжительность игры" />
    </div>
    <div class="my-2">
      <span class="block mb-2 text-xl text-gray-200">Картинка</span>
      <input required name="avatar" type="file" class="w-full text-white h-8" placeholder="Картинка" />
    </div>
    <div class="w-full flex justify-end">
      <button type="submit" class="text-xl bg-blue-600 rounded-lg py-2 px-4 text-white">Сохранить</button>
    </div>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "games";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    try {
      $sql = "insert into games (name,desc,image,mode,players,restriction,duration)
      values();";
      $result = $conn->query($sql);

      // $_POST['login']

      header("Location: http://localhost:3000/admin.php");
      $conn->close();
      die();
    } catch (Exception) {
      echo "Ошибка добавления";
    }
    $conn->close();
    echo "Неверные данные!";
  }
  ?>
</body>

</html>