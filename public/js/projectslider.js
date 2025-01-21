document.addEventListener("DOMContentLoaded", () => {
    // Select DOM elements
    let items = document.querySelectorAll(".slider .list .item");
    let prevBtn = document.getElementById("prev");
    let nextBtn = document.getElementById("next");
    let lastPosition = items.length - 1;
    let firstPosition = 0;
    let active = 0;
    let autoChange;

    // Function to navigate to the next slide
    nextBtn.onclick = () => {
        active = (active + 1) > lastPosition ? 0 : active + 1; // Loop back to first slide
        setSlider();
        resetAutoChange();
    };

    // Function to navigate to the previous slide
    prevBtn.onclick = () => {
        active = (active - 1) < firstPosition ? lastPosition : active - 1; // Loop back to last slide
        setSlider();
        resetAutoChange();
    };

    // Function to set the active slide
    const setSlider = () => {
        // Remove the active class from the current slide
        let oldActive = document.querySelector(".slider .list .item.active");
        if (oldActive) oldActive.classList.remove("active");

        // Add the active class to the new slide
        items[active].classList.add("active");

        // Ensure buttons are always visible (remove d-none if applicable)
        nextBtn.classList.remove("d-none");
        prevBtn.classList.remove("d-none");
    };

    // Function to start auto-changing slides
    const startAutoChange = () => {
        autoChange = setInterval(() => {
            active = (active + 1) > lastPosition ? 0 : active + 1;
            setSlider();
        }, 5000); // Change every 5 seconds
    };

    // Function to reset auto-change timer
    const resetAutoChange = () => {
        clearInterval(autoChange);
        startAutoChange();
    };

    // Function to set a dynamic diameter for circular effects
    const setDiameter = () => {
        let slider = document.querySelector(".slider");
        if (slider) {
            let widthSlider = slider.offsetWidth;
            let heightSlider = slider.offsetHeight;
            let diameter = Math.sqrt(Math.pow(widthSlider, 2) + Math.pow(heightSlider, 2));
            document.documentElement.style.setProperty("--diameter", diameter + "px");
        }
    };

    // Initialize slider and start auto-change
    setSlider();
    startAutoChange();
    setDiameter();

    // Update diameter on window resize
    window.addEventListener("resize", setDiameter);
});
