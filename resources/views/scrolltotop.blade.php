
    <!-- Back to Top -->
    <!-- Scroll to Top Button -->
    <div id="scrollToTop">
    <i class="fas fa-arrow-up"></i>
</div>
<style>/* Scroll to Top Button Styles */
    #scrollToTop {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background-color: #007BFF; /* Circle background color */
        color: #fff; /* Arrow color */
        border-radius: 50%; /* Makes it circular */
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 1000; /* Keeps it on top */
    }
    
    #scrollToTop i {
        font-size: 20px; /* Arrow size */
    }
    
    /* Show button when visible */
    #scrollToTop.show {
        opacity: 1;
        visibility: visible;
    }
    </style>
    <script>// Show/Hide Scroll to Top Button
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
</script>