let img = document.getElementById("img_burger");
let menu= document.getElementById("menu_burger");

img.addEventListener("click", () => {
  if(getComputedStyle(menu).display != "none"){
   menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
})

