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

let infoBar = document.getElementById("infoBar");
let infoBar2 = document.getElementById("infoBar2");
let infoBar3 = document.getElementById("infoBar3");
let infoBar4 = document.getElementById("infoBar4");
let carrosel = document.getElementById("carrosel");
//let infoBar = document.getElementsByClassName("infoBar");

let aTag = document.querySelector("nameAutor");


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
   suporteIcon.src ="assets/suporteB.png";
   addIcon.src ="assets/criarB.png";
   ajudaIcon.src ="assets/configB.png";
   homeIcon.src ="assets/homeB.png";


  carrosel.style.backgroundColor="#d9d3d3";
        
   infoBar.style.backgroundColor="#f2f2f2";
   infoBar.style.color="black";

   infoBar2.style.backgroundColor="#f2f2f2";
   infoBar2.style.color="black";

   infoBar3.style.backgroundColor="#f2f2f2";
   infoBar3.style.color="black";
   footer.style.color="black";
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
       suporteIcon.src ="assets/suporte.png";
       addIcon.src ="assets/criar.png";
       ajudaIcon.src ="assets/config.png";
       homeIcon.src ="assets/menu.png";
       
       carrosel.style.backgroundColor="black";
        
       infoBar.style.backgroundColor="black";
       infoBar.style.color="white";
    
       infoBar2.style.backgroundColor="black";
       infoBar2.style.color="white";
    
       infoBar3.style.backgroundColor="black";
       infoBar3.style.color="white";
       footer.style.color="white";
       
       
    control = 0;
    }


}
