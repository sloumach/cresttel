<div id="expandable-bubble">
  <div class="primary-bubble" onclick="toggleSocialIcons()">
    <span class="flashing-text">Contact Us</span>
  </div>
  <div class="social-icons">
    
    <a href="https://www.facebook.com/cresttelconstruction" target="_blank" class="icon facebook" title="Facebook">
      <img src="img/Home icons/3d-render-facebook-logo-icon-with-new-notification-isolated-on-transparent-background-free-png.png" alt="Facebook" />
    </a>
    <a href="https://www.instagram.com/cresttelconstruction/" target="_blank" class="icon instagram" title="Instagram">
      <img src="img/Home icons/instagram-logo-3d-illustration-free-png.png" alt="Instagram" />
    </a>
    <a href="https://www.linkedin.com/company/cresttelconstruction" target="_blank" class="icon linkedin" title="LinkedIn">
      <img src="img/Home icons/linkedin-3d-icon-free-png.png" alt="LinkedIn" />
    </a>
  </div>
</div>
<style>.social-icons img {
  width: 40px;  /* Adjust the size */
  height: 40px;
  margin: 10px; /* Adjust spacing */
}
</style>

<style>
  /* Responsive styles for smaller screens */
@media (max-width: 768px) {
  /* Adjust container positioning */
  #expandable-bubble {
    bottom: 10px; /* Bring closer to the screen edge */
    left: 10px;
  }

  /* Primary button adjustments */
  .primary-bubble {
    font-size: 12px; /* Smaller text size */
    padding: 8px 15px; /* Smaller padding */
    border-radius: 20px; /* Slightly smaller rounded corners */
    width: auto; /* Allow the button to shrink if needed */
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2); /* Adjust shadow size */
  }

  /* Adjust flashing text size */
  .flashing-text {
    font-size: 12px; /* Slightly smaller font */
    letter-spacing: 0.8px; /* Reduce spacing */
  }

  /* Social icons adjustments */
  .social-icons .icon {
    width: 40px; /* Smaller icon size */
    height: 40px;
    font-size: 20px; /* Adjust icon size */
  }

  .social-icons {
    gap: 8px; /* Reduce spacing between icons */
  }
}

/* Ultra-small screens (e.g., phones in portrait mode) */
@media (max-width: 480px) {
  #expandable-bubble {
    bottom: 5px; /* Further adjust position */
    left: 5px;
  }

  .primary-bubble {
    font-size: 10px; /* Even smaller text */
    padding: 6px 12px; /* Tighter padding */
  }

  .social-icons .icon {
    width: 35px; /* Smaller icons */
    height: 35px;
    font-size: 18px;
  }
}

  
  /* Primary button styling */
.primary-bubble {
  width: auto; /* Adjust width to fit the text */
  padding: 10px 20px; /* Add padding for button look */
  background: linear-gradient(45deg, #0077b5, #00bfff); /* Gradient background */
  color: white;
  border: 2px solid white; /* Add a white border */
  border-radius: 25px; /* Rounded edges */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-weight: bold;
  text-align: center;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
}

.primary-bubble:hover {
  background: linear-gradient(45deg, #00bfff, #0077b5); /* Reverse gradient on hover */
  transform: translateY(-3px); /* Slight lift on hover */
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3); /* Deeper shadow on hover */
}

/* Flashing text (remains the same) */
.flashing-text {
  animation: flash 1.5s infinite;
  font-size: 14px;
  font-weight: bold;
  letter-spacing: 1px;
  text-transform: uppercase;
}

  /* Flashing text effect for "Contact Us" */
.flashing-text {
  animation: flash 1.5s infinite;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* Keyframes for flashing animation */
@keyframes flash {
  0%, 100% {
    color: white;
    text-shadow: 0 0 5px #0077b5, 0 0 10px #0077b5;
  }
  50% {
    color: #f1f1f1;
    text-shadow: 0 0 15px #00bfff, 0 0 30px #00bfff;
  }
}

  /* Container for the expandable bubble */
    #expandable-bubble {
      position: fixed;
      bottom: 20px;
      left: 20px;
      z-index: 1000;
      display: flex;
      flex-direction: column-reverse; /* Social icons will expand upwards */
      align-items: center;
      gap: 15px;
    }
    
   
    
    .primary-bubble:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }
    
    /* Hidden social icons container */
    .social-icons {
      display: none; /* Hidden initially */
      flex-direction: column; /* Expand upwards */
      gap: 10px;
    }
    
    /* Social media icon styles */
    .social-icons .icon {
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      color: #fff;
      font-size: 24px;
      text-decoration: none;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .social-icons .icon:hover {
      transform: scale(1.1);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    
    .social-icons .whatsapp {
      background-color: #25d366;
    }
    
    .social-icons .facebook {
      background-color: #3b5998;
    }
    
    .social-icons .instagram {
      background: radial-gradient(circle at 30% 30%, #fdf497, #fd5949, #d6249f, #285aeb);
    }
    
    .social-icons .linkedin {
      background-color: #0077b5;
    }
    
  </style>
  <script>function toggleSocialIcons() {
    const socialIcons = document.querySelector("#expandable-bubble .social-icons");
    socialIcons.style.display = socialIcons.style.display === "flex" ? "none" : "flex";
  }  
</script>