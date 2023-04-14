var countries = [
  "Afghanistan",
  "Albania",
  "Algeria",
  "Andorra",
  "Angola",
  "Anguilla",
  "Antigua",
  "Argentina",
  "Armenia",
  "Aruba",
  "Australia",
  "Austria",
];

let result = document.getElementById("result");
let search = document.getElementById("search");

let btn = document.getElementsByClassName("btn");

choose_one(btn[0]);

function choose_one(ele) {
  for (let i = 0; i < btn.length; i++) {
    btn[i].style = "background-color: antiquewhite";
  }

  ele.style = "background-color: rgb(41, 236, 236)";

  search.addEventListener("input", () => {
    result.innerHTML = "";
    countries.forEach((element) => {
      if (element.includes(search.value) && search.value != "") {
        result.innerHTML += `<p>${element}</p>`;
      }
    });

    let ele = document.getElementById("result");

    ele = ele.childNodes;

    ele.forEach((element) => {
      element.addEventListener("click", () => {
        search.value = element.innerText;
        result.innerHTML = "";
      });
    });
  });

  console.log("one");
}

function choose_many(ele) {

  for (let i = 0; i < btn.length; i++) {
    btn[i].style = "background-color: antiquewhite";
  }

  ele.style = "background-color: rgb(41, 236, 236)";

  let res = "";

  search.value = "";

  search.addEventListener("input", () => {
    result.innerHTML = "";

    let str = search.value;
    let i  = str.length;
    for( i = i-1;i>=0;i--){
      console.log(i);
      if(str.charAt(i) == " " || str.charAt(i) == ","){
        break;
      }
    }

    str = str.slice(i+1);

    console.log(str);

    countries.forEach((element) => {
      if (element.includes(str) && search.value != "") {
        result.innerHTML += `<p>${element}</p>`;
      }
    });

    let ele = document.getElementById("result");

    

    ele = ele.childNodes;

    ele.forEach((element) => {
      element.addEventListener("click", () => {
        res += element.innerText + ","
        search.value = res;
        result.innerHTML = "";
      });
    });
  });
}
