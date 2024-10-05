function toggleMenu() {
    var menu = document.getElementById("navbar-menu");
    menu.classList.toggle("show");
}


document.addEventListener("DOMContentLoaded", function() {
    const heading = document.querySelector('.fall-animation');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                heading.classList.add('animate'); 
                observer.unobserve(heading); 
            }
        });
    }, {
        threshold: 0.5 
    });

    observer.observe(heading);
});



document.addEventListener("DOMContentLoaded", function() {
    const heading = document.querySelector('.fallr-animation');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                heading.classList.add('animate'); 
                observer.unobserve(heading); 
            }
        });
    }, {
        threshold: 1 
    });

    observer.observe(heading);
});
