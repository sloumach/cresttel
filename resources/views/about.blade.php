<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://cresttel.net/about.html">
    <meta charset="utf-8">
    <title>About Us - San Diego's Construction Company</title>
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
    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/x-icon">
    <!-- or for PNG files -->
    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/png">
</head>

<!-- Embedded Custom Styles -->
<style>
    /* Image Slider Styles */
    .owl-carousel .item img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    /* Video Section Styles */
    .video-section {
        padding: 60px 0;
        text-align: center;
        background-color: #f8f9fa;
    }

    .video-section iframe {
        width: 100%;
        max-width: 800px;
        height: 450px;
        border: none;
        border-radius: 10px;
    }

    /* Icon Boxes Styles */
    .icon-boxes {
        padding: 60px 0;
        background-color: #ffffff;
    }

    .icon-box {
        text-align: center;
        padding: 20px;
        transition: transform 0.3s;
    }

    .icon-box:hover {
        transform: translateY(-10px);
    }

    .icon-box .icon {
        font-size: 40px;
        color: #ADD8E6;
        margin-bottom: 20px;
    }

    .icon-box h4 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #333333;
    }

    .icon-box p {
        color: #666666;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .video-section iframe {
            height: 250px;
        }
    }

    /* Topbar Icon Styles */
    .icon-container {
        display: flex;
        justify-content: space-around;
        background-color: #1c1c1c;
        /* Match your website's background */
        padding: 20px;
        flex-wrap: wrap;
        /* Allow wrapping for smaller screens */
    }

    .icon-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #1591ea;
        flex: 1;
        /* Allow even spacing */
        min-width: 250px;
        /* Prevent collapsing too much on smaller screens */
    }

    .icon {
        width: 24px;
        height: 24px;
        display: inline-block;
    }

    .text {
        font-family: Arial, sans-serif;
        color: #ffffff;
        /* Adjust text color */
        font-size: 14px;
        /* Adjust text size for smaller screens */
    }

    /* Responsive styles for smaller screens */
    @media (max-width: 768px) {
        .icon-container {
            flex-direction: column;
            align-items: center;
            /* Center items */
        }

        .icon-wrapper {
            justify-content: center;
            text-align: center;
        }

        .text {
            font-size: 12px;
            /* Slightly smaller text */
        }
    }

    .icon-container {
        display: flex;
        justify-content: space-around;
        background-color: #1c1c1c;
        /* Match your website's background */
        padding: 20px;
        flex-wrap: wrap;
        /* Allow wrapping for smaller screens */
    }

    .icon-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #1591ea;
        flex: 1;
        /* Allow even spacing */
        min-width: 250px;
        /* Prevent collapsing too much on smaller screens */
    }

    .icon {
        width: 24px;
        height: 24px;
        display: inline-block;
    }

    .text {
        font-family: Arial, sans-serif;
        color: #ffffff;
        /* Adjust text color */
        font-size: 14px;
        /* Adjust text size for smaller screens */
    }

    /* Responsive styles for smaller screens */
    @media (max-width: 768px) {
        .icon-container {
            flex-direction: column;
            align-items: center;
            /* Center items */
        }

        .icon-wrapper {
            justify-content: center;
            text-align: center;
        }

        .text {
            font-size: 12px;
            /* Slightly smaller text */
        }
    }
</style>


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
    <div class="container-fluid s"
        style="background-image: url('img/plan\ de\ maison.jpg');
           background-repeat: no-repeat;
           background-size: cover;
           background-position: center;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown" style="color: #1591ea;">About Us - Cresttel,
                Leading Construction Company in San Diego</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>

                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
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
                        <a style="color: #f7f7f7;" href="{{ route('service') }}" class="button"><b><br><br><br> MORE</b></a>
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
    <style>
        /* =================================
  Base Element Styles
==================================== */

        * {
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        h1,

        h3 {
            text-transform: uppercase;
        }

        h2 {

            color: #4a89ca;

            margin: 0;
        }

        h3 {
            font-size: 1.3em;
            line-height: 1.25em;
            margin-top: .85em;
            margin-bottom: .5em;
        }

        p {
            font-size: .875em;
            line-height: 1.4;
            margin: 0 0 1.5em;
        }

        /* =================================
  Base Layout Styles
==================================== */

        /* ---- Layout Containers ---- */

        .container,
        .content {
            margin: auto;
        }

        .container {
            width: 94.02985075%;
            max-width: 1260px;
            padding: 0 2.25em 4em;

        }

        .main-header {
            text-align: center;
            padding: 2.8em 0 3.8em;
        }

        .cube-container {
            max-width: 200px;
            text-align: center;
            margin: 0 auto 4.5em;
        }

        /* ---- Page Elements ---- */

        .name {
            font-size: 1.65em;
            font-weight: 800;
            margin: 0 0 1.5em;
            line-height: 1;
        }

        .name span {
            font-weight: 300;
            margin-left: -7px;
        }

        .logo {
            width: 200px;
            margin-bottom: .4em;
            cursor: pointer;
        }

        /* ---- Photo Overlay ---- */

        .photo-desc {
            font-size: .85em;
            color: #fff;
            padding: 1.1em 1em 0;
            background: #1591ea;
            ";

        }

        /* ---- Float clearfix ---- */

        .clearfix::after {
            content: " ";
            display: table;
            clear: both;
        }

        /* =================================
  Media Queries
==================================== */

        @media (min-width: 769px) {
            .cube-container {
                float: left;
                margin-left: 16.6%;
            }
        }

        @media (min-width: 1025px) {
            .cube-container:first-child {
                margin-left: 0;
            }

            .cube-container:last-child {
                float: right;
            }

            .content {
                max-width: 900px;
                margin: auto;
            }
        }

        /* =================================
  Button Transitions
==================================== */

        .button {
            transition: background .3s;
        }

        .button:hover {
            background: rgba(74, 137, 202, 1);
        }

        /* =================================
  Photo 3D Transforms & Transitions
==================================== */

        .cube-container {
            box-shadow: 0 18px 40px 5px rgba(0, 0, 0, .4);
            perspective: 800px;
        }

        .photo-cube {
            transition: transform 3s ease-in-out;
            width: 220px;
            height: 200px;
            transform-style: preserve-3d;
        }

        .photo-cube:hover {
            transform: rotateY(-270deg);
        }

        .front,
        .back,
        .left,
        .right {
            width: 100%;
            height: 100%;
            display: block;
            position: absolute;
        }

        .front {
            transform: translate3d(0, 0, 110px);
        }

        .back {
            transform: translateZ(-110px) rotateY(270deg);
            transform-origin: center left;
        }

        .left {
            transform: rotateY(-270deg) translate3d(110px, 0, 0);
            transform-origin: top right;
        }

        .right {
            transform: translateZ(-110px) rotateY(180deg);
        }
    </style>

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
                        <p class="mb-4 pb-2" style="font-size: larger;color: #333333;">“At Cresttel, we are dedicated
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
    <div class="container-fluid py-4" style="background: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#"><span
                            style="color: rgb(255, 255, 255);">Cresttel</span></a>,
                    <span style="color: #1591ea;">All Right Reserved</span>.
                </div>

                <div class="col-md-6 text-center text-md-end">

                    <span style="color: #1591ea;">Distributed By</span>. <a class="border-bottom"
                        href="https://nicheknights.com/"><span
                            style="color: rgb(255, 255, 255);">Nicheknights</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Scroll to Top Button -->
    <div id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </div>
    <style>
        /* Scroll to Top Button Styles */
        #scrollToTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #007BFF;
            /* Circle background color */
            color: #fff;
            /* Arrow color */
            border-radius: 50%;
            /* Makes it circular */
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: 1000;
            /* Keeps it on top */
        }

        #scrollToTop i {
            font-size: 20px;
            /* Arrow size */
        }

        /* Show button when visible */
        #scrollToTop.show {
            opacity: 1;
            visibility: visible;
        }
    </style>
    <script>
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
    </script>

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
    <style>
        .social-icons img {
            width: 40px;
            /* Adjust the size */
            height: 40px;
            margin: 10px;
            /* Adjust spacing */
        }
    </style>






    <style>
        /* Responsive styles for smaller screens */
        @media (max-width: 768px) {

            /* Adjust container positioning */
            #expandable-bubble {
                bottom: 10px;
                /* Bring closer to the screen edge */
                left: 10px;
            }

            /* Primary button adjustments */
            .primary-bubble {
                font-size: 12px;
                /* Smaller text size */
                padding: 8px 15px;
                /* Smaller padding */
                border-radius: 20px;
                /* Slightly smaller rounded corners */
                width: auto;
                /* Allow the button to shrink if needed */
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
                /* Adjust shadow size */
            }

            /* Adjust flashing text size */
            .flashing-text {
                font-size: 12px;
                /* Slightly smaller font */
                letter-spacing: 0.8px;
                /* Reduce spacing */
            }

            /* Social icons adjustments */
            .social-icons .icon {
                width: 40px;
                /* Smaller icon size */
                height: 40px;
                font-size: 20px;
                /* Adjust icon size */
            }

            .social-icons {
                gap: 8px;
                /* Reduce spacing between icons */
            }
        }

        /* Ultra-small screens (e.g., phones in portrait mode) */
        @media (max-width: 480px) {
            #expandable-bubble {
                bottom: 5px;
                /* Further adjust position */
                left: 5px;
            }

            .primary-bubble {
                font-size: 10px;
                /* Even smaller text */
                padding: 6px 12px;
                /* Tighter padding */
            }

            .social-icons .icon {
                width: 35px;
                /* Smaller icons */
                height: 35px;
                font-size: 18px;
            }
        }


        /* Primary button styling */
        .primary-bubble {
            width: auto;
            /* Adjust width to fit the text */
            padding: 10px 20px;
            /* Add padding for button look */
            background: linear-gradient(45deg, #0077b5, #00bfff);
            /* Gradient background */
            color: white;
            border: 2px solid white;
            /* Add a white border */
            border-radius: 25px;
            /* Rounded edges */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        }

        .primary-bubble:hover {
            background: linear-gradient(45deg, #00bfff, #0077b5);
            /* Reverse gradient on hover */
            transform: translateY(-3px);
            /* Slight lift on hover */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
            /* Deeper shadow on hover */
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

            0%,
            100% {
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
            flex-direction: column-reverse;
            /* Social icons will expand upwards */
            align-items: center;
            gap: 15px;
        }



        .primary-bubble:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        /* Hidden social icons container */
        .social-icons {
            display: none;
            /* Hidden initially */
            flex-direction: column;
            /* Expand upwards */
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
</body>
<script>
    function toggleSocialIcons() {
        const socialIcons = document.querySelector("#expandable-bubble .social-icons");
        socialIcons.style.display = socialIcons.style.display === "flex" ? "none" : "flex";
    }
</script>
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

<!-- Embedded Custom JavaScript -->
<script>
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
</script>


</html>
