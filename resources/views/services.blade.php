<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://cresttel.net/services">
    <meta charset="utf-8">
    <title>Expert Construction Services for Homes & Businesses | Cresttel </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="remodeling services san diego & construction services san diego" name="keywords">
    <meta
        content="Transform your space with Cresttel's expert residential and commercial construction services. From planning to completion, we deliver excellence at every step."
        name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">

    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/x-icon">
    <!-- or for PNG files -->
    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/png">

</head>

<body>
    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary custom-spinner" role="status"></div>
        <span class="sr-only">Loading...</span>
    </div>
    </div>
    <!-- Spinner End -->



    <div class="icon-container">
        <!-- Location Icon -->
        <div class="icon-wrapper">
            <div class="icon">
                <!-- Use an SVG path for a location icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                </svg>
            </div>
            <div class="text">1662 North Magnolia Ave, El Cajon, CA 92020</div>
        </div>

        <!-- Email Icon -->
        <div class="icon-wrapper">
            <div class="icon">
                <!-- Use an SVG path for an email icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 12.713l-11.713-7.021c-.242-.145-.287-.475-.09-.688l.033-.033c.199-.221.534-.232.78-.024l11.287 6.928 11.287-6.928c.246-.208.581-.197.78.024l.033.033c.197.213.152.543-.09.688l-11.713 7.021zm11.944-6.713c-.063-.019-.129-.033-.194-.033h-23.5c-.066 0-.132.014-.194.033.042.055.102.123.181.176l11.757 7.04c.24.144.563.144.803 0l11.757-7.04c.08-.052.14-.121.181-.176zm-23.944 1.854v11.145c0 .552.448 1 1 1h22c.552 0 1-.448 1-1v-11.145l-11 6.592c-.31.185-.69.185-1 0l-11-6.592z" />
                </svg>
            </div>
           <div class="text mt-4"><p><a href="mailto:cs@cresttel.net">Send email</a></p></div>

        </div>

        <!-- Phone Icon -->
        <div class="icon-wrapper">
            <div class="icon">
                <!-- Use an SVG path for a phone icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M6.62 10.79c2.44 4.51 5.87 7.94 10.39 10.39l2.2-2.2c.27-.27.67-.36 1.02-.26 1.12.32 2.33.5 3.57.5.55 0 1 .45 1 1v4c0 .55-.45 1-1 1-11.05 0-20-8.95-20-20 0-.55.45-1 1-1h4c.55 0 1 .45 1 1 0 1.24.18 2.45.5 3.57.1.35.01.74-.26 1.02l-2.2 2.2z" />
                </svg>
            </div>
            <div class="text">(+1) 619-430-4313</div>
        </div>
    </div>

    </div>
    </div>





    <!-- Page Header Start -->
    @include('serviceheader')
    <!-- Page Header End -->

    <!-- Service End -->


    </main>


    <!-- slider -->

    <div class="slider">
        <!-- List Items -->
        <div class="list">
            <div class="item active">
                <img src="img/service img/31.jpg"
                    alt="Reliable fence services for residential and commercial properties, ensuring privacy and security">
                <div class="content">
                    <p>Service</p>
                    <h3>Fence</h3>
                    <p>
                        Enhance your property's security and curb appeal with our fencing services. From fence
                        installation to fence repairs, our experienced team provides reliable solutions for both
                        residential and commercial properties.
                    </p>
                    <button class="link-button"><a href="{{ route('fence') }}">Learn More</a></button>
                </div>
            </div>
            <div class="item">
                <img src="img/ADU_img/blog-2.webp"
                    alt="Modern backyard office with sleek exterior design, wooden accents, large windows, and landscaped garden - Cresttel construction and renovation services.">
                <div class="content">
                    <p>Service</p>
                    <h3>Accessory Dwelling Units (ADUs)</h3>
                    <p>
                        Maximize your property's value with our ADU construction services. Perfect for homeowners
                        seeking additional living space or rental opportunities, we provide top-tier ADU construction
                        blending style and utility.
                    </p>
                    <button class="link-button"><a href="{{ route('adu') }}">Learn More</a></button>
                </div>
            </div>
            <div class="item">
                <img src="img/service img/ser com.jpg"
                    alt="Commercial construction services for modern office spaces and commercial properties">
                <div class="content">
                    <p>Service</p>
                    <h3>Commercial Construction Services</h3>
                    <p>
                        Take your business to the next level with our commercial construction services. From office
                        buildings to retail spaces and industrial facilities, we deliver tailored solutions that blend
                        functionality with design. Our commercial building construction services cater to businesses of
                        all sizes, offering unmatched craftsmanship to bring your vision to life.
                    </p>
                    <button class="link-button"><a href="{{ route('commercial') }}">Learn More</a></button>
                </div>
            </div>
            <div class="item">
                <img src="img/service img/ser mdu.jpg"
                    alt="MDU construction services for multi-dwelling units with efficient planning and execution">
                <div class="content">
                    <p>Service</p>
                    <h3>Multi-Dwelling Units (MDUs)</h3>
                    <p>
                        Our MDU construction services are tailored for developers and investors, offering seamless
                        solutions for apartments, condos, and townhouses. With attention to detail, we ensure that every
                        project meets your expectations.
                    </p>
                    <button class="link-button"><a href="{{ route('mdu') }}">Learn More</a></button>
                </div>
            </div>

            <div class="item">
                <img src="img/service img/rs.jpg"
                    alt="Residential construction services for durable and reliable homes with expert craftsmanship">
                <div class="content">
                    <p>Service</p>
                    <h3>Residential Construction Services</h3>
                    <p>
                        Bring your dream home into reality with our residential construction services. Whether it’s a
                        custom new build or a home renovation, we specialize in creating spaces that reflect your style
                        and meet your needs. Searching for " home remodeling services "? then leave it to us for high
                        quality results tailored to your desires.
                    </p>
                    <button class="link-button"><a href="{{ route('residential') }}">Learn More</a></button>
                </div>
            </div>
        </div>
        <!-- Arrows -->
        <div class="arrows">
            <button id="prev">
                < </button>
                    <button id="next">></button>
        </div>
        <!-- Thumbnail -->
        <div class="thumbnail">
            <div class="item active">
                <img src="img/service img/31.jpg">
                <div class="content">
                    Fence
                </div>
            </div>
            <div class="item">
                <img src="img/ADU_img/blog-2.webp">
                <div class="content">
                    ADU
                </div>
            </div>
            <div class="item">
                <img src="img/service img/ser com.jpg">
                <div class="content">
                    Commercial
                </div>
            </div>
            <div class="item">
                <img src="img/service img/ser mdu.jpg">
                <div class="content">
                    MDU
                </div>
            </div>
            <div class="item">
                <img src="img/service img/rs.jpg">
                <div class="content">
                    Residential
                </div>
            </div>
        </div>
    </div>



    <section class="services-section">
        <div class="container">
            <div class="services-content">
                <!-- Left Side: Text Content -->
                <div class="text-content">
                    <h2 class="text-primary">Our Services</h2>
                    <div class="service-text active" data-service="adu">
                        <h3>Accessory Dwelling Units Project</h3>
                        <p>Our Cresttel construction team is proud to be a trusted leader in Accessory Dwelling Unit
                            (ADU) construction services, delivering innovative solutions that enhance your property's
                            functionality and value. Whether you're looking to create additional living space, a private
                            home office, or a guest suite, our team specializes in crafting high quality ADU
                            construction projects tailored to your needs. From modern designs to seamless integration
                            with your existing home, our projects showcase our commitment to excellence.</p>
                    </div>
                    <div class="service-text" data-service="mdu">
                        <h3>Multi-Dwelling Units Project</h3>
                        <p>At Cresttel, we strive on becoming the number 1 construction company in America as our recent
                            MDU construction project, showcased in the images, are a testament to our commitment to
                            excellence. This project reflects our ability to blend aesthetics, functionality, and
                            sustainability, meeting the diverse needs of residents and property developers. By
                            leveraging our extensive experience, we’ve earned the trust of clients as a leading MDU
                            construction services group. Whether it’s creating efficient layouts or integrating modern
                            design elements, our expertise in construction services transforms visions into reality.</p>
                    </div>
                    <div class="service-text" data-service="fence">
                        <h3>Fence Installation and repair project</h3>
                        <p>Whether you’re looking for a secure fence installation service or need reliable fence repair
                            services, our team of experienced contractors has you covered. From sleek modern metal gates
                            to classic wooden fences, as showcased in our recent projects, we combine quality materials
                            with precise craftsmanship to enhance the safety and aesthetics of your property. Moreover,
                            our expertise extends to both residential and commercial properties, ensuring that you
                            receive a comprehensive solution, whether it’s a durable fence for a family home or a robust
                            security enclosure for a business. </p>
                    </div>
                    <div class="service-text" data-service="commercial">
                        <h3>Commercial Construction project</h3>
                        <p>Cresttel proudly showcases its expertise in commercial construction with this latest project,
                            a state-of-the-art commercial building designed for durability and functionality. Located in
                            a prime business district, this project demonstrates our commitment to high quality
                            construction, precision engineering, and efficient project management. From the foundation
                            to the final structure, our team ensured every detail met industry standards, delivering a
                            space optimized for business operations. Whether developing office complexes, retail spaces,
                            or industrial facilities, Cresttel continues to lead in commercial construction services,
                            bringing innovation and excellence to every project.</p>
                    </div>
                    <div class="service-text" data-service="residential">
                        <h3>Residential Construction Project </h3>
                        <p>Our biggest priority is to make sure our clients live in there dream homes as we take pride
                            in delivering residential construction services that combine elegance, functionality, and
                            sustainability. This recent project exemplifies our expertise as a full-service construction
                            company, where every detail, from modern interiors to the seamless integration of outdoor
                            living areas, was carefully designed to exceed client expectations. Our team collaborated
                            closely with the homeowners to ensure every element reflected their vision while
                            incorporating innovative techniques for long-lasting quality.</p>
                    </div>
                </div>

                <!-- Right Side: Slider -->
                <div class="slider" id="service-slider">
                    <div class="slider-images">
                        <img src="img/newphotos/adu/adu.jpg" alt="ADU construction project built by cresttel" class="active" data-service="adu">
                        <img src="img/newphotos/mdu/Library_PhotoPietroSavorelli2.jpg" alt="MDU construction project built by the cresttel team"
                            data-service="mdu">
                        <img src="img/newphotos/fence/received_2027745611076508.jpeg" alt="metal Fence installed by the cresttel team"
                            data-service="fence">
                        <img src="img/newphotos/commercial/Panda_Jacksonville_001 (1).jpg" alt="Commercial construction project built by the cresttel team"
                            data-service="commercial">
                        <img src="img/newphotos/residential/instagrampost3.png" alt="Residential project built by the cresttel's construction contractors "
                            data-service="residential">
                    </div>
                    <div class="slider-controls">
                        <button class="prev">&#10094;</button>
                        <button class="next">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .services-section {
            padding: 50px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .services-content {
            display: flex;
            flex-direction: column;
            /* Stack content vertically on smaller screens */
            align-items: center;
            gap: 40px;
        }

        .text-content {
            flex: 1;
            text-align: center;
            /* Center text on smaller screens */
        }

        .text-content h2 {
            font-size: 2rem;
            /* Smaller font size for mobile */
            margin-bottom: 20px;
        }

        .service-text {
            display: none;
        }

        .service-text.active {
            display: block;
        }

        /* Scoped styles for the service slider */
        #service-slider {
            flex: 1;
            position: relative;
            width: 100%;
            /* Full width on smaller screens */
            max-width: 600px;
            /* Limit slider width */
        }

        #service-slider .slider-images img {
            display: none;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #service-slider .slider-images img.active {
            display: block;
        }

        #service-slider .slider-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        #service-slider .slider-controls button {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 1.2rem;
        }

        #service-slider .slider-controls button:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        /* Responsive Breakpoints */
        @media (min-width: 768px) {
            .services-content {
                flex-direction: row;
                /* Side-by-side layout on larger screens */
                align-items: flex-start;
                /* Align items to the top */
            }

            .text-content {
                text-align: left;
                /* Left-align text on larger screens */
            }

            .text-content h2 {
                font-size: 2.5rem;
                /* Larger font size for desktop */
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const services = ["adu", "mdu", "fence", "commercial", "residential"];
            let currentIndex = 0;

            const textContents = document.querySelectorAll(".service-text");
            const images = document.querySelectorAll(".slider-images img");
            const prevButton = document.querySelector(".slider-controls .prev");
            const nextButton = document.querySelector(".slider-controls .next");

            function updateService(index) {
                // Remove active class from all elements
                textContents.forEach((text) => text.classList.remove("active"));
                images.forEach((img) => img.classList.remove("active"));

                // Add active class to the current service
                textContents[index].classList.add("active");
                images[index].classList.add("active");
            }

            prevButton.addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + services.length) % services.length;
                updateService(currentIndex);
            });

            nextButton.addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % services.length;
                updateService(currentIndex);
            });

            // Initialize the first service
            updateService(currentIndex);
        });
    </script>

    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->


    <!-- Copyright Start -->

    @include('copyright')

    <!-- Copyright End -->


    <!-- Back to Top -->
    <!-- Scroll to Top Button -->
    <div id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </div>




    <div id="expandable-bubble">
        <div class="primary-bubble" onclick="toggleSocialIcons()">
            <span class="flashing-text">Contact Us</span>
        </div>
        <div class="social-icons">

            <a href="https://www.facebook.com/cresttelconstruction" target="_blank" class="icon facebook"
                title="Facebook">
                <img src="img/Home icons/3d-render-facebook-logo-icon-with-new-notification-isolated-on-transparent-background-free-png.png"
                    alt="Facebook icon" />
            </a>
            <a href="https://www.instagram.com/cresttelconstruction/" target="_blank" class="icon instagram"
                title="Instagram">
                <img src="img/Home icons/instagram-logo-3d-illustration-free-png.png" alt="Instagram icon" />
            </a>
            <a href="https://www.linkedin.com/company/cresttelconstruction" target="_blank" class="icon linkedin"
                title="LinkedIn">
                <img src="img/Home icons/linkedin-3d-icon-free-png.png" alt="LinkedIn icon" />
            </a>
        </div>
    </div>





</body>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/bublle.js') }}"></script>
<script src="{{ asset('js/services.js') }}"></script>



</html>
