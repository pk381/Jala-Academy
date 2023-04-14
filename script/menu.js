let btn = document.getElementsByClassName("btn");

btn[0].style = "background-color: rgb(41, 236, 236)";

let submenu = document.getElementsByClassName("submenu");

for (let i = 0; i < submenu.length; i++) {
  submenu[i].className = submenu[i].className.replace(" hov", "");
}

console.log("single");

let menu = document.getElementsByClassName("menu-btn");
for (let i = 0; i < menu.length; i++) {

  menu[i].addEventListener("click", () => {
    let show = document.getElementsByClassName("show");
    console.log("main");
    show[0].innerHTML = "You have clicked on " + menu[i].innerHTML;
    return;
  });
}

function openMenu(ele) {

  for (let i = 0; i < btn.length; i++) {
    btn[i].style = "background-color: antiquewhite";
  }

  ele.style = "background-color: rgb(41, 236, 236)";

  let submenu = document.getElementsByClassName("submenu");

  for (let i = 0; i < submenu.length; i++) {
    submenu[i].className = submenu[i].className.replace(" hov", "");
  }

  console.log("single");

  let menu = document.getElementsByClassName("menu-btn");
  for (let i = 0; i < menu.length; i++) {

    menu[i].addEventListener("click", () => {
      let show = document.getElementsByClassName("show");
      console.log("main");
      show[0].innerHTML = "You have clicked on " + menu[i].innerHTML;
      return;
    });
  }
  console.log("done one")
}

function openSubmenu(ele) {


  for (let i = 0; i < btn.length; i++) {
    btn[i].style = "background-color: antiquewhite";
  }

  ele.style = "background-color: rgb(41, 236, 236)";

  console.log("sub");

  let submenu = document.getElementsByClassName("submenu");

  for (let i = 0; i < submenu.length; i++) {
    submenu[i].className += " hov";
  }

  let sub = document.getElementsByClassName("submenu-btn");

  for (let i = 0; i < sub.length; i++) {
    sub[i].addEventListener("click", () => {
      console.log("yes");
      let show = document.getElementsByClassName("show");
      show[0].innerHTML = "You have clicked on " +  sub[i].innerHTML;
    });
  }
  console.log("done two");

}
