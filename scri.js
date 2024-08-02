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
    
