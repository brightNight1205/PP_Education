
        
        let rating = 0;  // Store the rating
        let favorites = 0;  // Store the number of favorites
        
        // Get all star elements
        const stars = document.querySelectorAll('.star');
        
        // Add click event to each star
        stars.forEach(star => {
            star.addEventListener('click', () => {
                const starId = parseInt(star.getAttribute('data-id'));
                rating = starId;
                updateStars();
                calculateAverage();
            });
        });
        
        // Update the color of the stars based on the rating
        function updateStars() {
            stars.forEach(star => {
                const starId = parseInt(star.getAttribute('data-id'));
                if (starId <= rating) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }
        
        // Calculate and update the average rating and favorites count
        function calculateAverage() {
            // In this example, we assume the rating can be between 1 to 5
            const totalRatings = 5; // You can adjust this based on actual ratings from users
            const average = rating; // Here it's just the selected rating for simplicity
            document.getElementById('average-rating').textContent = average;
            document.getElementById('favorites-count').textContent = ++favorites;
        }
        
        const ratingContainers = document.querySelectorAll('.rating-container');
        
        ratingContainers.forEach(container => {
            const stars = container.querySelectorAll('.star'); 
            const ratingText = container.querySelector('.rating-text');
            
            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    // Reset all stars
                    stars.forEach(s => s.classList.remove('rated'));
        
                    // Highlight the selected stars
                    for (let i = 0; i <= index; i++) {
                        stars[i].classList.add('rated');
                    }
        
                    // Update the rating text
                    const rating = index + 1; 
                    ratingText.textContent = `${rating}/5`; 
                });
            });
        });
        
        // Add event listeners to all favorite icons
        const favoriteIcons = document.querySelectorAll('.favorite-icon');
        
        favoriteIcons.forEach(icon => {
            icon.addEventListener('click', () => {
                icon.classList.toggle('favorited'); 
                if (icon.classList.contains('favorited')) {
                    console.log('Added to favorites');
                    calculateAverage();
                } else {
                    console.log('Removed from favorites');
                    calculateAverage();
                }
            });
        });

        
    