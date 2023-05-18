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
  <title>Birthday</title>
</head>

<body class="bg-gradient-to-r from-pink-900 to-blue-900 blur-xs">

  <?php include 'partials/header.php'; ?>

  <section class="relative bg-blueGray-50">
    <div class="relative pt-24 pb-60 flex content-center items-center justify-center min-h-screen-75">
      <div class="bg-fixed absolute top-0 w-full h-full bg-center bg-cover" style="
                  background-image: url('./icons/lidya-nada-MD_ha01Bk7c-unsplash.jpg');">
        <div class="w-full h-full absolute opacity-70 bg-black"></div>
      </div>
      <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center pr-12">

            <h1 class="text-white font-semibold mt-36 text-4xl">
              День рождения
              вместе с VR Center
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="p-8 ">
      <div class="text-white p-4 rounded-lg py-4">
        <h4 class="text-4xl tracking-widest text-center">Празднование дня рождения</h4>
        <p class="text-center lg:px-8 text-xl mt-2">в клубе виртуальной реальности «VR Center» — отличный вариант для
          тех, кто хочет весело и необычно провести время в компании друзей.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 xl:gap-12 px-2 xl:px-12">
          <div class="flex space-x-8 mt-8">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flex flex-col w-full px-4 mb-8">

    <div class="flex flex-col lg:flex-row justify-center lg:gap-36 mb-8">
      <div class="bg-gray-100 mb-10 lg:mb-0 opacity-70  flex flex-col text-black rounded-lg p-4 w-full lg:w-1/3  shadow-2xl">
        <div class="text-xl mb-4 text-center w-full">КАК ЭТО ПРОИСХОДИТ</div>
        <div class="text-base">Стать участниками игры могут одновременно до 10 человек, а в мероприятии может принять
          участие до 15
          человек. Мы можем провести соревнования между командами на результат. Устроить соревнования на гоночном
          автосимуляторе. В общем нам есть что предложить для больших компании!</div>
      </div>
      <div class="w-full lg:w-1/3">
        </video>
        <video class="flex justify-center items-center bg-transparent" width="440" height="252" autoplay="autoplay"
          loop="loop" muted="muted">
          <source src="./video/oculus-medium-launch-trailer_h5REqcXi.mp4">
          </source>
        </video>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row-reverse justify-center lg:gap-36 mb-8">
      <div class="bg-gray-100 mb-10 lg:mb-0 opacity-70 flex flex-col text-black rounded-lg p-4 w-full lg:w-1/3 shadow-2xl">
        <div class="text-2xl mb-4 text-center w-full">ПОЛНОЕ ПОГРУЖЕНИЕ</div>
        <div class="text-base">В нашем центре используется новейшее, дорогое и единственное в нашем городе оборудование
          с OLED дисплеями от которого не болят глаза. Мы предоставляем качественное погружение игрокам в виртуальную
          реальность, благодаря HTC VIVE PRO и контроллерам вы легко сможете отправиться в незабываемое приключение по
          виртуальным мирам.
        </div>
      </div>
      <div class="w-full lg:w-1/3">
        <video class="flex justify-center items-center bg-transparent" width="440" height="252" autoplay="autoplay"
          loop="loop" muted="muted">
          <source src="./video/gizmovr-new-intro_AKKVMwtG.mp4">
          </source>
        </video>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row justify-center lg:gap-36 mb-8">
      <div class="bg-gray-100 mb-10 lg:mb-0 opacity-70 flex flex-col text-black rounded-lg p-4 w-full lg:w-1/3 shadow-2xl">
        <div class="text-2xl mb-4  text-center w-full">КОЛЛЕКЦИЯ VR-ИГР</div>
        <div class="text-base">В нашем клубе большая и регулярно пополняемая коллекция VR-игр различных жанров и уровней
          сложности. Мы знаем, чем удивить детей, новичков и опытных игроков </div>
      </div>
      <div class="w-full lg:w-1/3">
        <video class="flex justify-center items-center bg-transparent" width="440" height="252" autoplay="autoplay"
          loop="loop" muted="muted">
          <source src="./video/polnoe-pogruzenie-v-virtualnuyu-realnost_CMGlvf1C.mp4">
          </source>
        </video>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row-reverse justify-center lg:gap-36 mb-8">
      <div class="bg-gray-100 mb-10 lg:mb-0 opacity-70 flex flex-col text-black rounded-lg p-4 w-full lg:w-1/3 shadow-2xl">
        <div class="text-2xl mb-4 text-center w-full">Еда</div>
        <div class="text-base">Мы можем заказать вам столик в ресторане Сицилия со своим тортом и 15% скидкой, или вы
          можете принести еду с собой.</div>
      </div>
      <div class="bg-gray-100 mb-10 lg:mb-0 opacity-70 flex flex-col text-black rounded-lg p-4 w-full lg:w-1/3 shadow-2xl">
        <div class="text-2xl mb-4 text-center w-full">Зона отдыха</div>
        <div class="text-base">Для наших гостей оборудована уютная зона отдыха с диваном и пуфами, где можно отдохнуть
          до или после погружения в VR.</div>
      </div>
    </div>

  </section>

  </section id="svez" class="bg-slate-900">
  <section>
    <div class="bg-fixed w-full h-[240px] pb-[20px] bg-center bg-cover" style="
  background-image: url('./icons/nik-5dgHxsvJ170-unsplash.jpg');">
  </div>
  <div class="relative flex items-top justify-center my-16 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

      <div class="mt-8 overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="p-6 bg-slate-800 sm:rounded-lg">
            <h1 class="text-4xl sm:text-5xl text-white">
              Приходите
            </h1>
            <p class="text-normal text-lg sm:text-2xl font-medium text-gray-400 mt-2">
              Мы будем рады видеть вас
            </p>

            <div class="flex items-center mt-8 text-gray-400">
              <img src="./icons/map-location-svgrepo-com.svg" alt="" class="w-8 h-8 text-gray-500">
              <div class="ml-4 text-md font-semibold w-40">
                Проспект Михаила Нагибина 34
              </div>
            </div>
            <div class="flex items-center mt-4 text-gray-400">
              <img src="./icons/telephone-receiver-svgrepo-com.svg" alt="" class="w-8 h-8 text-gray-500">
              <div class="ml-4 text-md font-semibold w-40">RU+7(999)695-71-61</div>
            </div>
            <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
              <img src="./icons/mail-x-svgrepo-com.svg" alt="" class="w-8 h-8 text-gray-500">
              <div class="ml-4 text-md font-semibold w-40">
                info@vr-center.ru
              </div>
            </div>
          </div>
          <div class="">
            <script type="text/javascript" charset="utf-8" async
              src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A964c62e7eb15c4b70da9bbeee16afd74a16510ae4b37c9c9d933b01895090f36&amp;width=600&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <?php include 'partials/footer.php'; ?>
  <script src="script.js"></script>
</body>
</html>