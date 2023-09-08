let btn = document.getElementById("btnTurnMode");
let nomeUser = document.getElementById("nome");
let tipoArte = document.getElementById("tipoDeArte");
let posterP = document.getElementsByClassName(".imagem-container");
let header = document.getElementById("header");
let footer = document.getElementsByTagName("footer")[0];
let control = 0;
function turnColorPage(){
    
    if(control == 0){
    document.body.style.backgroundColor="#f2f2f2";
    //document.footer.style.backgroundColor="#eef6ff";
    header.style.backgroundColor="#f2f2f2";
    nomeUser.style.Color="#f2f2f2";
    footer.style.backgroundColor="#f2f2f2";
    //header.div.style.color="black";
    //posterP.style.boxShadow="0 30px 0px rgb(108 107 107)";
    control = 1;
    }else if(control == 1){
    document.body.style.backgroundColor="black";
    nomeUser.style.Color="black";
    //document.footer.style.backgroundColor="#eef6ff";
    header.style.backgroundColor="black";
    footer.style.backgroundColor="black";
    //header.div.style.color="white";
    //posterP.style.boxShadow="0 30px 0px rgb(108 107 107)";
    control = 0;
    }


}
