let postsPrincipais = document.getElementById("postP");
let i = 0;

setInterval(function(){
    postsPrincipais.classList.toggle('opacityAnimation');
    let listaDeposts = [
        "R.jpg","https://wallpapercave.com/wp/wp9376389.jpg","https://th.bing.com/th/id/R.bd25fe33dbd21db91249a661f3e4ecd3?rik=zALwgy84d1Ca%2fg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-L91Zp81c47Q%2fUDV1uQL0iTI%2fAAAAAAAACk4%2fP1UcSbUd6Hw%2fs1600%2fIMG_6892.jpg&ehk=jHMPm4zZVkyRpkPfGwVJ7K7Ex6sBJOrSr6sr9CR2TQM%3d&risl=&pid=ImgRaw&r=0"];
    
    if(i == (listaDeposts.length-1)){
        postsPrincipais.classList.toggle('opacityAnimation');
        
        postsPrincipais.src= listaDeposts[i] ;
        i = 0;
        
        
    }else{
        postsPrincipais.classList.toggle('opacityAnimation');
        
        
        postsPrincipais.src= listaDeposts[i] ;
        i++;
        
    }

},3000);

