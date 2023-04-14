let btn = document.getElementsByClassName("btn");

let links = document.getElementsByClassName("props");

for (let j = 0; j < btn.length; j++) {
  links[j].style = "display: none";
  btn[j].style = "background-color: antiquewhite";
}

links[0].style = "display: flex";
btn[0].style = "background-color: rgb(41, 236, 236)";


for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("click", () => {
    console.log(btn[i]);

    for (let j = 0; j < btn.length; j++) {
      if (i == j) {
        links[j].style = "display: flex";
        btn[j].style = "background-color: rgb(41, 236, 236)";
      } else {
        links[j].style = "display: none";
        btn[j].style = "background-color: antiquewhite";
      }
    }
  });
}

let alts_btn = document.getElementsByClassName("alt-btn");

for(let i = 0;i<alts_btn.length;i++){

    alts_btn[i].addEventListener("click", ()=>{

        alts_btn[i].parentNode.style = "display: none";
    })
}


