const testimonials = [
    {
      text: "Cresttel turned our backyard vision into reality with an expertly built ADU that exceeded our expectations. Their attention to detail and commitment to quality craftsmanship made all the difference. The team delivered on time and within budget. We couldn’t be happier!",
      name: "Sarah Thompson",
      title: "Homeowner",
    },
    {
      text: "As a property developer, I’ve worked with many construction teams, but Cresttel stands out. They seamlessly managed our MDU project, from planning to execution. The level of professionalism and expertise they brought to the table was unparalleled.",
      name: "Michael Carter",
      title: "Property Developer",
    },
    {
      text: "We hired Cresttel to build a commercial fence for our warehouse, and they delivered outstanding results. The team was punctual, professional, and ensured every aspect of the project was flawless. Highly recommended!",
      name: "Jessica Patel",
      title: "Operations Manager",
    },
    {
      text: "Our residential remodel was a massive undertaking, but Cresttel made it smooth and stress-free. Their team listened to our needs, offered creative solutions, and transformed our house into our dream home. Their craftsmanship is truly top-notch.",
      name: "Emily Rogers",
      title: "Homeowner",
    },
    {
      text: "Cresttel exceeded expectations on our commercial building renovation. Their commitment to quality and timely delivery was evident in every step of the process. I’m already planning our next project with them!",
      name: "James Miller",
      title: "Business Owner",
    },
  ];
  
  const testimonialText = document.getElementById("testimonial-text");
  const clientName = document.getElementById("client-name");
  const clientTitle = document.getElementById("client-title");
  
  let currentTestimonialIndex = 0;
  
  function updateTestimonial() {
    const { text, name, title } = testimonials[currentTestimonialIndex];
    testimonialText.textContent = text;
    clientName.textContent = name;
    clientTitle.textContent = title;
  
    currentTestimonialIndex =
      (currentTestimonialIndex + 1) % testimonials.length;
  }
  
  // Rotate testimonials every 5 seconds
  updateTestimonial();
  setInterval(updateTestimonial, 5000);
  
  // Add interactivity to the CTA button
  
   
  
     
     
     
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