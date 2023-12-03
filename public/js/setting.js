let iconeMenu = document.getElementById("menuLink");
let menuAside = document.getElementById("menuAside");
function viewLateralBar(){

if(menuAside.style.display == "none"){
    menuAside.style.position = "absolute";
    menuAside.style.width="250px";
    menuAside.style.display = "block";
}else if(menuAside.style.display == "block"){
    menuAside.style.display ="none";

}
else{
    menuAside.style.display ="none";
}

}

