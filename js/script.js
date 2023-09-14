let postsPrincipais = document.getElementById("postP");

let i = 0;

setInterval(function(){
    
    let listaDeposts = [
        "assets/R.jpg",
        
        "https://wallpapercave.com/wp/wp9376389.jpg",

        /*"https://th.bing.com/th/id/R.bd25fe33dbd21db91249a661f3e4ecd3?rik=zALwgy84d1Ca%2fg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-L91Zp81c47Q%2fUDV1uQL0iTI%2fAAAAAAAACk4%2fP1UcSbUd6Hw%2fs1600%2fIMG_6892.jpg&ehk=jHMPm4zZVkyRpkPfGwVJ7K7Ex6sBJOrSr6sr9CR2TQM%3d&risl=&pid=ImgRaw&r=0",

        "https://i.pinimg.com/originals/4a/44/57/4a44575fff6f90d6e337bd98ea3a78f2.jpg",

        "https://www.hdwallpapers.in/download/demon_slayer_kyojuro_rengoku_hd_anime-2560x1440.jpg"*/
    ];
    
    if(i == (listaDeposts.length-1)){
        
        
        postsPrincipais.src= listaDeposts[i] ;
        i = 0;
        
        
        postsPrincipais.classList.toggle('opacityAnimation'); 
    }else{
         if(!(i%2==0)){
            postsPrincipais.classList.add('opacityAnimation'); 
         }
        postsPrincipais.src= listaDeposts[i] ;

        i++;
        console.log("mecheu no 1 ou demais...");
        
    }
    postsPrincipais.classList.toggle('opacityAnimation'); 
},3000);

