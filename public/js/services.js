



function toggleSocialIcons() {
    const socialIcons = document.querySelector("#expandable-bubble .social-icons");
    socialIcons.style.display = socialIcons.style.display === "flex" ? "none" : "flex";
}
 
 // Show/Hide Scroll to Top Button
 const scrollToTop = document.getElementById("scrollToTop");

 window.addEventListener("scroll", () => {
     if (window.scrollY > 200) {
         scrollToTop.classList.add("show");
     } else {
         scrollToTop.classList.remove("show");
     }
 });

 // Scroll to Top Functionality
 scrollToTop.addEventListener("click", () => {
     window.scrollTo({
         top: 0,
         behavior: "smooth",
     });
 });


    document.addEventListener('DOMContentLoaded', () => {
        // Select slider elements
        let items = document.querySelectorAll('.slider .list .item');
        let next = document.getElementById('next');
        let prev = document.getElementById('prev');
        let thumbnails = document.querySelectorAll('.thumbnail .item');

        // Config parameters
        let countItem = items.length;
        let itemActive = 0;

        // Initial setup for grayscale and active thumbnail
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.classList.toggle('active', index === itemActive);
        });

        // Next button click event
        next.addEventListener('click', () => {
            itemActive = (itemActive + 1) % countItem; // Increment and wrap around
            showSlider();
        });

        // Previous button click event
        prev.addEventListener('click', () => {
            itemActive = (itemActive - 1 + countItem) % countItem; // Decrement and wrap around
            showSlider();
        });

        // Function to update the active slider item
        function showSlider() {
            // Remove active class from previous items
            document.querySelector('.slider .list .item.active').classList.remove('active');
            document.querySelector('.thumbnail .item.active').classList.remove('active');

            // Add active class to the current items
            items[itemActive].classList.add('active');
            thumbnails[itemActive].classList.add('active');
        }

        // Click event for thumbnails
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => {
                itemActive = index;
                showSlider();
            });
        });
    });

