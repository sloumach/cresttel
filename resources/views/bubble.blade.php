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
<script>
function toggleSocialIcons() {
      const socialIcons = document.querySelector("#expandable-bubble .social-icons");
      socialIcons.style.display = socialIcons.style.display === "flex" ? "none" : "flex";
    }  
  </script>