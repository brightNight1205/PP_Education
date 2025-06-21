// document.addEventListener('DOMContentLoaded', () => {
//     // Initialize Flowbite dropdowns (from previous homepage)
//     document.querySelectorAll('.dropdown').forEach(dropdown => {
//         const trigger = dropdown.querySelector('a');
//         const content = dropdown.querySelector('.dropdown-content');
//         trigger.addEventListener('mouseenter', () => content.classList.remove('hidden'));
//         dropdown.addEventListener('mouseleave', () => content.classList.add('hidden'));
//     });

//     // Poll for university stats updates every 5 seconds
//     const updateUniversityStats = () => {
//         document.querySelectorAll('.university-card').forEach(card => {
//             const universityId = card.dataset.universityId;
//             fetch(`/university/${universityId}/stats`, {
//                 headers: {
//                     'Accept': 'application/json',
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
//                 },
//             })
//             .then(response => response.json())
//             .then(data => {
//                 const ratingElement = document.getElementById(`rating-${universityId}`);
//                 const favoriteElement = document.getElementById(`favorite-${universityId}`);
//                 if (ratingElement) {
//                     ratingElement.innerHTML = `<i class="fas fa-star text-yellow-400 mr-1"></i> Average Rating: ${data.average_rating}/5`;
//                 }
//                 if (favoriteElement) {
//                     favoriteElement.innerHTML = `<i class="fas fa-heart text-red-500 mr-1"></i> Favorites: ${data.favorite_count}`;
//                 }
//             })
//             .catch(error => console.error('Error fetching stats:', error));
//         });
//     };

//     // Start polling
//     setInterval(updateUniversityStats, 5000);
//     updateUniversityStats(); // Initial fetch
// });