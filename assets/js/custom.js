const flotationAmplitude = 70; 

window.addEventListener('scroll', () => {
    const scrollContainer = document.querySelector('.scroll-container ');
    const scrollTop = window.scrollY;
    const parallaxOffset = scrollTop * 0.5;

    const translateY = `calc(-50% + ${flotationAmplitude}px + ${parallaxOffset}px)`;

    scrollContainer.style.transform = `translate(0, ${translateY})`;
});

