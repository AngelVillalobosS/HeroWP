document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                // Scroll suave a la sección
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Agregar animación bounce
                targetElement.classList.add('animated-bounce');
                setTimeout(() => {
                    targetElement.classList.remove('animated-bounce');
                }, 1000); // Duración de la animación (1s)
            }
        });
    });
});
