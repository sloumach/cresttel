<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://cresttel.net/about.html">
    <meta charset="utf-8">
    <title>About Us - San Diego's Construction Companyàààà</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction and renovation company" name="keywords">
    <meta content="Construction company san diego" name="description">

    <meta name="description"
        content="Discover Cresttel, a top construction company in San Diego, committed to quality craftsmanship, reliability, and exceptional service. Learn more about us.">


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
    <link href="css/about.css" rel="stylesheet">

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
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
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
            <div class="text">1662 north magnolia Ave El Cajon , ca 92020</div>
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
            <div class="text">cs@cresttel.net</div>
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
            <div class="text">(+1) 619-430-4313
            </div>
        </div>


    </div>
    </div>


    <!-- Topbar End -->



    <!-- Page Header Start -->
    @include('aboutheader')
    <!-- Page Header End -->

    <!-- Image Slider Start -->
    <div class="container">
        <header class="main-header clearfix">

            <h2 class="name">How we work !</span></h2>
            <p>Touch the Boxes !</p>
        </header>

        <div class="content clearfix">
            <div class="cube-container">
                <div class="photo-cube">
                    <img class="front" src="img/consult.png" alt="">
                    <div class="back photo-desc">
                        <h3>1. Consultation</h3>
                        <p> Our team of experts will meet with you to discuss your vision, requirements, and goals for
                            the project, ensuring we understand your needs and preferences.</p>

                    </div>
                    <img class="left" src="img/turned to webp/ezgif-1-3b2c4e5537.webp" alt="">
                    <img class="right" src="img/cons3.jpeg" alt="">
                </div>
            </div>

            <div class="cube-container">
                <div class="photo-cube">
                    <img class="front" src="img/2. Feasibili.png" alt="">
                    <div class="back photo-desc">
                        <h3>2.Feasibility</h3>
                        <p> We perform a detailed feasibility study to evaluate your project's practicality, covering
                            site analysis, cost estimates, and potential challenges.</p>
                    </div>
                    <img class="left" src="img/turned to webp/ezgif-6-9f66ba3211.webp" alt="">
                    <img class="right" src="img/ADU_img/Adu - Photos & Ideas (1)(1).jpg" alt="">
                </div>
            </div>

            <div class="cube-container">
                <div class="photo-cube">
                    <img class="front" src="img/cube fancing.png" alt="">
                    <div class="back photo-desc">
                        <h3>3. Financing</h3>
                        <p> We help you secure financing, offering budget planning and funding strategy guidance to
                            ensure your project's financial viability.</p>

                    </div>
                    <img class="left" src="img/Home-Loan.png" alt="">
                    <img class="right" src="img/OIP.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="content clearfix">
            <div class="cube-container">
                <div class="photo-cube">
                    <img class="front" src="img/4. Design & Permitting.png" alt="">
                    <div class="back photo-desc">
                        <h3>4. Design & Permitting</h3>
                        <p>Our architects and engineers create detailed plans, while our specialists handle the
                            permitting process to secure construction approvals.</p>

                    </div>
                    <img class="left" src="img/plans-to-permits-1.jpg" alt="">
                    <img class="right" src="img/187_design-construction.jpg" alt="">
                </div>
            </div>

            <div class="cube-container">
                <div class="photo-cube">
                    <img class="front" src="img/Cube.png" alt="">
                    <div class="back photo-desc">
                        <h3></h3>
                        <p></p>
                        <a href="service.html" class="button"><b><br><br><br> MORE</a></b>
                    </div>
                    <img class="left" src="img/Cube.png" alt="">
                    <img class="right" src="img/Cube.png" alt="">
                </div>
            </div>

            <div class="cube-container">
                <div class="photo-cube">
                    <img class="front" src="img/5. Interior Design & Specifications.png" alt="">
                    <div class="back photo-desc">
                        <h3>5. Interior Design & Specifications</h3>
                        <p>Description: We provide interior design services, assisting with the selection of materials,
                            finishes, and furnishings to match your vision and enhance your project's aesthetic.</p>

                    </div>
                    <img class="left" src="img/45.jpg" alt="">
                    <img class="right"
                        src="img/riverfront-park-home-office-den-denver-colorado-nancy-sanford-inc-img~2ad1ed9d0ed07158_3365-1-7c17966-w360-h360-b0-p0.webp"
                        alt="">

                </div>
            </div>
        </div>
    </div>


    <div class="content clearfix">
        <div class="cube-container">
            <div class="photo-cube">
                <img class="front" src="img/6. Permit & Contract.png" alt="">
                <div class="back photo-desc">
                    <h3>6. Permit & Contract</h3>
                    <p>We finalize permits and contracts, ensuring compliance with local regulations and establishing
                        the legal framework for the project.</p>

                </div>
                <img class="left" src="img/OIP2.jpg" alt="">
                <img class="right" src="img/fdfd.jpg" alt="">
            </div>
        </div>
        <div class="cube-container">
            <div class="photo-cube">
                <img class="front" src="img/7. Fabricate.png" alt="">
                <div class="back photo-desc">
                    <h3>7. Fabricate</h3>
                    <p>Description: Our skilled craftsmen meticulously fabricate project components to the highest
                        quality and precision standards.</p>

                </div>
                <img class="left" src="img/OIP3.jpg" alt="">
                <img class="right" src="img/electrical-construction metal.jpg" alt="">
            </div>
        </div>
        <div class="cube-container">
            <div class="photo-cube">
                <img class="front" src="img/8. DeliveR.png" alt="">
                <div class="back photo-desc">
                    <h3>8. Deliver</h3>
                    <p>Description: We coordinate the delivery and installation of all elements, ensuring timely and
                        efficient project completion, ready for occupancy or use.</p>

                </div>
                <img class="left" src="img/ff.jpg" alt="">
                <img class="right" src="img/delivery-4102583_1280.jpg" alt="">
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    <!-- Image Slider End -->
   

    <!-- Video Section Start -->
    <div class="video-section">
        <h3>Our Introduction</h3>
        <p>Watch our video to know more about us.</p>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Video Section End -->

    <!-- Icon Boxes Start -->
    <div class="container-xxl icon-boxes">
        <div class="container">
            <div class="row g-4">
                <!-- Icon Box 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box">
                        <i class="fas fa-smile icon"></i>
                        <h4>Happy Clients</h4>
                        <p>We have over 1000 satisfied customers worldwide.</p>
                    </div>
                </div>
                <!-- Icon Box 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box">
                        <i class="fas fa-project-diagram icon"></i>
                        <h4>Projects Done</h4>
                        <p>Completed more than 500 projects successfully.</p>
                    </div>
                </div>
                <!-- Icon Box 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box">
                        <i class="fas fa-award icon"></i>
                        <h4>Awards Won</h4>
                        <p>Recognized with multiple industry awards.</p>
                    </div>
                </div>
                <!-- Icon Box 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="icon-box">
                        <i class="fas fa-headset icon"></i>
                        <h4>24/7 Support</h4>
                        <p>Our support team is available around the clock.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Icon Boxes End -->



    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/IMG_5389-1.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">

                        <h4 class="display-5 mb-4">About Us</h4>
                        <p class="mb-4 pb-2" >“At Cresttel, we are dedicated
                            to turning your construction dreams into reality. With a commitment to quality craftsmanship
                            and timely delivery, our team of experts works closely with you to ensure every detail of
                            your project is executed to perfection. Whether you’re looking to build a new home, renovate
                            an existing space, or undertake a commercial project, we bring your vision to life with
                            precision and care. Contact us today to get a personalized quote and start building your
                            future with us.”</p>
                        <div class="row g-4 mb-4 pb-3">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="btn- bg-white ">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <a href="{{ route('service') }}" class="btn btn-primary rounded-pill py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->


     <!-- Copyright Start -->

    @include('copyright')
    
    <!-- Copyright End -->

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
                    alt="Facebook" />
            </a>
            <a href="https://www.instagram.com/cresttelconstruction/" target="_blank" class="icon instagram"
                title="Instagram">
                <img src="img/Home icons/instagram-logo-3d-illustration-free-png.png" alt="Instagram" />
            </a>
            <a href="https://www.linkedin.com/company/cresttelconstruction" target="_blank" class="icon linkedin"
                title="LinkedIn">
                <img src="img/Home icons/linkedin-3d-icon-free-png.png" alt="LinkedIn" />
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
<script src="{{ asset('js/about.js') }}"></script>
</html>
