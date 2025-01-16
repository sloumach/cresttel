 // Toggle Bubble Menu
 const bubble = document.getElementById('bubble');
 const bubbleContent = document.getElementById('bubbleContent');

 bubble.addEventListener('click', () => {
     const isOpen = bubbleContent.style.display === 'block';
     bubbleContent.style.display = isOpen ? 'none' : 'block';
 });

 // Close menu when clicking outside
 document.addEventListener('click', (event) => {
     if (!bubble.contains(event.target)) {
         bubbleContent.style.display = 'none';
     }
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