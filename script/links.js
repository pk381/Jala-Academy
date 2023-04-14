let btn = document.getElementsByClassName("btn");

let links = document.getElementsByClassName("working");

for (let j = 0; j < btn.length; j++) {
  links[j].style = "display: none";
  btn[j].style = "background-color: antiquewhite";
}

links[0].style = "display: block";
btn[0].style = "background-color: rgb(41, 236, 236)";


for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("click", () => {
    console.log(btn[i]);

    for (let j = 0; j < btn.length; j++) {
      if (i == j) {
        links[j].style = "display: block";
        btn[j].style = "background-color: rgb(41, 236, 236)";
      } else {
        links[j].style = "display: none";
        btn[j].style = "background-color: antiquewhite";
      }
    }
  });
}
