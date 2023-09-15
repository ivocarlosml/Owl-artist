const profiles = [
    
    { foto: "https://th.bing.com/th/id/R.83b4b6adf8d0aac374bbc328e900e0a8?rik=Eh7CFxXL33oYhQ&pid=ImgRaw&r=0&sres=1&sresct=1",
    verified: true,
    name:"Walcyr Carrasco"

    },

  { foto: "https://th.bing.com/th/id/OIP.j-DtsLxPPLNGKDkBw_NzywHaHa?pid=ImgDet&rs=1",
    verified: true,
    name:"Rita Lee"
    },

  { foto: "https://th.bing.com/th/id/OIP.G17aZUc4wpmif7Xvh6lUwgHaE8?pid=ImgDet&rs=1",
    verified: true,
    name:"Fernanda Montenegro"
    },
    { foto: "https://th.bing.com/th/id/R.4a5c5487e0924fbb0d1168b553ce8d57?rik=3cX6dF2pzELPVw&pid=ImgRaw&r=0",
     verified: true,
     name:"Chico Buarque"
     },

    { foto: "https://th.bing.com/th/id/R.8503340f1830ab23fb83409d1e70715e?rik=h%2fn7SyuXWIFaYA&riu=http%3a%2f%2fwww.midiorama.com%2fwp-content%2fuploads%2f2016%2f08%2ftais-araujo.jpg&ehk=IMttlbwi6wZQoXvTOSP0V434NuuFHt4vcBtAK8%2f%2fCUE%3d&risl=&pid=ImgRaw&r=0",
     verified: true,
     name:"Agatha Martins"
     },

    { foto: "https://s2.glbimg.com/c6j-JG3xik53VZ5-jpKn21G0HwQ=/0x0:591x594/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2018/n/9/C41xxLSZykAPmGiBWL4g/jao3.jpg",
     verified: true,
     name:"Jao"
     },

     { foto: "https://static.quizur.com/i/b/55b396461a0ee5.2778355955b39645e26f31.66814494.jpg",
     verified: true, 
     name:"Thiago Bonfim"
    },
    { foto: "https://th.bing.com/th/id/R.a5d6124fad8901e99bdf40228833d365?rik=UVDl%2b%2fCKm1YGPQ&pid=ImgRaw&r=0",
     verified: false,
     name:"Marta S. Rocha "
     },

    { foto: "https://th.bing.com/th/id/R.14e53022c16b75b9a383e81f3bd1ea08?rik=P2qhl0018tns2g&riu=http%3a%2f%2fwww.parkwestgallery.com%2fwp-content%2fuploads%2f2013%2f04%2fBritto07_Ann-Johansson1.jpg&ehk=RWOgL6sShgyH%2f5R%2bBlBqt2GMM6imUZHnAjWjiAHaO8s%3d&risl=&pid=ImgRaw&r=0",
     verified: true,
     name:"Romero Brito"
     },

    { foto: "https://th.bing.com/th/id/OIP.Tc8es8B-fmJqoEa795dHrwHaE-?pid=ImgDet&rs=1",
     verified: true,
     name:"Miguel Bernardeau"
     },

    { foto: "https://th.bing.com/th/id/OIP._vVIQXb7r-gF1nsFBqZahwHaE7?pid=ImgDet&rs=1",
     verified: true,
     name:"Iza"
     },

    { foto: "https://studiosol-a.akamaihd.net/tb/letras-blog/wp-content/uploads/2019/05/515e418-melim.jpg",
     verified: true,
     name:"Melim"
     }
    // ...mais perfis
  ];
  
  const carousel = document.querySelector('.carousel');
  const leftArrow = document.querySelector('.arrow.left');
  const rightArrow = document.querySelector('.arrow.right');
  
  let startIndex = 0;
  
  function displayProfiles() {
    carousel.innerHTML = '';
    for (let i = startIndex; i < startIndex+3; i++) {
      
      if (i >= profiles.length) break;
      const profile = profiles[i];
      const profileElement = document.createElement('img');
      let divArtist = document.createElement('div');
      const nameCamp = document.createElement('span');
      let nameAutor = document.createElement('a');
      divArtist.className = "divArtist"; 
      profileElement.className = 'profile';
      nameCamp.className = 'nameAutor';
      nameCamp.name = 'nameAutor';
      
      profileElement.src = profiles[i]["foto"];
      nameAutor.innerHTML=profiles[i]["name"];
      nameAutor.href="perfil.html";
      nameAutor.style.textDecoration="none";
      nameAutor.style.color="white";
       
      
      if (profile.verified) {
        const verifiedIcon = document.createElement('div');
        verifiedIcon.className = 'verified';
        profileElement.appendChild(verifiedIcon);
      }
      
      
      
      nameCamp.appendChild(nameAutor);
      divArtist.appendChild(profileElement);
      divArtist.appendChild(nameCamp);
      carousel.appendChild(divArtist);
    }
  }

  
  displayProfiles();
  
  leftArrow.addEventListener('click', () => {
    startIndex = Math.max(startIndex - 3, 0);
    displayProfiles();
  });
  
  rightArrow.addEventListener('click', () => {
    startIndex = Math.min(startIndex + 3, profiles.length - 3);
    displayProfiles();
  });