
     // Initialize Owl Carousel
     $(document).ready(function() {
         $(".owl-carousel").owlCarousel({
             loop: true,
             margin: 10,
             nav: true,
             autoplay: true,
             autoplayTimeout: 3000,
             responsive: {
                 0: {
                     items: 1
                 },
                 600: {
                     items: 1
                 },
                 1000: {
                     items: 1
                 }
             }
         });
 
         // Initialize WOW.js for Animations
         new WOW().init();
     });
 
     // Initialize Counter-Up
     jQuery(document).ready(function($) {
         $('.counter').counterUp({
             delay: 10,
             time: 2000
         });
     });
 
 
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