


// This code will not throw an error because jQuery is 3.0 or newer

/* window.addEventListener("DOMContentLoaded", function() {
    // Chargez tous les scripts avec l'attribut defer
    const scripts = document.querySelectorAll("script[defer]")
    for (const i = 0 i < scripts.length i++) {
      scripts[i].addEventListener("load", function() {
        // Le script est chargé
      })
    }
  })*/
 
  
const flotationAmplitude = 70 

window.addEventListener('scroll', () => {
    const scrollContainer = document.querySelector('.scroll-container ')
    const scrollTop = window.scrollY
    const parallaxOffset = scrollTop * 0.5

    const translateY = `calc(-50% + ${flotationAmplitude}px + ${parallaxOffset}px)`

    scrollContainer.style.transform = `translate(0, ${translateY})`
})


  jQuery(document).ready(function($) {
    $(".modal-open").click(function() {
        console.log("modal-trigger cliqué")
        $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000)
        $(".modal__content").toggleClass("open")
        $(".modal__burger").toggleClass("close")
    })

    $("a").click(function() {
        if ($(".modal__content").hasClass("open")) {
            $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000)
            $(".modal__content").removeClass("open")
            $(".modal__burger").removeClass("close")
        }
    })
})

 
  // Fonction pour vérifier si un élément est visible dans la fenêtre
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect()
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    )
  }
  
  // Fonction pour gérer la visibilité des éléments
  function handleVisibility() {
    const elements = document.querySelectorAll('.title.visible')
    elements.forEach(function(element) {
      if (isElementInViewport(element)) {
        element.classList.add('visible')
        element.classList.remove('title') // Supprimez la classe invisible
      }
    })
  }
  
  // Écouter les événements de défilement et de redimensionnement pour gérer la visibilité
  window.addEventListener('scroll', handleVisibility)
  window.addEventListener('resize', handleVisibility)
  
  // Appeler la fonction une fois au chargement initial
  handleVisibility()
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

})
/*
const animatedElements = document.querySelectorAll('.story__article::after, .story h2::after, #studio h2::before, #studio h2::after, figure > .flower, .site-footer ul::after')
let scrollSpeed = 1

function updateAnimationSpeed() {
  scrollSpeed = 1 + window.scrollY * 0.01

  console.log('Scroll Speed:', scrollSpeed)  // Affiche la vitesse de défilement dans la console

  animatedElements.forEach(element => {
    const animationDuration = 15 / scrollSpeed
    element.style.animationDuration = `${animationDuration}s`

    console.log('Element:', element, 'Animation Duration:', animationDuration)  // Affiche les détails de l'élément et de la durée de l'animation
  })
}

window.addEventListener('scroll', updateAnimationSpeed)*/


/*
jQuery(document).ready(function($) {
  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5
  }

  const observer = new IntersectionObserver(handleIntersection, options)

  const stories = document.querySelectorAll(".title")

  stories.forEach(story => {
    observer.observe(story)
  })

  function handleIntersection(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active")
      } else {
        entry.target.classList.remove("active")
      }
    })
  }
})*/

/*
  document.addEventListener("DOMContentLoaded", function() {
    const elementsToAnimate = document.querySelectorAll(".title, .nomination > span, .nomination > h3")

    elementsToAnimate.forEach(element => {
      let animationTimeout // Pour stocker l'ID du timeout

      element.addEventListener("mouseenter", () => {
        console.log("Animation déclenchée pour :", element)

        clearTimeout(animationTimeout) // Efface le timeout précédent, si présent

        element.style.animation = "none" // Désactive l'animation existante

        // Réinitialise l'opacité et la translation
        element.style.opacity = "0"
        element.style.transform = "translateY(200px)"

        // Démarre une nouvelle animation progressive avec des étapes intermédiaires
        element.style.transition = "opacity 2s, transform 2s"

        setTimeout(() => {
          element.style.opacity = "0.2"
          element.style.transform = "translateY(150px)"
        }, 0)

        setTimeout(() => {
          element.style.opacity = "0.4"
          element.style.transform = "translateY(100px)"
        }, 1000)

        setTimeout(() => {
          element.style.opacity = "0.6"
          element.style.transform = "translateY(50px)"
        }, 2000)

        setTimeout(() => {
          element.style.opacity = "0.8"
          element.style.transform = "translateY(25px)"
        }, 3000)

        setTimeout(() => {
          element.style.opacity = "1"
          element.style.transform = "translateY(0)"
        }, 4000)
      })

      element.addEventListener("mouseleave", () => {
        // Si le titre est survolé, l'animation reste immobile
        animationTimeout = setTimeout(() => {
          element.style.transition = "" // Réinitialise les transitions
          element.style.animation = "" // Réactive l'animation
        }, 4000)
      })
    })
  })*/

// Fonction pour vérifier si un élément est visible à l'écran
function isElementVisible(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

// Fonction pour activer l'animation lorsque l'élément devient visible
function handleScrollAnimation() {
  const titleElement = document.querySelector('#title');
  
  if (isElementVisible(titleElement)) {
    titleElement.style.animation = 'openclose 1s linear forwards';
  }
}
/*
const fadeIns = document.querySelectorAll('.fade-in');

    function checkFadeIns() {
      fadeIns.forEach(fadeIn => {
        const fadeInPosition = fadeIn.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (fadeInPosition < windowHeight) {
          fadeIn.style.animation = "fadeInAnimation 1s ease-in-out 1s";
        }
      });
    }

    window.addEventListener('scroll', checkFadeIns);*/
   