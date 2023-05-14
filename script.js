const cards = [...document.querySelectorAll(".card-item")];
cards.map((card) => {
  card.addEventListener("click", () => {
    cards.map((card) => card.classList.remove("card-active"));
    card.classList.toggle("card-active");
  });
});
//heder

document.addEventListener("scroll", () => {
  const header = document.querySelector("header");
  if (window.pageYOffset > 250 && screen.width > 1024) {
    if(window.location.href==='http://localhost:3000/birthday.php') {
      header.classList.add('bg-gradient-to-r')
      header.classList.add('from-pink-900')
      header.classList.add('to-blue-900')
      header.classList.add('blur-xs')
    } else {
      header.style.background = "rgb(15, 23, 42)";
    }
  } else {
    if(window.location.href==='http://localhost:3000/birthday.php') {
      header.classList.remove('bg-gradient-to-r')
      header.classList.remove('from-pink-900')
      header.classList.remove('to-blue-900')
      header.classList.remove('blur-xs')
    } else {
      header.removeAttribute("style");
    }
  }
});

//burger-menu
function openNav() {
  if (document.getElementById("brg").classList.contains("hidden")) {
    document.getElementById("brg_btn1").classList.add("hidden");
    document.getElementById("brg_btn1").classList.remove("block");
    document.getElementById("brg_btn2").classList.add("block");
    document.getElementById("brg_btn2").classList.remove("hidden");
    document.getElementById("brg").classList.add("flex");
    document.getElementById("brg").classList.remove("hidden");
    setTimeout(() => {
      document.getElementById("brg").classList.remove("-translate-y-[120%]");
      document.getElementById("brg").classList.remove("opacity-0");
    }, 400);
  } else {
    document.getElementById("brg_btn1").classList.add("block");
    document.getElementById("brg_btn1").classList.remove("hidden");
    document.getElementById("brg_btn2").classList.add("hidden");
    document.getElementById("brg_btn2").classList.remove("block");
    document.getElementById("brg").classList.add("-translate-y-[120%]");
    document.getElementById("brg").classList.add("opacity-0");
    setTimeout(() => {
      document.getElementById("brg").classList.remove("flex");
      document.getElementById("brg").classList.add("hidden");
    }, 400);
  }
}

//slider
let defaultTransform = 380;

function goNext() {
  defaultTransform = defaultTransform - 380;
  var slider = document.getElementById("slider");
  if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.3)
    defaultTransform = 0;
  slider.style.transform = "translateX(" + defaultTransform + "px)";
}

function goPrev() {
  var slider = document.getElementById("slider");
  if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
  else defaultTransform = defaultTransform + 380;
  slider.style.transform = "translateX(" + defaultTransform + "px)";
}

next.addEventListener("click", goNext);

prev.addEventListener("click", goPrev);



//message
function openAnswer(id) {
  document.getElementById(`question${id}`).classList.toggle("rotate-180");
  document.getElementById(`answer${id}`).classList.toggle("hidden");
}
