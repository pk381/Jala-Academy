let coll = document.getElementsByClassName("coll");

let btn = document.getElementsByClassName("btn");

// collaps(btn[0]);

function collaps(ele) {
  for (let i = 0; i < btn.length; i++) {
    btn[i].style = "background-color: antiquewhite";
  }

  ele.style = "background-color: rgb(41, 236, 236)";

  if (ele.innerText == "Single") {

    for (let i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
          this.classList.toggle("active");
      
          let content = this.nextElementSibling;
      
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }

          for(let i = 0;i<coll.length;i++){
            if(coll[i] != this){

                coll[i].nextElementSibling.style.maxHeight = null;
                coll[i].className = coll[i].className.replace(" active", "");
            }
          }
        }); 
      }

  }
  else{

    console.log("multiple");

    for (let i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
          this.classList.toggle("active");
      
          let content = this.nextElementSibling;
      
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        });
      }
  }
}


