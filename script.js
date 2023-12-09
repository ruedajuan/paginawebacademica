document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.carousel');
    const items = document.querySelectorAll('.carousel-item');

    let index = 0;

    function nextSlide() {
        index = (index + 1) % items.length;
        updateCarousel();
    }

    function prevSlide() {
        index = (index - 1 + items.length) % items.length;
        updateCarousel();
    }

    function updateCarousel() {
        const offset = -index * 100;
        carousel.style.transform = `translateX(${offset}%)`;
    }

    document.querySelector('.next-button').addEventListener('click', nextSlide);
    document.querySelector('.prev-button').addEventListener('click', prevSlide);
});
