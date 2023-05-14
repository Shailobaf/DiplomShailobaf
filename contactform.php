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
  <title>Обратная связь</title>
</head>

<body class="min-h-screen">
  <section class="text-gray-600  min-h-screen relative">
    <div class="absolute inset-0 bg-gray-300">
      <iframe
        src="https://yandex.ru/map-widget/v1/?um=constructor%3A6590c88498a393ed6b38b4d2b6f6fc42f45fa4903e7f407607a16076246da31d&amp;source=constructor"
        width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no"></iframe>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-1/3 md:w-1/2 rounded-lg bg-gray-200 bg-opacity-80 p-4 flex flex-col w-full mt-10 md:mt-0 relative z-10 shadow-2xl">
        <div class="flex flex-col w-full">
          <a href="index.php" class=" text-slate-900">
            <div class="flex flex-row w-full">
              <div>Назад</div>
            </div>
          </a>
          <h2 class="flex justify-center text-gray-900 text-lg mb-1 font-medium">Обратная связь</h2>
          <p class="flex justify-center items-center mb-5 text-gray-600">Узнайте ответ на ваш вопрос</p>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input  required type="email" id="email" name="email"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-900 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-600">Сообщение</label>
            <textarea required id="message" name="message"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-900 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
          <button type="submit"
            class="text-white bg-blue-900 py-2 px-6 focus:outline-none hover:bg-blue-500 rounded text-lg">Отправить</button>
          <p class="flex justify-center text-xs text-gray-500 mt-3">Техподдержка ответит вам в ближайшее время </p>
          </div>
    </form>
  </section>
  <?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true); // Параметр 'true' разрешает модель исключений
    try {
      $email = $_POST['email'];
      $message = $_POST['message'];
      // Параметры SMTP-сервера
      //$mail->SMTPDebug = 2;                                 // Раскомментируйте для вывода отладочной информации
      $mail->isSMTP(); // Указываем, что модуль будет работать в режиме SMTP
      $mail->Host = 'smtp.yandex.ru'; // Адрес сервера SMTP
      $mail->SMTPAuth = true; // Включение аутентификации SMTP
      $mail->Username = 'Evgeniyivanovich161@yandex.ru'; // Адрес полностью, если используется почта для домена.
      $mail->Password = 'fkjxomjhyypqethy';
      $mail->SMTPSecure = 'TLS'; // Включение шифрования TLS, как вариант можно 'ssl'
      $mail->Port = 587; // TCP-порт, для Яндекса работает именно такой 587
  
      // Получатели
      $mail->setFrom('Evgeniyivanovich161@yandex.ru', 'VrCenter'); // Отправитель
      $mail->addAddress('Isama001@bk.ru', 'User Name'); // Добавление получателя, в таком виде можно указать несколько
      //$mail->addAddress('contact@example.com');             // Имя можно не указывать
      //$mail->addReplyTo('info@example.com', 'Info');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');
  
      // Вложенные файлы
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Добавление файла, в таком виде можно указать несколько
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Имя можно не указывать
  
      // Контент письма
      $mail->CharSet = 'UTF-8'; // Кодировка для всех текстов
      $mail->isHTML(true); // Включение HTML-формата
      $mail->Subject = 'VrCenter';
      $mail->Body = "<h1>Email: $email</h1><br><h2> Сообщение: $message</h2>";
      //$mail->AltBody = 'Вариант текста письма для почтовых программ, не поддерживающих HTML';
  
      // Отправка
      $mail->send();
      header("Location: http://localhost:3000/contactY.php");
      die();
      //echo 'Письмо отправлено';
  
    } catch (Exception $e) {
      echo $mail->ErrorInfo;   
      // header("Location: http://localhost:3000/contactN.php");
      // die();
    }
  }
  ?>
  <script src="script.js"></script>
</body>

</html>