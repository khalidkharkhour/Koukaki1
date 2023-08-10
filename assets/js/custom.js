


// This code will not throw an error because jQuery is 3.0 or newer

/* window.addEventListener("DOMContentLoaded", function() {
    // Chargez tous les scripts avec l'attribut defer
    const scripts = document.querySelectorAll("script[defer]");
    for (const i = 0; i < scripts.length; i++) {
      scripts[i].addEventListener("load", function() {
        // Le script est chargé
      });
    }
  });*/
 
  
const flotationAmplitude = 70; 

window.addEventListener('scroll', () => {
    const scrollContainer = document.querySelector('.scroll-container ');
    const scrollTop = window.scrollY;
    const parallaxOffset = scrollTop * 0.5;

    const translateY = `calc(-50% + ${flotationAmplitude}px + ${parallaxOffset}px)`;

    scrollContainer.style.transform = `translate(0, ${translateY})`;
});


  jQuery(document).ready(function($) {
    $(".modal-open").click(function() {
        console.log("modal-trigger cliqué");
        $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000);
        $(".modal__content").toggleClass("open");
        $(".modal__burger").toggleClass("close");
    });

    $("a").click(function() {
        if ($(".modal__content").hasClass("open")) {
            $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000);
            $(".modal__content").removeClass("open");
            $(".modal__burger").removeClass("close");
        }
    });
});

 
  // Fonction pour vérifier si un élément est visible dans la fenêtre
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Fonction pour gérer la visibilité des éléments
  function handleVisibility() {
    const elements = document.querySelectorAll('.title.visible');
    elements.forEach(function(element) {
      if (isElementInViewport(element)) {
        element.classList.add('visible');
        element.classList.remove('title'); // Supprimez la classe invisible
      }
    });
  }
  
  // Écouter les événements de défilement et de redimensionnement pour gérer la visibilité
  window.addEventListener('scroll', handleVisibility);
  window.addEventListener('resize', handleVisibility);
  
  // Appeler la fonction une fois au chargement initial
  handleVisibility();
  const swiper = new Swiper('.swiper-container', {
    spaceBetween: 60,
    speed: 1000,
    autoplay: {
        delay: 250,
    },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

});
/*
const animatedElements = document.querySelectorAll('.story__article::after, .story h2::after, #studio h2::before, #studio h2::after, figure > .flower, .site-footer ul::after');
let scrollSpeed = 1;

function updateAnimationSpeed() {
  scrollSpeed = 1 + window.scrollY * 0.01;

  console.log('Scroll Speed:', scrollSpeed);  // Affiche la vitesse de défilement dans la console

  animatedElements.forEach(element => {
    const animationDuration = 15 / scrollSpeed;
    element.style.animationDuration = `${animationDuration}s`;

    console.log('Element:', element, 'Animation Duration:', animationDuration);  // Affiche les détails de l'élément et de la durée de l'animation
  });
}

window.addEventListener('scroll', updateAnimationSpeed);*/

document.addEventListener("DOMContentLoaded", function () {
  const fadeInSection = document.querySelectorAll('.fade-in');
  const windowHeight = window.innerHeight;

  function checkFadeIn() {
      fadeInSection.forEach(section => {
          const sectionTop = section.getBoundingClientRect().top;
          
          if (sectionTop < windowHeight - 300) { // Ajustez ce seuil selon vos besoins
              section.classList.add('fade-in-active');
          }
      });
  }

  window.addEventListener('scroll', checkFadeIn);
  window.addEventListener('load', checkFadeIn);
  checkFadeIn(); // Appeler la fonction au chargement initial
});



