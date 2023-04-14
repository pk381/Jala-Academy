
// menu controller
let menu = document.getElementsByClassName("coll-menu");
let sub_menu = document.getElementsByClassName("list");

for(let i = 0;i<menu.length;i++){
  menu[i].addEventListener("click", ()=>{


    for(let j = 0;j<sub_menu.length;j++){

      if(j == i){
        console.log(sub_menu[j])
        if(sub_menu[j].style.maxHeight == "fit-content"){

          sub_menu[j].style = "max-height: 0";
        }
        else{
          sub_menu[j].style = "max-height: fit-content";
        }
        
      }
      else{
        sub_menu[j].style = "max-height: 0";
      }
    }
    
  })
}
