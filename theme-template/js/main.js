document.addEventListener('DOMContentLoaded', function () {
    const swipeboxWrapper = document.querySelector('.swipebox-wrapper');
    const swipeboxes = document.querySelectorAll('.swipebox');
    const dots = document.querySelectorAll('.dot');

    let currentIndex = 0;

    function showReview(index) {
        const newPosition = -index * 100 + '%';
        swipeboxWrapper.style.transform = 'translateX(' + newPosition + ')';
        updateDots(index);
    }

    function updateDots(index) {
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
    }

    function nextReview() {
        currentIndex = (currentIndex + 1) % swipeboxes.length;
        showReview(currentIndex);
    }

    // Trigger the next slide every 5 seconds
    setInterval(nextReview, 5000);

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            showReview(i);
            currentIndex = i;
        });
    });

    showReview(currentIndex);
});