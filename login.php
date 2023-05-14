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
    <title>EROR</title>
</head>

<body class="bg-slate-900">
    <section class="min-h-screen flex justify-center flex-col items-center  text-white">
        <form class="bg-white my-auto mx-auto border-solid border-2 rounded-xl px-16 py-6" method="post"
            action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <img class="mb-4 h-16 w-full" src="./icons/lock-close-cx-round-719-svgrepo-com.svg">
            <h1 class="text-black text-center">Авторизация</h1>
            <div class="mb-3">
                <label for="login" class="form-label">Username</label>
                <input type="text"
                    class="text-black w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500  border-solid border-2 border-slate-300"
                    placeholder="Username" name="login" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password"
                    class="text-black w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500  border-solid border-2 border-slate-300"
                    placeholder="Password" name="password" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit"
                    class="mt-4 py-4 bg-blue-500 w-full rounded font-bold hover:bg-blue-700">Войти</button>
            </div>
        </form>
        <a href="index.php"
            class="mt-4 rounded-lg w-fit text-base hover:text-blue-200 px-28 py-2 flex justify-center items-center text-white">
            <div>Вернуться на сайт</div>
        </a>
    </section>
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "games";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM admins limit 1";
        $result = $conn->query($sql);
        $admin = $result->fetch_assoc();

        if ($_POST['login'] == $admin['login'] && $_POST['password'] == $admin['password']) {

            $_SESSION['admin'] = 1;
            header("Location: http://localhost:3000/admin.php");
            $conn->close();
            die();
        }
        $conn->close();
        echo "Неверные данные!";
    }
    ?>
</body>

</html>