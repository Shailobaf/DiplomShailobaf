<header class="blur-xs">
    <nav class="container mx-auto px-6">
      <div class="flex justify-between items-center w-full flex-col lg:flex-row">
        <div class="flex flex-row items-center w-full lg:w-3/4 justify-between">
          <div class="flex flex-row items-center">
            <a class="text-white text-2xl font-bold py-6  lg:text-2xl hover:text-gray-300" href="#">VR center</a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" onclick="openNav()"
              class="text-white hover:text-gray-300 focus:outline-none focus:text-gray-300" aria-label="toggle menu">
              <img id="brg_btn1" class="hover:rotate-180 w-10 h-10" src="./icons/menu-svgrepo-com.png">
              <img id="brg_btn2" class="hover:rotate-180 w-10 h-10 hidden" src="./icons/close-svgrepo-com.png">
            </button>
          </div>
        </div>
        <div id="brg"
          class="lg:opacity-100 lg:translate-y-0 -translate-y-[120%] hidden md:flex text-4xl lg:text-sm min-h-screen lg:min-h-0 flex-col w-screen lg:w-full lg:flex-row lg:bg-none items-center bg-slate-900 lg:bg-transparent text-white lg:text-white justify-start pt-36 lg:gap-0 lg:pt-0 gap-12 lg:justify-end">
          <a class="py-1 hover:text-gray-300 hover:underline lg:mx-4 md:my-0" href="birthday.php">Дни
            рождения</a>
          <a class=" py-1 hover:text-gray-300 hover:underline lg:mx-4 md:my-0" href="contactform.php">Связь с
            нами</a>
          <a class="py-1 px-8 lg:min-w-28 hover:text-gray-300 lg:hover:no-underline hover:underline  rounded-2xl lg:hover:text-slate-600 lg:mx-4 lg:my-0 lg:bg-white lg:text-gray-800 lg:opacity-75 lg:focus:outline-none lg:focus:shadow-outline transform transition hover:scale-105 duration-300"
            href="index.php">Главная</a>
        </div>
      </div>
    </nav>
  </header>