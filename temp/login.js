document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.carousel-track');
    const indicators = document.querySelectorAll('.indicator');
    let currentIndex = 0;
    const slideCount = document.querySelectorAll('.carousel-box').length;

    // Function to move carousel to specified slide
    function goToSlide(index) {
        track.style.transform = `translateX(-${index * 33.333}%)`;

        // Update indicators
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });

        currentIndex = index;
    }

    // Set up click events for indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Auto-rotate carousel every 3 seconds
    setInterval(() => {
        const nextIndex = (currentIndex + 1) % slideCount;
        goToSlide(nextIndex);
    }, 3000);

    // Initialize at first slide
    goToSlide(0);
});