

// Lorsque la page a terminé de charger
window.onload = function() {
 let video = document.getElementById('backgroundVideo');
  
  // Attachez un gestionnaire d'événement pour lancer la lecture de la vidéo lorsque l'utilisateur clique n'importe où sur la bannière
  document.querySelector('.banner').addEventListener('click', function() {
      video.play();
  });
};
document.addEventListener('DOMContentLoaded', function() {
  const titles = document.querySelectorAll('.title');
  const sections = document.querySelectorAll('section[id]');

  function isElementVisible(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
  }

  function handleAnimation() {
    titles.forEach((title, index) => {
      if (isElementVisible(title)) {
        title.classList.add('active');
      } else {
        title.classList.remove('active');
      }
    });

    sections.forEach((section, index) => {
      if (isElementVisible(section)) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    });
  }

  window.addEventListener('scroll', handleAnimation);

  titles.forEach((title, index) => {
    title.addEventListener('mouseenter', () => {
      title.classList.add('active');
      sections[index].classList.add('active');
    });

    title.addEventListener('mouseleave', () => {
      title.classList.remove('active');
      sections[index].classList.remove('active');
    });
  });
});
