
    document.addEventListener("DOMContentLoaded", function () {
    const boxes = document.querySelectorAll(".service-box");

    const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
    if (entry.isIntersecting) {
    entry.target.classList.add("visible");
    observer.unobserve(entry.target); // Optional: triggers only once
}
});
}, {
    threshold: 0.1 // Trigger when 10% of the element is visible
});

    boxes.forEach(box => {
    observer.observe(box);
});
});

/*  Testimonial */

    document.addEventListener('DOMContentLoaded', function() {
        const testimonialBoxes = document.querySelectorAll('.testimonial-box');
        const prevArrow = document.querySelector('.fi-sr-angle-left') || document.querySelector('.prev-arrow');
        const nextArrow = document.querySelector('.fi-sr-angle-right') || document.querySelector('.next-arrow');

        let currentIndex = 0;
        const totalTestimonials = testimonialBoxes.length;

        // Initialize: hide all except the first
        testimonialBoxes.forEach((box, index) => {
            if (index !== 0) {
                box.style.display = 'none';
            }
        });

        // Function to show a specific testimonial
        function showTestimonial(index) {
            testimonialBoxes.forEach(box => {
                box.style.display = 'none';
            });

            testimonialBoxes[index].style.opacity = '0';
            testimonialBoxes[index].style.display = 'flex';

            setTimeout(() => {
                testimonialBoxes[index].style.transition = 'opacity 0.5s ease';
                testimonialBoxes[index].style.opacity = '1';
            }, 50);
        }

        // Function to move to the next slide
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalTestimonials;
            showTestimonial(currentIndex);
        }

        // Function to move to the previous slide
        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalTestimonials) % totalTestimonials;
            showTestimonial(currentIndex);
        }

        // Add click event listeners
        prevArrow.addEventListener('click', function() {
            prevSlide();
            resetInterval();
        });

        nextArrow.addEventListener('click', function() {
            nextSlide();
            resetInterval();
        });

        // Set auto-slide interval to scroll left to right
        let slideInterval = setInterval(nextSlide, 6000);

        // Reset interval after manual navigation
        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 6000);
        }
    });

    // -------------- POP OUT USER DASHBOARD ------///



