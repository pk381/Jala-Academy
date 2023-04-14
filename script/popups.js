
let btn = document.getElementsByClassName("pop-btn");

for(let i = 0;i<btn.length;i++){

    btn[i].addEventListener("click", ()=>{

        switch(i){
            case 0: window.open("https://www.google.com/", "", "width=250,height=300,left=100");
            document.getElementById("name").innerText = "";

            break;

            case 1: window.open("https://www.google.com/", "", "width=250,height=300,left=400");
            document.getElementById("name").innerText = "";

            break;

            case 2: window.open("https://www.google.com/", "", "width=250,height=300,left=650");
            document.getElementById("name").innerText = "";

            break;

            case 3: window.open(window.location.href, "", "width=250,height=300,left=100");
            document.getElementById("name").innerText = "";

            break;

            case 4: window.open(window.location.href, "");
            document.getElementById("name").innerText = "";

            break;

            case 5: inwindo();
            document.getElementById("name").innerText = "";

            break;

            case 6: alert("This is an alert box!");
            document.getElementById("name").innerText = "";

            break;

            case 7: confirm("Confirm Message Box");
            document.getElementById("name").innerText = "";

            break;

            case 8: let name = prompt("Enter Your Name","JALA Academy- A Place to find your Dream Job");
                    document.getElementById("name").innerText = name;
            break;
        }
    });
}

function inwindo(){

    let pop = document.getElementsByClassName("in-window");

    console.log(pop[0]);
    pop[0].style.display = "flex";

    let btn = document.getElementsByClassName("cancle");

    for(let i = 0; i<btn.length;i++){

        btn[i].addEventListener("click", ()=>{

            pop[0].style.display = "none";
        })
    }


}