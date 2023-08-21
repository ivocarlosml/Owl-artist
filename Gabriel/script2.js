const profiles = [
    { name: "Perfil 1", verified: true },
    { name: "Perfil 2", verified: false },
    { name: "Perfil 3", verified: true },
    { name: "Perfil 4", verified: true },
    { name: "Perfil 5", verified: true },
    { name: "Perfil 6", verified: true },
    { name: "Perfil 7", verified: true },
    { name: "Perfil 8", verified: true },
    { name: "Perfil 9", verified: true },
    { name: "Perfil 10", verified: true },
    { name: "Perfil 11", verified: true },
    { name: "Perfil 12", verified: true }
    // ...mais perfis
  ];
  
  const carousel = document.querySelector('.carousel');
  const leftArrow = document.querySelector('.arrow.left');
  const rightArrow = document.querySelector('.arrow.right');
  
  let startIndex = 0;
  
  function displayProfiles() {
    carousel.innerHTML = '';
    for (let i = startIndex; i < startIndex + 3; i++) {
      if (i >= profiles.length) break;
      const profile = profiles[i];
      const profileElement = document.createElement('div');
      profileElement.className = 'profile';
      profileElement.innerHTML = profile.name;
      if (profile.verified) {
        const verifiedIcon = document.createElement('div');
        verifiedIcon.className = 'verified';
        profileElement.appendChild(verifiedIcon);
      }
      carousel.appendChild(profileElement);
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