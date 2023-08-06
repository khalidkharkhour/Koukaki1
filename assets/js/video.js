

// Lorsque la page a terminé de charger
window.onload = function() {
 let video = document.getElementById('backgroundVideo');
  
  // Attachez un gestionnaire d'événement pour lancer la lecture de la vidéo lorsque l'utilisateur clique n'importe où sur la bannière
  document.querySelector('.banner').addEventListener('click', function() {
      video.play();
  });
};


