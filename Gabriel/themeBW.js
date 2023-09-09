let btn = document.getElementById("btnTurnMode");
let nomeUser = document.getElementById("nome");
let textoComSombra = document.getElementById("description");
let tipoArte = document.getElementById("tipoDeArte");
let posterP = document.getElementsByClassName(".imagem-container");
let header = document.getElementById("header");
let footer = document.getElementsByTagName("footer")[0];

let suporteIcon = document.getElementsByTagName("img")[1];
let addIcon = document.getElementsByTagName("img")[2];
let ajudaIcon = document.getElementsByTagName("img")[3];
let homeIcon = document.getElementsByTagName("img")[4];

//let infoBar = document.getElementById("infoBar");
let infoBar = document.getElementsByClassName("infoBar");

let scrollbar = document.documentElement.style;
let control = 0;
function turnColorPage(){
    
    if(control == 0){
    document.body.style.backgroundColor="#f2f2f2";
    header.style.backgroundColor="#f2f2f2";
    nomeUser.style.color="black";
    tipoArte.style.color="black";
    textoComSombra.style.background = "radial-gradient(white,transparent)";
    textoComSombra.style.color = "black";
    footer.style.backgroundColor="#f2f2f2";
    footer.style.color="black";
   suporteIcon.src ="suporteB.png";
   addIcon.src ="criarB.png";
   ajudaIcon.src ="configB.png";
   homeIcon.src ="homeB.png";

   scrollbar.setProperty("--scrollbar-color", "red");
  scrollbar.setProperty("--scrollbar-thumb-color", "blue");
        
   /*infoBar.style.backgroundColor="#f2f2f2";
   infoBar.style.color="black";*/
    control = 1;
    }else if(control == 1){
        document.body.style.backgroundColor="black";
        header.style.backgroundColor="black";
        nomeUser.style.color="#f2f2f2";
        tipoArte.style.color="#f2f2f2";
        textoComSombra.style.background = "radial-gradient(black,transparent)";
        textoComSombra.style.color = "#f2f2f2";
        footer.style.backgroundColor="black";
        footer.style.color="#f2f2f2";
       suporteIcon.src ="suporte.png";
       addIcon.src ="criar.png";
       ajudaIcon.src ="config.png";
       homeIcon.src ="menu.png";
       /*infoBar.style.backgroundColor="black";
       infoBar.style.color="white";*/
    control = 0;
    }


}
