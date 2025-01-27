// Function to handle slider navigation
function setupSlider(containerId) {
    const container = document.getElementById(containerId);
    const slides = container.querySelectorAll('.slide');
    const prevButton = container.querySelector('.prev');
    const nextButton = container.querySelector('.next');

    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    // Initialize the first slide
    showSlide(currentIndex);
}

// Set up the slider
setupSlider('slider-container-1');


let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function() {
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function() {
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(() => {
    next.click()
}, 3000);

function reloadSlider() {
    slider.style.left = -items[active].offsetLeft + 'px';
    //
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click()
    }, 3000);


}

 // JavaScript for handling testimonials
 document.addEventListener("DOMContentLoaded", function() {
    const testimonials = document.querySelectorAll('.testimonial');
    let currentIndex = 0;

    // Function to show the current testimonial
    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.display = (i === index) ? 'block' :
            'none'; // Show current, hide others
        });
    }

    // Initialize by showing the first testimonial
    showTestimonial(currentIndex);

    // Function to navigate to the next testimonial
    function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonials.length; // Loop back to start
        showTestimonial(currentIndex);
    }

    // Automatically change testimonials every 3 seconds
    setInterval(nextTestimonial, 3000);
});

dots.forEach((li, key) => {
    li.addEventListener('click', () => {
        active = key;
        reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};


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
   
   
   // Smooth scrolling for navigation links
    document.querySelectorAll('nav ul li a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Form submission handler
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();

        // Simple form validation (can be expanded)
        const name = this.name.value.trim();
        const email = this.email.value.trim();
        const message = this.message.value.trim();

        if (name === '' || email === '' || message === '') {
            alert('Please fill in all fields.');
            return;
        }

        // Here you can add code to send the form data to your server

        // For demonstration, we'll just show an alert
        alert('Thank you for getting in touch, ' + name + '! We will respond to you soon.');

        // Reset the form
        this.reset();
    });
   
   
   // JavaScript for handling testimonials
   document.addEventListener("DOMContentLoaded", function() {
    const testimonials = document.querySelectorAll('.testimonial');
    let currentIndex = 0;

    // Function to show the current testimonial
    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.display = (i === index) ? 'block' :
            'none'; // Show current, hide others
        });
    }

    // Initialize by showing the first testimonial
    showTestimonial(currentIndex);

    // Function to navigate to the next testimonial
    function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonials.length; // Loop back to start
        showTestimonial(currentIndex);
    }

    // Automatically change testimonials every 3 seconds
    setInterval(nextTestimonial, 3000);
});




dots.forEach((li, key) => {
    li.addEventListener('click', () => {
        active = key;
        reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};




(function() {
    $('.gallery-link').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.find('figcaption').text() || item.el.attr('title');
            }
        },
        zoom: {
            enabled: true
        },
        gallery: {
            enabled: true,
            navigateByImgClick: false,
            tCounter: ''
        },
        disableOn: function() {
            if ($(window).width() < 640) {
                return false;
            }
            return true;
        }
    });

}).call(this);

