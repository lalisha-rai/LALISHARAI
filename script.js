document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;
    const intervalTime = 5000; // Time in milliseconds for each slide to be shown
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = 'flex';
            } else {
                slide.style.display = 'none';
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }

    // Initially show the first slide
    showSlide(currentIndex);

    // Set interval for automatic slide change
    setInterval(nextSlide, intervalTime);
});
const popup = document.getElementById('popup');
    const closePopup = document.getElementById('close-popup');

    // Show the popup after 10 seconds
    setTimeout(() => {
      popup.style.display = 'flex';
    }, 10000);

    // Close the popup when the close button is clicked
    closePopup.addEventListener('click', () => {
      popup.style.display = 'none';
    });

    // Close the popup when clicking outside of it
    window.addEventListener('click', (event) => {
      if (event.target === popup) {
        popup.style.display = 'none';
      }
    });

    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;

    // Function to toggle theme
    function toggleTheme() {
        body.classList.toggle('dark-mode');
        const isDarkMode = body.classList.contains('dark-mode');
        localStorage.setItem('dark-mode', isDarkMode);
        themeToggle.className = isDarkMode ? 'bx bx-sun theme-toggle' : 'bx bx-moon theme-toggle';
        updateColors();
    }

    // Function to update colors based on theme
    function updateColors() {
        document.documentElement.style.setProperty('--bg-color', getComputedStyle(document.body).getPropertyValue('--bg-color'));
        document.documentElement.style.setProperty('--text-color', getComputedStyle(document.body).getPropertyValue('--text-color'));
        document.documentElement.style.setProperty('--nav-bg-color', getComputedStyle(document.body).getPropertyValue('--nav-bg-color'));
        document.documentElement.style.setProperty('--nav-text-color', getComputedStyle(document.body).getPropertyValue('--nav-text-color'));
        document.documentElement.style.setProperty('--nav-hover-bg-color', getComputedStyle(document.body).getPropertyValue('--nav-hover-bg-color'));
        document.documentElement.style.setProperty('--nav-hover-text-color', getComputedStyle(document.body).getPropertyValue('--nav-hover-text-color'));
        document.documentElement.style.setProperty('--container-bg-color', getComputedStyle(document.body).getPropertyValue('--container-bg-color'));
        document.documentElement.style.setProperty('--container-shadow-color', getComputedStyle(document.body).getPropertyValue('--container-shadow-color'));
        document.documentElement.style.setProperty('--footer-bg-color', getComputedStyle(document.body).getPropertyValue('--footer-bg-color'));
        document.documentElement.style.setProperty('--footer-text-color', getComputedStyle(document.body).getPropertyValue('--footer-text-color'));
        document.documentElement.style.setProperty('--social-icon-color', getComputedStyle(document.body).getPropertyValue('--social-icon-color'));
        document.documentElement.style.setProperty('--social-icon-hover-color', getComputedStyle(document.body).getPropertyValue('--social-icon-hover-color'));
    }

    // Load saved theme preference
    document.addEventListener('DOMContentLoaded', () => {
        const savedMode = localStorage.getItem('dark-mode');
        if (savedMode === 'true') {
            body.classList.add('dark-mode');
            themeToggle.className = 'bx bx-sun theme-toggle';
        } else {
            body.classList.remove('dark-mode');
            themeToggle.className = 'bx bx-moon theme-toggle';
        }
        updateColors();
    });

    // Event listener for theme toggle
    themeToggle.addEventListener('click', toggleTheme);


