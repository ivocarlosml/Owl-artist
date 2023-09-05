let btn = document.getElementById("btnTurnMode");
let posterP = document.getElementsByClassName(".imagem-container");
let header = document.getElementById("header");

function turnColorPage(){
document.body.style.backgroundColor="#eef6ff";
//document.footer.style.backgroundColor="#eef6ff";
header.style.backgroundColor="white";
header.div.style.color="black";
posterP.style.boxShadow="0 30px 0px rgb(108 107 107)"
}
