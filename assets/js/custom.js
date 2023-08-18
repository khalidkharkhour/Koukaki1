/**
 * Parallax Effect for Scroll Container
 */
const flotationAmplitude = 70;

window.addEventListener('scroll', () => {
  const scrollContainer = document.querySelector('.scroll-container ');
  const scrollTop = window.scrollY;
  const parallaxOffset = scrollTop * 0.5;

  const translateY = `calc(-50% + ${flotationAmplitude}px + ${parallaxOffset}px)`;

  scrollContainer.style.transform = `translate(0, ${translateY})`;
});

/**
 * Modal Functionality
 */
jQuery(document).ready(function ($) {
  $(".modal-open").click(function () {
    console.log("modal-trigger clicked");
    $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000);
    $(".modal__content").toggleClass("open");
    $(".modal__burger").toggleClass("close");
  });

  $("a").click(function () {
    if ($(".modal__content").hasClass("open")) {
      $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000);
      $(".modal__content").removeClass("open");
      $(".modal__burger").removeClass("close");
    }
  });
});

/**
 * Check if an element is visible in the viewport
 */
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

/**
 * Handle element visibility on scroll and resize
 */
function handleVisibility() {
  const elements = document.querySelectorAll('.title.visible');
  elements.forEach(function (element) {
    if (isElementInViewport(element)) {
      element.classList.add('visible');
      element.classList.remove('title'); // Remove the invisible class
    }
  });
}

// Listen for scroll and resize events to handle visibility
window.addEventListener('scroll', handleVisibility);
window.addEventListener('resize', handleVisibility);

// Call the function once on initial load
handleVisibility();

/**
 * Initialize Swiper for the slider
 */
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

/**
 * Scroll Animation for Specific Elements
 * @param {*} element 
 * @returns 
 */
function isElementVisible(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

function handleScrollAnimation() {
  const titleElement = document.querySelector('#title', '#characters span');

  if (isElementVisible(titleElement)) {
    titleElement.style.animation = 'openclose 1s linear forwards';
  }
}
window.addEventListener('scroll', function() {
  const clouds = document.querySelectorAll('.cloud');
  const scrollPosition = window.scrollY;

  clouds.forEach(function(cloud) {

    const displacement = scrollPosition * 0.5; 

    
    cloud.style.transform = `translateX(${displacement}px)`;
  });
});