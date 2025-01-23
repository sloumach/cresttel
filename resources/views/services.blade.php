<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://cresttel.net/{{ route('service') }}">
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
                    alt="Wooden garden fence with vibrant flowers and lush green lawn under a clear blue sky - Cresttel Fencing Services">
                <div class="content">
                    <p>Service</p>
                    <h2>Fence</h2>
                    <p>
                        Enhance your property's security and curb appeal with our fencing services. From fence
                        installation to fence repairs, our experienced team provides reliable solutions for both
                        residential and commercial properties.
                    </p>
                    <button class="link-button"><a href="{{ route('fence') }}">Learn More</a></button>
                </div>
            </div>
            <div class="item">
                <img src="img/ADU_img/blog-2.jpg"
                    alt="Modern backyard office with sleek exterior design, wooden accents, large windows, and landscaped garden - Cresttel construction and renovation services.">
                <div class="content">
                    <p>Service</p>
                    <h2>Accessory Dwelling Units (ADUs)</h2>
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
                    alt="Modern commercial building with American flag at sunset, featuring sleek design and parking accessibility - Cresttel Commercial Services">
                <div class="content">
                    <p>Service</p>
                    <h2>Commercial Construction Services</h2>
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
                    alt="Modern building exterior with sleek design, stone facade, and geometric architecture under clear blue sky - Cresttel Services">
                <div class="content">
                    <p>Service</p>
                    <h2>Multi-Dwelling Units (MDUs)</h2>
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
                    alt="Elegant modern luxury home with lush landscaping, grand entrance, and beautiful exterior - Cresttel residential construction and renovation services.">
                <div class="content">
                    <p>Service</p>
                    <h2>Residential Construction Services</h2>
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
                <img src="img/ADU_img/blog-2.jpg">
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
<script src="{{ asset('js/services.js') }}"></script>



</html>
