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