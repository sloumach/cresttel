<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="{{ route('welcome') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction and remodeling company" name="keywords">
    <meta content="San diego construction and renovation & building contractors" name="keywords">
    <meta
        content="Reliable Residential and commercial construction services in san Diego and its
    surrounding areas. Contact us for efficient renovation and remodeling solutions."
        name="description">
    <title>San Diego Construction and Remodeling Company | Cresttel</title>
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
    <link href="css/home.css" rel="stylesheet">


    <link rel="icon" href="path-to-your-favicon/favicon.ico" type="image/x-icon">
    <!-- or for PNG files -->
    <link rel="icon" href="path-to-your-favicon/favicon.png" type="image/png">

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


    <!-- Topbar Start -->



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
            <div class="text">(+1) 619-430-4313</div>
        </div>
    </div>


   

   
   


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/wephome/ezgif-2-fd9d395e0a.webp" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4" style="font-size:480%;">We
                                    Build Homes That Last</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Expert construction services <br> for residential
                                    and commercial properties

                                </p>
                                <a href="{{ route('project') }}"
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft"><span
                                        style="color: rgb(255, 255, 255);">View Projects</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/wephome/ezgif-5-7e1dbe95f2.webp" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h2 class="display-3 text-white animated slideInDown mb-4">Smart Commercial Solution
                                    For All Business</h2>
                                <p class="fs-5 text-white mb-4 pb-2">Providing comprehensive commercial construction
                                    services with high quality craftsmanship tailored for your business success in San
                                    Diego.</p>
                                <a href="project.blade.php"
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft"><span
                                        style="color: rgb(255, 255, 255);">View Projects</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/wephome/ezgif-2-51e1d28112.webp" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h3 class="display-3 text-white animated slideInDown mb-4">Renovation & Remodling</h3>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Home renovation or remodeling services
                                    provided with expert results.</p>
                                <a href="project.blade.php"
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft"><span
                                        style="color: rgb(255, 255, 255);">View Projects</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dynamic-text">
        <b> Expertly Construct And Build <br> Your Vision With
            <span class="replacement" id="replacement"></span>
    </div>

   

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">

                <h5 class="display-5 mb-5"><span style="color: #1591ea;"><br><br>Our Services</span>
            </div>
            <!-- Increase gutter spacing between columns with g-4 -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-3">
                        <div class="btn-square bg-light rounded-circle mb-3 image-hover"
                            style="width: 70px; height: 70px;">
                            <a href="adu.blade.php">
                                <img class="img-fluid" src="img/wephome/ezgif-2-117d8ed6c3.webp" alt="Icon"
                                    style="width: 70px; height: 70px;">
                            </a>
                        </div>
                        <h5 class="mb-2">ADU</h5>
                        <p class="mb-3">"Innovative ADU Design & Construction for Extra Space"</p>
                        <div class="text-start">
                            <a href="{{ route('adu') }}" class="custom-btn">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item border h-100 p-3">
                        <div class="btn-square bg-light rounded-circle mb-3 image-hover"
                            style="width: 70px; height: 70px;">
                            <a href="mdu.blade.php">
                                <img class="img-fluid" src="img/wephome/ezgif-5-23356bdb13.webp" alt="Icon"
                                    style="width: 70px; height: 70px;">
                            </a>
                        </div>
                        <h5 class="mb-2">MDU</h5>
                        <p class="mb-3">"Efficient MDU Development for Modern Living Solutions"</p>
                        <div class="text-start">
                            <a href="{{ route('mdu') }}" class="custom-btn">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-3">
                        <div class="btn-square bg-light rounded-circle mb-3 image-hover"
                            style="width: 70px; height: 70px;">
                            <a href="residential.blade.php">
                                <img class="img-fluid" src="img/wephome/ezgif-5-613f01933b.webp" alt="Icon"
                                    style="width: 70px; height: 70px;">
                            </a>
                        </div>
                        <h5 class="mb-2">Residential</h5>
                        <p class="mb-3">"Residential Building & Remodeling Experts"</p>
                        <div class="text-start">
                            <a href="{{ route('residential') }}" class="custom-btn">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.7s">
                    <div class="service-item border h-100 p-3">
                        <div class="btn-square bg-light rounded-circle mb-3 image-hover"
                            style="width: 70px; height: 70px;">
                            <a href="commercial.blade.php">
                                <img class="img-fluid" src="img/Home icons/Commercial.webp" alt="Icon"
                                    style="width: 70px; height: 70px;">
                            </a>
                        </div>
                        <h5 class="mb-2">Commercial</h5>
                        <p class="mb-3">"Commercial Construction & Renovation Services"</p>
                        <div class="text-start">
                            <a href="{{ route('commercial') }}" class="custom-btn">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.9s">
                    <div class="service-item border h-100 p-3">
                        <div class="btn-square bg-light rounded-circle mb-3 image-hover"
                            style="width: 70px; height: 70px;">
                            <a href="fence.blade.php">
                                <img class="img-fluid" src="img/Home icons/fence-6148694-5024979.png" alt="Icon"
                                    style="width: 70px; height: 70px;">
                            </a>
                        </div>
                        <h5 class="mb-2">Fence</h5>
                        <p class="mb-3">"Reliable Fence Installation & Custom Design Solutions"</p>
                        <div class="text-start">
                            <a href="{{ route('fence') }}" class="custom-btn">More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service End -->



            <!-- About Start -->
            <div class="container-fluid py-6 px-5">
                <div class="row g-5">
                    <div class="col-lg-5 pb-5" style="min-height: 500px;">
                        <div class="position-relative bg-dark-radial h-100 ms-3 larger-image">
                            <img class="position-absolute w-100 h-100 mt-3 ms-n3"
                                src="img/wephome/ezgif-2-a4321ed7e9.webp"
                                alt="Modern luxury house with swimming pool and outdoor kitchen at sunset, showcasing Cresttel's premium residential construction and design services"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7" style="padding-left: 50px;"> <!-- Increased padding-left here -->
                        <h3 class="display-5 text-uppercase mb-4">We are <span class="fading">the Leader</span> in
                            Construction Industry!</h3>
                        <h4 class="text-uppercase mb-3 text-body">About us</h4>
                        <p>With over 20 years of experience, we pride ourselves in delivering top-notch services for
                            both residential and commercial properties. With a wealth of experience under our belt, our
                            skilled team of contractors specializes in custom home building, remodeling projects, and
                            commercial construction endeavors. We are dedicated to achieving excellence and ensuring
                            customer satisfaction, making it a priority to complete every project on schedule and within
                            the agreed budget. Cresttel offers innovative solutions and meticulous attention to detail,
                            making us a standout choice for those seeking excellent construction services. Explore how
                            our Nicheknightss can transform your space with their expert craftsmanship and
                            professionalism.</p>
                        <div class="row gx-5 py-2">
                            <div class="col-sm-6 mb-2">
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning
                                </p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional
                                    Workers</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working
                                    Process</p>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Expert
                                    Coordination</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Skilled
                                    Technicians</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Innovative
                                    Solutions</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- About End -->



        </div>
    </div>


    <div class="stock-ticker">
        <ul>
            <li>
                <span class="company">We are the best construction company</span>
                <span class="price">🚧</span>
                <span class="change">🏗️</span>
            </li>
            <li>
                <span class="company">We are the best in San Diego</span>
                <span class="price">🌆</span>
                <span class="change">✨</span>
            </li>
            <li>
                <span class="company">Quality services at affordable prices</span>
                <span class="price">💰</span>
                <span class="change">✅</span>
            </li>
            <li>
                <span class="company">Experienced professionals</span>
                <span class="price">👷</span>
                <span class="change">🛠️</span>
            </li>
            <li>
                <span class="company">Your satisfaction is our priority</span>
                <span class="price">😊</span>
                <span class="change">🏆</span>
            </li>
            <li>
                <span class="company">Building dreams, one brick at a time</span>
                <span class="price">🏠</span>
                <span class="change">🌟</span>
            </li>
            <li>
                <span class="company">Innovative solutions for every project</span>
                <span class="price">💡</span>
                <span class="change">🚀</span>
            </li>
            <li>
                <span class="company">Let's make it happen together</span>
                <span class="price">🤝</span>
                <span class="change">❤️</span>
            </li>
        </ul>

        <ul>
            <li>
                <span class="company">We are the best construction company</span>
                <span class="price">🚧</span>
                <span class="change">🏗️</span>
            </li>
            <li>
                <span class="company">We are the best in San Diego</span>
                <span class="price">🌆</span>
                <span class="change">✨</span>
            </li>
            <li>
                <span class="company">Quality services at affordable prices</span>
                <span class="price">💰</span>
                <span class="change">✅</span>
            </li>
            <li>
                <span class="company">Experienced professionals</span>
                <span class="price">👷</span>
                <span class="change">🛠️</span>
            </li>
            <li>
                <span class="company">Your satisfaction is our priority</span>
                <span class="price">😊</span>
                <span class="change">🏆</span>
            </li>
            <li>
                <span class="company">Building dreams, one brick at a time</span>
                <span class="price">🏠</span>
                <span class="change">🌟</span>
            </li>
            <li>
                <span class="company">Innovative solutions for every project</span>
                <span class="price">💡</span>
                <span class="change">🚀</span>
            </li>
            <li>
                <span class="company">Let's make it happen together</span>
                <span class="price">🤝</span>
                <span class="change">❤️</span>
            </li>
        </ul>
    </div>

  

    <!-- Quote Request End -->


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
<script src="{{ asset('js/home.js') }}"></script>
</html>
