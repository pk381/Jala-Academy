let tabs = document.getElementsByClassName("tab");

for (let i = 0; i < tabs.length; i++) {
  tabs[i].style = "display: none";
}

tabs[0].style = "display: block";

function openTab(ele, tab) {
  let tabs = document.getElementsByClassName("tab");
  let btn = document.getElementsByClassName("btn");

  for (let i = 0; i < btn.length; i++) {
    btn[i].style = "background-color: antiquewhite";
  }

  for (let i = 0; i < tabs.length; i++) {
    tabs[i].style = "display: none";
  }

  for (let i = 0; i < tabs.length; i++) {
    if (tabs[i].id == tab) {
      ele.style = "background-color: rgb(41, 236, 236)";
      tabs[i].style = "display: block";
      console.log(ele);
    } else {
      tabs[i].style = "display: none";
    }

    console.log(i);
  }
}