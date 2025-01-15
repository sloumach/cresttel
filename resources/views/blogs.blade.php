<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://cresttel.net/BLOGS.html">
    <meta charset="utf-8">
    <title>Tips & Insights for Construction & Renovation | Cresttel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta
        content="Check out the Cresttel Blog for valuable construction tips, remodeling ideas, and San Diego project highlights. Get inspired for your next project."
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
    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/x-icon">
    <!-- or for PNG files -->
    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="cssblog/vendor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <style>
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
    <!-- Time Icon -->

    </div>
    </div>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->


    <style>
        /* Hide close button on larger screens */
        .navbar-close-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #000;
            cursor: pointer;
        }

        @media (max-width: 991.98px) {
            .navbar-close-btn {
                display: block;
                margin-left: auto;
                padding: 0.5rem 1rem;
            }
        }
    </style>
    <!-- JavaScript to handle navbar toggling and closing -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('#navbarCollapse');
            const navbarCloseBtn = document.querySelector('.navbar-close-btn');

            // Toggle the navbar when the toggler is clicked
            navbarToggler.addEventListener('click', function() {
                navbarCollapse.classList.toggle('show');
            });

            // Close the navbar when the close button is clicked
            navbarCloseBtn.addEventListener('click', function() {
                navbarCollapse.classList.remove('show');
            });

            // Optional: Close the navbar when clicking outside
            document.addEventListener('click', function(event) {
                if (
                    !navbarCollapse.contains(event.target) &&
                    !navbarToggler.contains(event.target)
                ) {
                    navbarCollapse.classList.remove('show');
                }
            });
        });
    </script>






    <section id="intro" class="scrollspy-section">
        <div class="main-slider">
            <div class="slider-item jarallax" data-speed="0.2">
                <img src="images/r2.jpg" alt="banner" class="jarallax-img">
                <div class="banner-content">
                    <h2 style="color: #ffffff;" class="banner-title txt-fx">Modern Designs</h2>
                    <div class="btn-wrap">
                        <a href="project.blade.php" class="btn-with-line">View Project</a>
                    </div>
                </div><!--banner-content-->
            </div><!--slider-item-->

            <div class="slider-item jarallax" data-speed="0.2">
                <img src="images/NW Fields_0099 copy.jpg" alt="banner" class="jarallax-img">
                <div class="banner-content">
                    <h2 style="color: #ffffff;" class="banner-title txt-fx">Clean & Minimal</h2>
                    <div class="btn-wrap">
                        <a href="project.blade.php" class="btn-with-line">View Project</a>
                    </div>
                </div><!--banner-content-->
            </div><!--slider-item-->

            <div class="slider-item jarallax" data-speed="0.2">
                <img src="images/main-banner3.jpg" alt="banner" class="jarallax-img">
                <div class="banner-content">
                    <h2 style="color: #ffffff;" class="banner-title txt-fx">Personalize and Customize</h2>
                    <div class="btn-wrap">
                        <a href="project.blade.php" class="btn-with-line">View Project</a>
                    </div>
                </div><!--banner-content-->
            </div><!--slider-item-->
        </div><!--slider-->

        <div class="button-container">
            <button class="prev slick-arrow">
                <i class="icon icon-chevron-thin-left"></i>
            </button>
            <button class="next slick-arrow">
                <i class="icon icon-chevron-thin-right"></i>
            </button>
        </div>
    </section>



    <section id="portfolio" class="scrollspy-section bg-dark padding-large">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <div class="section-header">
                        <div class="title">
                            <span>Some of Our Works</span>
                        </div>
                        <h2 class="section-title light">Our Portfolio</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div id="filters" class="button-group d-flex flex-wrap gap-4 py-5" data-aos="fade-up">
                    <a href="#" class="btn btn-outline-light rounded-pill text-uppercase is-checked"
                        data-filter=".design">Design</a>
                    <a href="#" class="btn btn-outline-light rounded-pill text-uppercase"
                        data-filter=".interior">Interior</a>
                    <a href="#" class="btn btn-outline-light rounded-pill text-uppercase"
                        data-filter=".landscape">Landscape</a>
                    <a href="#" class="btn btn-outline-light rounded-pill text-uppercase"
                        data-filter=".construction">Construction</a>
                </div>

            </div>

            <div class="grid p-0 clearfix row row-cols-2 row-cols-lg-3 row-cols-xl-3" data-aos="fade-up">
                <div class="col mb-4 portfolio-item construction construction ">
                    <a href="images/modern cons/con6.jpg" class="image-link" title="Cresttel Project1."><img
                            src="images/modern cons/con6.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item construction construction">
                    <a href="images/modern cons/con4.jpg" class="image-link" title="Cresttel Project2."><img
                            src="images/modern cons/con4.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item construction">
                    <a href="images/modern cons/con3.jpg" class="image-link" title="Cresttel Project3."><img
                            src="images/modern cons/con3.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item construction">
                    <a href="images/modern cons/con2.jpg" class="image-link" title="Cresttel Projects 4"><img
                            src="images/modern cons/con2.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item interior">
                    <a href="images/modern interior/in2.jpg" class="image-link" title="Cresttel Project5."><img
                            src="images/modern interior/in2.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item design">
                    <a href="images/modern design/d1.jpg" class="image-link" title="Cresttel Project6."><img
                            src="images/modern design/d1.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item design">
                    <a href="images/modern design/d2.jpg" class="image-link" title="Cresttel Project7."><img
                            src="images/modern design/d2.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item design">
                    <a href="images/modern design/d3.jpg" class="image-link" title="Cresttel Project8."><img
                            src="images/modern design/d3.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item design">
                    <a href="images/modern design/d4.jpg" class="image-link" title="Cresttel Project9."><img
                            src="images/modern design/d4.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item design">
                    <a href="images/modern design/d5.jpg" class="image-link"
                        title="Sample Caption goes here for Portfolio Item1 0."><img src="images/modern design/d5.jpg"
                            class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item design">
                    <a href="images/modern design/d6.jpg" class="image-link"
                        title="Sample Caption goes here for Portfolio Item1 1."><img src="images/modern design/d6.jpg"
                            class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item construction">
                    <a href="images/modern cons/con1.jpg" class="image-link"
                        title="Sample Caption goes here for Portfolio Item1 2."><img src="images/modern cons/con1.jpg"
                            class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item interior">
                    <a href="images/modern interior/in3.jpg" class="image-link" title="Cresttel Project1."><img
                            src="images/modern interior/in3.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item landscape">
                    <a href="images/modern landscape/lan6.jpg" class="image-link" title="Cresttel Project2."><img
                            src="images/modern landscape/lan6.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item landscape">
                    <a href="images/modern landscape/lan5.jpg" class="image-link" title="Cresttel Project3."><img
                            src="images/modern landscape/lan5.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item interior">
                    <a href="images/modern interior/in4.jpg" class="image-link" title="Cresttel Projects"><img
                            src="images/modern interior/in4.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item interior">
                    <a href="images/modern interior/in5.jpg" class="image-link" title="Cresttel Project5."><img
                            src="images/modern interior/in5.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item interior">
                    <a href="images/modern interior/in6.jpg" class="image-link" title="Cresttel Project6."><img
                            src="images/modern interior/in6.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item landscape">
                    <a href="images/modern landscape/lan1.jpg" class="image-link" title="Cresttel Project7."><img
                            src="images/modern landscape/lan1.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item landscape">
                    <a href="images/modern landscape/lan2.jpg" class="image-link" title="Cresttel Project8."><img
                            src="images/modern landscape/lan2.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item landscape">
                    <a href="images/modern landscape/lan3.jpg" class="image-link"
                        title="Sample Caption goes here for Portfolio Item1 0."><img
                            src="images/modern landscape/lan3.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item construction">
                    <a href="images/modern cons/con5.jpg" class="image-link"
                        title="Sample Caption goes here for Portfolio Item1 1."><img src="images/modern cons/con5.jpg"
                            class="img-fluid" alt="portfolio"></a>
                </div>
                <div class="col mb-4 portfolio-item landscape">
                    <a href="images/modern landscape/lan4.jpg" class="image-link"
                        title="Sample Caption goes here for Portfolio Item1 2."><img
                            src="images/modern landscape/lan4.jpg" class="img-fluid" alt="portfolio"></a>
                </div>
            </div>

        </div>
    </section>

    <section id="latest-blog" class="scrollspy-section bg-grey padding-large">
        <div class="container">

            <div class="row">

                <div class="col">

                    <div id="adu" class="section-header">
                        <div class="title">
                            <span>read our blog</span>
                        </div>
                        <h2 class="section-title">latest<span style="color: #0783e9;"> ADU</span> blog</h2>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="post-grid">
                        <div class="row">

                            <div class="col-md-4">

                                <article class="post-item">

                                    <figure>
                                        <a href="{{ route('adublog1') }}" class="image-hvr-effect">
                                            <img src="images/ADU1.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>

                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('adublog1') }}">How an Accessory Dwelling
                                                Unit Can Add Value to Your Property?</a></h3>

                                    </div>
                                </article>

                            </div>

                            <div class="col-md-4">

                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('adublog2') }}" class="image-hvr-effect">
                                            <img src="images/ADU2.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('adublog2') }}">Top 5 Benefits of Building
                                                an ADU on Your Property</a></h3>

                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('adublog3') }}" class="image-hvr-effect">
                                            <img src="images/ADU3.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('adublog3') }}">Best Accessory Dwelling
                                                Unit - ADU Features to Consider</a></h3>

                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

            <div class="row">
                <div class="col">


                </div>
            </div>

        </div>
    </section>
    <section id="latest-blog" class="scrollspy-section bg-grey padding-large">
        <div class="container">

            <div class="row">

                <div class="col">

                    <div id="mdu" class="section-header">
                        <div class="title">
                            <span>read our blog</span>
                        </div>
                        <h2 class="section-title">latest <span style="color: #0783e9;"> MDU</span> blog</h2>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="post-grid">
                        <div class="row">

                            <div class="col-md-4">

                                <article class="post-item">

                                    <figure>
                                        <a href="{{ route('mdublog1') }}" class="image-hvr-effect">
                                            <img src="images/MDU1.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>

                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('mdublog1') }}">What Are MDUs and Why Are
                                                They Important?</a></h3>

                                    </div>
                                </article>

                            </div>

                            <div class="col-md-4">

                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('mdublog2') }}" class="image-hvr-effect">
                                            <img src="images/MDU2.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('mdublog2') }}">The Future of MDUs:
                                                Innovations and Emerging Trends
                                            </a></h3>

                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('mdublog3') }}" class="image-hvr-effect">
                                            <img src="images/MDU3.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('mdublog3') }}">Understanding the
                                                Different Types of Multi-Dwelling Units: Which One Is Right for You?</a>
                                        </h3>

                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

            <div class="row">
                <div class="col">


                </div>
            </div>

        </div>
    </section>
    <section id="latest-blog" class="scrollspy-section bg-grey padding-large">
        <div class="container">

            <div class="row">

                <div class="col">

                    <div id="Fence" class="section-header">
                        <div class="title">
                            <span>read our blog</span>
                        </div>
                        <h2 class="section-title">latest <span style="color: #0783e9;"> Fence</span> blog</h2>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="post-grid">
                        <div class="row">

                            <div class="col-md-4">

                                <article class="post-item">

                                    <figure>
                                        <a href="{{ route('fenceblog1') }}" class="image-hvr-effect">
                                            <img src="images/F1.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>

                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('fenceblog1') }}">Choosing the Perfect
                                                Fence for Your Home: A Comprehensive Guide</a></h3>

                                    </div>
                                </article>

                            </div>

                            <div class="col-md-4">

                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('fenceblog2') }}" class="image-hvr-effect">
                                            <img src="images/F2.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('fenceblog2') }}">Top 5 Benefits of
                                                Building a Fence</a></h3>

                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('fenceblog3') }}" class="image-hvr-effect">
                                            <img src="images/F3.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('fenceblog3') }}">How to Build a Proper
                                                Fence: A Comprehensive Guide</a></h3>

                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

            <div class="row">
                <div class="col">


                </div>
            </div>

        </div>
    </section>
    <section id="latest-blog" class="scrollspy-section bg-grey padding-large">
        <div class="container">

            <div class="row">

                <div class="col">

                    <div id="Commercial" class="section-header">
                        <div class="title">
                            <span>read our blog</span>
                        </div>
                        <h2 class="section-title">latest<span style="color: #0783e9;"> Commercial</span> blog</h2>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="post-grid">
                        <div class="row">

                            <div class="col-md-4">

                                <article class="post-item">

                                    <figure>
                                        <a href="{{ route('commercialblog1') }}" class="image-hvr-effect">
                                            <img src="images/comm1.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>

                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('commercialblog1') }}">The Benefits of
                                                Commercial Remodeling</a></h3>

                                    </div>
                                </article>

                            </div>

                            <div class="col-md-4">

                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('commercialblog2') }}" class="image-hvr-effect">
                                            <img src="images/comm2.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('commercialblog2') }}">The Importance of
                                                Regular Maintenance for Commercial Properties</a></h3>

                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('commercialblog3') }}" class="image-hvr-effect">
                                            <img src="images/comm3.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('commercialblog3') }}">Choosing the Right
                                                Contractor for Commercial Renovations</a></h3>

                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

            <div class="row">
                <div class="col">


                </div>
            </div>

        </div>
    </section>
    <section id="latest-blog" class="scrollspy-section bg-grey padding-large">
        <div class="container">

            <div class="row">

                <div class="col">

                    <div id="Residential" class="section-header">
                        <div class="title">
                            <span>read our blog</span>
                        </div>
                        <h2 class="section-title">latest<span style="color: #0783e9;"> Residential</span> blog</h2>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="post-grid">
                        <div class="row">

                            <div class="col-md-4">

                                <article class="post-item">

                                    <figure>
                                        <a href="{{ route('residentialblog1') }}" class="image-hvr-effect">
                                            <img src="images/Resi1.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>

                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('residentialblog1') }}">The Importance of
                                                Regular Home Maintenance</a></h3>

                                    </div>
                                </article>

                            </div>

                            <div class="col-md-4">

                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('residentialblog2') }}" class="image-hvr-effect">
                                            <img src="images/Resi2.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('residentialblog2') }}">Top 5 Home
                                                Renovation Trends for 2024</a></h3>

                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="post-item">
                                    <figure>
                                        <a href="{{ route('residentialblog3') }}" class="image-hvr-effect">
                                            <img src="images/Resi3.jpg" alt="post" class="post-image">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="{{ route('residentialblog3') }}">How to Choose the
                                                Right Flooring for Your Home?</a></h3>

                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

            <div class="row">
                <div class="col">


                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="scrollspy-section bg-dark padding-large">
        <div class="container">

            <div class="row">
                <div class="col-md-6">

                    <div class="left-content">

                        <div class="section-header">
                            <div class="title">
                                <span>Get in touch</span>
                            </div>
                            <h2 class="section-title light">Contact us</h2>
                        </div>

                        <p>If you have any question about our process or company? Let us know how we can help you.</p>

                        @include('contactform')


                    </div>

                </div><!--left-content-->

                <div class="col-md-6">
                    <div class="right-content">

                        <div class="iconbox">
                            <i class="icon icon-location"></i>
                            <div class="detail">
                                <strong>Address:</strong>
                                <p>1662 north magnolia Ave El Cajon, ca 92020</p>
                            </div>
                        </div>

                        <div class="iconbox">
                            <i class="icon icon-phone"></i>
                            <div class="detail">
                                <strong>Phone:</strong>
                                <p>(+1) 619-430-4313</p>
                            </div>
                        </div>
                        <div class="iconbox">
                            <i class="icon icon-mail3"></i>
                            <div class="detail">
                                <strong>Email:</strong>
                                <p><a href="cs@cresttel.net">cs@cresttel.net</a></p>
                            </div>
                        </div>

                    </div>
                </div><!--right-content-->

            </div>

        </div>
    </section>

    <section id="testimonial" class="padding-large">
        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <figure class="jarallax-keep-img testimonial-image" data-speed="0.5">
                        <img src="images/w800x533.jpg" alt="review" class="jarallax-img">
                    </figure>

                </div>

                <div class="col-md-6">

                    <div class="testimonial-block">
                        <div class="section-header">
                            <div class="title">
                                <span>About us </span>
                            </div>
                            <h2 class="section-title">Cresttel</h2>
                        </div>
                        <div class="testimonials-inner">
                            <q>At Cresttel, we pride ourselves on transforming your construction dreams into tangible
                                realities. Our unwavering commitment to quality craftsmanship and timely delivery sets
                                us apart in the industry. Our team of seasoned experts collaborates closely with you to
                                ensure every aspect of your project is executed flawlessly.</q>
                            <div class="testimonial-author">
                                <div class="author-detail">
                                    <div class="name">Services :</div>
                                    <div class="author-title">ADU ,MDU ,Fence ,Commercial ,Residential</div>
                                </div>
                            </div>
                        </div>
                    </div><!--reviews-content-->

                </div>
            </div><!--grid-->

        </div>
    </section>


    </div>
    </div>
    <style>
        /*
                    Template Name: Archi
                    Template URI: https://templatesjungle.com/
                    Author: TemplatesJungle
                    Author URI: https://templatesjungle.com/
                    Description: Archi is specially designed product packaged for Architecture Portfolio by TemplatesJungle.
                    Version: 1.1
                    */

        /*------------------------------------------------

                    CSS STRUCTURE:

                    1. VARIABLES

                    2. GENERAL TYPOGRAPHY
                      2.1 General Styles
                      2.2 Floating & Alignment
                      2.3 Forms
                      2.4 Lists
                      2.5 Code
                      2.6 Tables
                      2.7 Spacing
                      2.8 Utilities
                      2.9 Misc
                      2.10 Buttons
                        - Button Shapes
                        - Button Color Scheme
                      2.11 Images
                        - Image Hover Effects

                    3. EXTENDED TYPOGRAPHY
                      3.1 Blockquote / Pullquote
                      3.2 Dropcap
                      3.3 Text Highlights
                      3.4 Code & Pre

                    4. SITE STRUCTURE
                      4.1 Header
                        - Logo
                        - Header Menu
                        - Dropdown menu
                        - Sticky Header
                        - Header Search Form
                        - Side Nav Bar
                        - Overlay Navigation
                      4.2 Homepage Slider
                      4.3 Section
                        - Hero Section
                        - Section Title
                        - Section Paddings
                        - Section Margins
                        - Section Bg Colors
                        - Content colors
                      4.4 Homepage section
                        - About us
                        - Services
                        - Subscribe
                      4.4 Footer

                    5. CONTENT ELEMENTS
                      5.1 Tabs
                      5.2 Accordions
                      5.3 Contact
                        - Contact form light
                      5.4 Iconboxes
                      5.5 Testimonials
                      5.6 Portfolio Tabs
                      5.7 Post Grid

                    6. BLOG STYLES
                      6.1 Blog Single Post
                      6.2 Post content
                      6.3 About Author
                      6.4 Comments List
                      6.5 Comments Form

                    7. WIDGET STYLES
                      7.1 Gallery Widget

                    ------------------------------------------------*/
        .text-light {
            --bs-text-opacity: 0.6;
        }

        /*--------------------------------------------------------------
                    /** 1. VARIABLES
                    --------------------------------------------------------------*/
        :root {
            /* widths for rows and containers
                         */
            --header-height: 120px;
            --header-height-min: 80px;
        }

        /* on mobile devices below 600px
                     */
        @media screen and (max-width: 600px) {
            :root {
                --header-height: 100px;
                --header-height-min: 80px;
            }
        }

        /* Theme Colors */
        :root {
            --accent-color: #C5A992;
            --dark-color: #2f2f2f;
            --grey-color: #f1f1f1;
            --body-text-color: #757575;
            --light-text-color: #afafaf;
            --dark-text-color: #2f2f2f;
        }

        /* Fonts */
        :root {
            --body-font: "Roboto", sans-serif;
            --heading-font: 'Montserrat', sans-serif;
        }



        h1,
        .h1,
        .h2,
        h3,
        .h3,
        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6 {
            font-family: var(--heading-font);
            font-weight: var(--heading-font-weight);
            color: var(--heading-color);
            line-height: var(--heading-line-height);
        }

        h1.light,
        .h1,
        h2.light,
        .h2,
        h3.light,
        .h3,
        h4.light,
        .h4,
        h5.light,
        .h5,
        h6.light,
        .h6 {
            color: var(--light-color);
        }

        /* container fluid */
        .container-fluid {
            /* width: 98%; */
            max-width: 1800px;
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            --bs-gutter-x: 2.5rem;
        }

        /* Dropdown */
        .dropdown-menu {
            --bs-dropdown-border-radius: 0;
            --bs-dropdown-border-width: 0;
        }

        .dropdown-item {
            --bs-dropdown-item-padding-y: 0.25rem;
            --bs-dropdown-item-padding-x: 1rem;
            --bs-dropdown-link-color: var(--bs-black);
            --bs-dropdown-item-border-radius: 0;
        }



        /* list group */
        .list-group-item {
            --bs-list-group-item-padding-x: 0;
            --bs-list-group-border-width: 0;
        }

        /* btn */
        .btn {
            --bs-btn-border-radius: 0;
        }

        .btn-primary {
            --bs-btn-color: #0783e9;
            --bs-btn-bg: #8C907E;
            --bs-btn-border-color: #8C907E;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #5e624e;
            --bs-btn-hover-border-color: #5e624e;
            --bs-btn-focus-shadow-rgb: 49, 132, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #5e624e;
            --bs-btn-active-border-color: #5e624e;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #8C907E;
            --bs-btn-disabled-border-color: #8C907E;
        }

        .btn-outline-primary {
            --bs-btn-color: var(--bs-primary);
            --bs-btn-border-color: var(--bs-primary);
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: var(--bs-primary);
            --bs-btn-hover-border-color: var(--bs-primary);
            --bs-btn-focus-shadow-rgb: 13, 110, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: var(--bs-primary);
            --bs-btn-active-border-color: var(--bs-primary);
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: var(--bs-primary);
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: var(--bs-primary);
            --bs-gradient: none;
        }

        .pagination {
            --bs-pagination-active-bg: var(--bs-black);
            --bs-pagination-border-width: 0;
            --bs-pagination-border-radius: 0;
        }

        /* breadcrumb */
        .breadcrumb {
            --bs-breadcrumb-item-padding-x: 1em;
        }

        /* text white */
        .text-white {
            --heading-color: var(--bs-light);
            --bs-breadcrumb-item-active-color: var(--bs-light);
            --bs-breadcrumb-divider-color: var(--bs-light);
            --bs-link-color-rgb: var(--bs-light-rgb);
            --bs-link-hover-color-rgb: var(--bs-light-rgb);
        }





        /* form control */
        .form-control:focus {
            border-color: #ccc;
            box-shadow: 0 0 0 0.25rem rgba(200, 200, 200, .25);
        }

        /* dark theme */
        [data-bs-theme=dark] body {
            color-scheme: dark;

            --heading-color: #fff;
            --bs-link-color: #fff;
            --bs-link-hover-color: #fff;
            --bs-link-color-rgb: 255, 255, 255;
            --bs-link-hover-color-rgb: 255, 255, 255;
            --bs-body-color: #d1d1d1;
            --bs-body-bg: #111;
            --bs-body-bg-rgb: 17, 17, 41;
        }

        [data-bs-theme=dark] .dropdown-item {
            --bs-dropdown-link-color: var(--bs-light);
            --bs-dropdown-link-hover-color: var(--bs-white);
        }

        [data-bs-theme=dark] .bg-white,
        [data-bs-theme=dark] .bg-light {
            --bs-bg-opacity: 0.1;
        }

        [data-bs-theme=dark] .btn-link,
        [data-bs-theme=dark] a {
            --bs-link-color: #fff;
            --bs-link-hover-color: #fff;
            --bs-link-color-rgb: 255, 255, 255;
            --bs-link-hover-color-rgb: 255, 255, 255;
        }

        [data-bs-theme=dark] h1,
        [data-bs-theme=dark] h2,
        [data-bs-theme=dark] h3,
        [data-bs-theme=dark] h4,
        [data-bs-theme=dark] h5,
        [data-bs-theme=dark] h6 {
            --heading-color: #fff;
        }

        /* end of Bootstrap Color Theme */
        /*----------------------------------------------*/
        /* 2 GENERAL TYPOGRAPHY */
        /*----------------------------------------------*/

        /* 2.1 General Styles
                    /*----------------------------------------------*/
        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }



        a {
            color: #111;
            text-decoration: none;
        }

        a:hover {
            color: #111;
            text-decoration: none;
        }

        ul,
        ol {
            margin-top: 0;
            margin-bottom: 10px;
            margin-left: 0;
        }

        ul ul,
        ol ul,
        ul ol,
        ol ol {
            margin-top: 5px;
            margin-bottom: 0;
        }

        ul li,
        ol li {
            margin-bottom: 5px;
            outline: 0;
        }

        ul li.active a {
            color: #daa556;
        }

        ul li:last-child,
        ol li:last-child {
            margin-bottom: 0;
        }

        dl {
            margin-top: 0;
            margin-bottom: 2rem;
        }

        dt,
        dd {
            line-height: 1.42857143;
        }

        dt {
            font-weight: bold;
        }

        dd {
            margin-left: 0;
        }

        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            outline: 0;
        }

        figure {
            margin: 0;
        }

        img {
            display: inline-block;
            border: 0;
            max-width: 100%;
            height: auto;
            vertical-align: middle;
        }

        ::selection {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-shadow: none;
        }

        ::-moz-selection {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-shadow: none;
        }

        /* image align */
        figure.align-right {
            margin: 30px 0 30px 30px;
        }

        /* Typography */
        /*----------------------------------------------*/

        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3,
        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6 {
            font-weight: 700;
            line-height: 1.2;
            color: var(--dark-color);
        }

        h1.light,
        .h1,
        h2.light,
        .h2,
        h3.light,
        .h3,
        h4.light,
        .h4,
        h5.light,
        .h5,
        h6.light,
        .h6 {
            color: #fff;
        }

        h1,
        h2,
        h3 {
            margin: 0 0 25px;
            text-transform: capitalize;
        }

        h5,
        h6 {
            letter-spacing: 1px;
        }

        h1,
        .h1 {
            font-size: 2.5em;
            line-height: 1.4;
        }

        h2,
        .h2 {
            font-size: 1.5em;
            line-height: 1.4;
        }

        h3,
        .h3 {
            font-size: 1.4em;
            line-height: 1.4;
        }

        h4,
        .h4 {
            font-size: 1.1em;
            line-height: 1.4;
        }

        h5,
        .h5 {
            font-size: .83em;
            line-height: 1.25;
        }

        h6,
        .h6 {
            font-size: .67em;
            line-height: 1.1;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            font-weight: inherit;
            color: inherit;
            text-decoration: none;
        }

        p {
            margin: 0 0 20px 0;
        }

        p:empty {
            display: none;
        }

        small {
            font-size: 85%;
        }

        mark {
            background-color: #fcf8e3;
            padding: 0.28rem;
        }

        dfn,
        cite,
        em,
        i {
            font-style: italic;
        }

        code,
        kbd,
        var {
            font-size: 14px;
        }

        code {
            background-color: #f9f2f4;
        }

        abbr {
            border-bottom: 0.1px dotted #666;
            cursor: help;
        }

        ::placeholder {
            color: #999;
        }

        /*----------------------------------------------*/
        /* 2.1 Floating & Alignment */
        /*----------------------------------------------*/

        .align-left {
            float: left;
            text-align: left;
        }

        .align-right {
            float: right;
            text-align: right;
        }

        .align-center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        /**::after,*/
        .container::after,
        .row::after,
        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        /** Text Align
                    --------------------------------------------------------------*/

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-justify {
            text-align: justify;
        }

        .text-nowrap {
            white-space: nowrap;
        }

        .text-lead {
            font-size: 120%;
            line-height: 1.7em;
        }

        .text-lead strong {
            font-size: 115%;
            font-weight: 500;
        }

        .text-muted {
            color: #777;
        }

        .text-pri {
            color: #ff9697;
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        /*------------------------------------------------
                    /* 2.3 Forms
                    –––––––––––––––––––––––––––––––––––––––––––––––––– */
        input[type="email"],
        input[type="number"],
        input[type="search"],
        input[type="text"],
        input[type="tel"],
        input[type="url"],
        input[type="password"],
        textarea,
        select {
            height: 38px;
            padding: 6px 10px;
            /* The 6px vertically centers text on FF, ignored by Webkit */
            background-color: #fff;
            border: 1px solid #D1D1D1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box;
        }

        /* Removes awkward default styles on some inputs for iOS */
        input[type="email"],
        input[type="number"],
        input[type="search"],
        input[type="text"],
        input[type="tel"],
        input[type="url"],
        input[type="password"],
        textarea {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        textarea {
            min-height: 65px;
            padding-top: 6px;
            padding-bottom: 6px;
        }

        input[type="email"]:focus,
        input[type="number"]:focus,
        input[type="search"]:focus,
        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        textarea:focus,
        select:focus {
            border: 1px solid #33C3F0;
            outline: 0;
        }

        label,
        legend {
            display: block;
            margin-bottom: .5rem;
            font-weight: 600;
        }

        fieldset {
            padding: 0;
            border-width: 0;
        }

        input[type="checkbox"],
        input[type="radio"] {
            display: inline;
        }

        label>.label-body {
            display: inline-block;
            margin-left: .5rem;
            font-weight: normal;
        }

        /*------------------------------------------------
                    /* 2.4 Lists
                    –––––––––––––––––––––––––––––––––––––––––––––––––– */
        ul {
            list-style: circle inside;
        }

        ol {
            list-style: decimal inside;
        }

        ol,
        ul {
            padding-left: 0;
            margin-top: 0;
        }

        ul ul,
        ul ol,
        ol ol,
        ol ul {
            margin: 1.5rem 0 1.5rem 3rem;
            font-size: 90%;
        }

        li {
            margin-bottom: 1rem;
        }

        /*------------------------------------------------
                    /* 2.5 Code
                    –––––––––––––––––––––––––––––––––––––––––––––––––– */
        code {
            padding: .2rem .5rem;
            margin: 0 .2rem;
            font-size: 90%;
            white-space: nowrap;
            background: #F1F1F1;
            border: 1px solid #E1E1E1;
            border-radius: 4px;
        }

        pre>code {
            display: block;
            padding: 1rem 1.5rem;
            white-space: pre;
        }

        /*------------------------------------------------
                    /* 2.6 Tables
                    –––––––––––––––––––––––––––––––––––––––––––––––––– */
        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #E1E1E1;
        }

        th:first-child,
        td:first-child {
            padding-left: 0;
        }

        th:last-child,
        td:last-child {
            padding-right: 0;
        }

        /*------------------------------------------------
                    /* 2.7 Spacing
                    –––––––––––––––––––––––––––––––––––––––––––––––––– */
        button,
        .button {
            margin-bottom: 1rem;
        }

        input,
        textarea,
        select,
        fieldset {
            margin-bottom: 1.5rem;
        }

        pre,
        blockquote,
        dl,
        figure,
        table,
        p,
        ul,
        ol,
        form {
            margin-bottom: 2.5rem;
        }

        /*------------------------------------------------
                    /* 2.8 Utilities
                    –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .u-full-width {
            width: 100%;
            box-sizing: border-box;
        }

        .u-max-full-width {
            max-width: 100%;
            box-sizing: border-box;
        }

        .u-pull-right {
            float: right;
        }

        .u-pull-left {
            float: left;
        }

        .list-icon i {
            margin-right: 10px;
        }

        .list-unstyled {
            list-style: none;
        }

        .txt-fx .letter {
            opacity: 0;
        }

        /*------------------------------------------------
                    /* 2.9 Misc
                    –––––––––––––––––––––––––––––––––––––––––––––––––– */
        hr {
            margin-top: 3rem;
            margin-bottom: 3.5rem;
            border-width: 0;
            border-top: 1px solid #E1E1E1;
        }

        /*--------------------------------------------------------------
                    /** 2.10 Buttons
                    --------------------------------------------------------------*/
        a.btn,
        input[type="button"],
        input[type="submit"],
        input[type="reset"],
        input[type="file"],
        button {
            background-image: none;
            background: var(--accent-color);
            text-decoration: none !important;
            display: inline-block;
            position: relative;
            border: 1px solid transparent;
            border-radius: 0;
            padding: 0.75em 1.5em;
            margin-top: 15px;
            font-size: 15px;
            font-weight: bold;
            line-height: normal;
            text-align: center;
            text-transform: uppercase;
            color: #fff;
            z-index: 1;
            cursor: pointer;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-transition: all 0.3s ease-in;
            transition: all 0.3s ease-in;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .btn:hover,
        .btn:focus,
        input[type="button"]:focus,
        input[type="button"]:hover,
        input[type="submit"]:focus,
        input[type="submit"]:hover,
        input[type="reset"]:focus,
        input[type="reset"]:hover,
        input[type="file"]:focus,
        input[type="file"]:hover,
        button:focus,
        button:hover {
            text-decoration: none;
            outline: 0;
        }

        .light .btn:hover {
            color: #fff;
        }

        .btn:last-child {
            margin-right: 0;
        }


        .btn.disabled,
        .btn[disabled],
        fieldset[disabled] .btn {
            cursor: not-allowed;
            opacity: 0.65;
            box-shadow: none;
        }

        a.btn.disabled,
        fieldset[disabled] a.btn {
            pointer-events: none;
        }

        /* - Button Sizes
                    ------------------------------------------------------------- */
        .btn.btn-small {
            padding: 0.325em 1.7em;
            font-size: 0.65em;
        }

        .btn.btn-medium {
            padding: 0.5em 1.75em;
            font-size: 0.75em;
        }

        .btn.btn-large {
            padding: 1em 2.5em;
        }

        .btn.btn-xlarge {
            padding: 1.5em 2.7em;
            font-size: 0.9em;
        }

        .btn.btn-image {
            background-color: transparent;
            padding: 0;
            max-height: 50px;
        }

        .btn.btn-image img {
            max-height: 50px;
        }

        /* - Button Shapes
                    ------------------------------------------------------------- */
        .btn.btn-rounded,
        .btn.btn-rounded::after {
            border-radius: 4px;
        }

        .btn.btn-pill,
        .btn.btn-pill::after {
            border-radius: 2em;
        }

        /* button outline */
        .btn.btn-outline-dark,
        .btn.btn-outline-light,
        .btn.btn-outline-accent {
            background: transparent;
            text-shadow: none;
            box-shadow: none;
        }

        .btn.btn-outline-dark:hover::after,
        .btn.btn-outline-light:hover::after {
            background-color: transparent;
        }

        .btn.btn-outline-dark {
            border-color: rgba(0, 0, 0, 0.3);
            color: #121212;
        }

        .btn.btn-outline-dark:hover {
            background: rgba(0, 0, 0, .03);
            background: #121212;
            border-color: #121212;
            color: #fff;
        }

        .btn.btn-outline-light {
            border-color: rgba(255, 255, 255, 0.5);
            color: #fff;
        }

        .btn.btn-outline-light:hover {
            background: rgba(255, 255, 255, .045);
            background: #fff;
            border-color: #fff;
            color: #121212;
        }

        .btn.btn-outline-accent {
            background: transparent;
            border-color: #c59d5f;
            color: #c59d5f;
        }

        .btn.btn-outline-accent:hover {
            border-color: var(--dark-color);
            color: var(--dark-color) !important;
        }

        .btn.btn-outline-light {
            background: transparent;
            border-color: #f4ebf2;
            color: #f4ebf2;
        }

        .btn.btn-outline-light:hover {
            border-color: var(--accent-color);
            color: var(--accent-color) !important;
        }

        .btn.btn-full {
            display: block;
            margin: .85em 0;
            width: 100%;
            text-align: center;
        }

        /* button with line */
        .btn-with-line {
            color: #fff;
            position: relative;
        }

        .btn-with-line:after {
            content: "";
            position: absolute;
            top: 8px;
            right: -66px;
            border-bottom: 2px solid #fff;
            width: 50%;
            z-index: 9;
            transition: 0.3s ease-out;
        }

        .btn-with-line:hover {
            color: #2169d4;
        }

        .btn-with-line:hover:after {
            width: 30%;
            right: -41px;
        }

        /* - Buttons Color Scheme
                    ------------------------------------------------------------- */
        .btn.btn-common {
            background: var(--accent-color);
            color: #2a55ca;
        }

        .btn.btn-common:hover {
            background: #151515;
            color: #fff;
        }

        .btn.btn-accent {
            color: #ffffff;
            background-color: var(--accent-color);
        }

        .btn.btn-accent:hover {
            color: #ffffff !important;
            background-color: #121212;
        }

        .btn.btn-gray,
        .btn.btn-grey {
            background: #4463ee;
            color: #fff;
        }

        .btn.btn-black {
            background: #121212;
            color: #fff;
        }

        .btn.btn-black:hover {
            background-color: #21638f;
        }

        .btn.btn-white {
            background: #2e72c0;
            text-shadow: none;
            color: #121212 !important;
        }

        .btn.btn-white:hover {
            background: var(--accent-color);
            text-shadow: none;
        }

        /* - Buttons Aligns
                    ------------------------------------------------------------- */
        .btn-left {
            text-align: left;
            display: block;
        }

        .btn-center {
            text-align: center;
            display: block;
        }

        .btn-right {
            text-align: right;
            display: block;
        }

        /*----------------------------------------------*/
        /* 2.11 Images */
        /*----------------------------------------------*/

        /* Image hover Effects */
        .image-hvr-effect {
            display: flex;
            overflow: hidden;
        }

        .image-hvr-effect img.post-image {
            transform: scale(1.1);
            will-change: transform;
            transition: transform 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 0;
        }

        .image-hvr-effect:hover img.post-image {
            transform: scale(1);
        }


        /*====================================================================*/
        /* 3. EXTENDED TYPOGRAPHY */
        /*====================================================================*/
        /*----------------------------------------------*/
        /* 3.1 Blockquote /Pullquote */
        /*----------------------------------------------*/
        .single-post .content p:first-child,
        .quote blockquote,
        blockquote,
        .single-post .content blockquote p,
        .pullquote-right,
        .pullquote-left {
            font-size: 27px;
            line-height: 1.4em;
            font-style: italic;
            margin: 0 0 60px;
            padding: 0;
        }

        .pullquote-right,
        .pullquote-left {
            width: 40%;
        }

        blockquote cite {
            display: block;
            font-size: 0.8em;
            margin-top: 20px;
            font-style: italic;
        }

        .pullquote-left {
            float: left;
            margin: 20px 20px 20px 0;
        }

        .pullquote-right {
            float: right;
            margin: 20px 0 20px 20px;
        }







        /*----------------------------------------------*/
        /* 4. SITE STRUCTURE */
        /*----------------------------------------------*/
        /*--------------------------------------------------------------
                    This is main CSS file that contains custom style rules used in this template
                    --------------------------------------------------------------*/
        /* preloader */
        .preloader {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: var(--dark-color);
            z-index: 9999;
        }





        /* 4.2 Homepage Slider
                    --------------------------------------------------------------*/
        #intro {
            position: relative;
        }

        .main-slider .slick-slide {
            height: 90vh;
        }

        .main-slider .slider-item {
            position: relative;
        }

        .main-slider .banner-content {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            width: 50%;
            text-align: center;
            margin: 0 auto;
            margin-top: 300px;
        }

        .main-slider .banner-content h2.banner-title {
            font-family: var(--heading-font);
            font-size: 5.5em;
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;

        }

        #intro .button-container {
            display: flex;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        #intro .button-container button.slick-arrow {
            font-size: 1.6em;
            line-height: 0;
            font-weight: 900;
            color: #fff;
            background: var(--dark-color);
            padding: 20px;
            margin: 0;
        }

        #intro .button-container button.slick-arrow:hover,
        #intro .button-container button.slick-arrow:focus {
            background: var(--accent-color);
            outline: none;
        }

        @media only screen and (max-width: 1600px) {
            .main-slider .banner-content .btn-wrap {
                margin: 30px 0;
            }

            .main-slider .banner-content {
                margin-top: 200px;
            }
        }

        @media only screen and (max-width: 1399px) {
            .main-slider .banner-content h2.banner-title {
                font-size: 4.5em;
            }
        }

        @media only screen and (max-width: 1199px) {
            .main-slider .banner-content {
                margin-top: 150px;
            }

            .main-slider .banner-content h2.banner-title {
                font-size: 4em;
            }
        }

        @media only screen and (max-width: 999px) {
            .main-slider .banner-content {
                margin-top: 100px;
            }

            .main-slider .banner-content h2.banner-title {
                font-size: 3.5em;
            }
        }

        @media only screen and (max-width: 876px) {
            .main-slider .banner-content h2.banner-title {
                font-size: 3em;
            }
        }

        @media only screen and (max-width: 753px) {
            .main-slider .banner-content h2.banner-title {
                font-size: 3em;
            }

            #intro .button-container {
                bottom: 0;
            }
        }

        @media only screen and (max-width: 580px) {
            .main-slider .banner-content {
                margin-top: 180px;
            }

            .main-slider .banner-content {
                width: 90%;
            }

            .main-slider .slider-item {
                height: 500px;
            }

            .main-slider .slider-item img {
                height: 100%;
                max-width: fit-content;
            }
        }

        /*----------------------------------------------*/
        /* 4.3 Section */
        /*----------------------------------------------*/
        /* Hero section
                    /*----------------------------------------------*/


        .hero-section .hero-content {
            padding-top: 12em;
            padding-bottom: 6em;
        }


        /*--- Section Title
                    -----------------------------------------------*/
        .section-header {
            position: relative;
        }

        .section-title {
            font-size: 3.8em;
            font-size: calc(1.8em + 2vw);
            line-height: 1;
            font-weight: 900;
        }

        .section-header .title span {
            font-size: 14px;
            color: #afafaf;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding-left: 30px;
            position: relative;
        }

        .section-header span:before {
            content: "";
            border-bottom: 2px solid var(--accent-color);
            position: absolute;
            top: 9px;
            left: 3px;
            width: 14px;
            align-items: center;
        }

        /* - Section Padding
                    --------------------------------------------------------------*/
        .padding-xsmall {
            padding-top: 0.5em;
            padding-bottom: 0.5em;
        }

        .padding-small {
            padding-top: 2em;
            padding-bottom: 2em;
        }

        .padding-medium {
            padding-top: 4em;
            padding-bottom: 4em;
        }

        .padding-large {
            padding-top: 7em;
            padding-bottom: 7em;
        }

        .padding-xlarge {
            padding-top: 9.5em;
            padding-bottom: 9.5em;
        }

        .padding-2xlarge {
            padding-top: 15em;
            padding-bottom: 15em;
        }

        @media only screen and (max-width: 768px) {

            .padding-small,
            .padding-medium,
            .padding-large,
            .padding-xlarge {
                padding-top: 2em;
                padding-bottom: 2em;
            }
        }

        /* - Section margin
                    --------------------------------------------------------------*/
        .margin-small {
            margin-top: 3em;
            margin-bottom: 3em;
        }

        .margin-medium {
            margin-top: 4.5em;
            margin-bottom: 4.5em;
        }

        .margin-large {
            margin-top: 6em;
            margin-bottom: 6em;
        }

        .margin-xlarge {
            margin-top: 7.5em;
            margin-bottom: 7.5em;
        }

        @media only screen and (max-width: 768px) {

            .margin-small,
            .margin-medium,
            .margin-large,
            .margin-xlarge {
                margin-top: 1em;
                margin-bottom: 1em;
            }
        }

        /* - Section bg colors
                    --------------------------------------------------------------*/
        .bg-dark {
            background: var(--dark-color);
        }

        .bg-grey {
            background: var(--grey-color);
        }

        .content-light a,
        .content-light {
            color: #fff;
        }

        /*----- About us Section
                    --------------------------------------------------------------*/
        #about figure {
            margin-right: 50px;
        }

        #about img.single-image {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        @media only screen and (max-width: 768px) {
            #about img.single-image {
                height: auto;
            }
        }


        /*--------------------------------------------------------------
                    /** 5.3 Contact
                    --------------------------------------------------------------*/
        /* contact section */
        #contact .left-content {
            padding-right: 100px;
        }

        #contact .right-content {
            width: 100%;
            background: #fff;
            padding: 88px 83px;
        }

        @media only screen and (max-width: 1170px) {
            #contact .left-content {
                margin-right: 60px;
            }
        }

        @media only screen and (max-width: 999px) {
            #contact .left-content {
                margin-right: 10px;
            }

            #contact input[type="text"],
            #contact textarea {
                width: 420px;
            }

            #contact .right-content {
                padding: 60px;
            }
        }

        @media only screen and (max-width: 820px) {
            #contact .grid {
                flex-wrap: wrap;
            }

            #contact input[type="text"],
            #contact textarea {
                width: 100%;
            }

            #contact .left-content {
                margin-right: 0;
                padding-right: 0;
            }

            #contact .right-content {
                width: 100%;
                padding: 40px;
                margin-top: 40px;
            }
        }

        /* Contact form light
                    --------------------------------------------------------------*/
        .form-light {
            margin-bottom: 0;
        }

        .form-light p {
            margin-bottom: 0;
        }

        .form-light input[type="text"],
        .form-light input[type="email"],
        .form-light textarea {
            width: 100%;
            height: 54px;
            color: #ccc;
            font-style: italic;
            background: none;
            border: 1px solid #666;
            padding-left: 25px;
            margin-bottom: 20px;
        }

        .form-light ::-webkit-input-placeholder {
            color: #999;
        }

        .form-light :-ms-input-placeholder {
            color: #999;
        }

        .form-light textarea {
            height: 118px;
            color: #ccc;
            padding-top: 20px;
        }

        .form-light .error {
            color: #cf4f4f;
        }

        /* 5.4 Iconboxes
                    --------------------------------------------------------------*/
        .iconbox {
            display: flex;
        }

        .iconbox i.icon {
            font-size: 2em;
            color: var(--dark-color);
            margin-right: 25px;
        }

        .iconbox .detail {
            margin-bottom: 60px;
        }

        .iconbox .detail p {
            margin-bottom: 0;
        }

        .iconbox strong {
            font-size: 1.25em;
            color: var(--dark-color);
            text-transform: uppercase;
        }

        /* 5.5 Testimonials
                    --------------------------------------------------------------*/
        /*img.review-image {
                        width: 90%;
                        height: 484px;
                        object-fit: cover;
                    }*/
        .testimonial-image {
            height: 484px;
            margin-right: 60px;
        }

        .testimonial-block {
            margin-top: 50px;
        }

        .testimonial-block .testimonials-inner q {
            font-family: "playfair display";
            font-size: 1.25em;
            line-height: 2;
            display: block;
            margin-bottom: 45px;
        }

        .testimonial-block .testimonial-author .name {
            font-size: 1.4em;
            font-weight: 900;
        }

        @media only screen and (max-width: 580px) {
            img.review-image {
                width: 100%;
                height: auto;
            }
        }


        /*--------------------------------------------------------------
                    /** 5.7 Post Grid
                    --------------------------------------------------------------*/
        .post-grid .post-item figure {
            margin-bottom: 0;
        }

        .post-grid .post-content {
            width: 100%;
            padding: 40px 30px;
            margin-bottom: 60px;
            box-shadow: -7px 12px 41px -10px rgb(0 0 0 / 12%);
            -webkit-box-shadow: -7px 12px 41px -10px rgb(0 0 0 / 12%);
            -moz-box-shadow: -7px 12px 41px -10px rgba(0, 0, 0, 0.12);
            cursor: pointer;
        }

        .post-grid .post-item .post-title {
            font-size: 1.4em;
            line-height: 1.4;
        }

        .post-grid .post-item .meta-date {
            font-size: 14px;
            padding-bottom: 20px;
        }

        .post-grid .post-item p {
            line-height: 2;
        }

        @media only screen and (max-width: 850px) {
            .post-grid .post-item .post-image {
                width: 100%;
            }

            .post-grid .post-content {
                padding: 40px 50px;
            }

            .post-grid .post-item .post-title {
                font-size: 1.8em;
            }
        }

        /*====================================================================*/
        /* 6. BLOG STYLES */
        /*====================================================================*/

        /* 6.1 Blog Single Post
                    ------------------------------------------*/
        /* breadcrumbs */
        .breadcrumbs span {
            display: inline-block;
        }

        /* 6.3 About Author
                    ------------------------------------------*/
        .author-post {
            padding-left: 30px;
        }

        .author-post h4 {
            font-weight: 500;
            text-transform: none;
        }

        /* 6.4 Comments List
                    ------------------------------------------*/
        .comment-meta span.meta-date {
            font-size: 13px;
            padding-right: 10px;
        }

        .comments-wrap .child-comments {
            padding-left: 50px;
        }

        /* 6.5 Comments Form
                    ------------------------------------------*/
        .comment-respond .comment-form {
            display: flex;
        }

        /*====================================================================*/
        /* 7. WIDGETS */
        /*====================================================================*/

        /* 7.1 Gallery Widget
                    --------------------------------------------------------------*/
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery a {
            margin: 0 10px 10px 0;
        }

        .gallery img.gallery-image {
            width: 68px;
            height: 68px;
            object-fit: cover;
            margin-bottom: 5px;
        }

        .parallax-wrap {
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .parallax-wrap .parallax-image {
            position: absolute;
        }

        html,
        body {
            height: 100%;
            margin: 0;
        }

        .container-fluid.bg-dark {
            position: relative;
            width: 100%;
            bottom: 0;
            margin-top: auto;
            max-width: 100%;
            box-sizing: border-box;
        }

        /* Reset link styles for the footer */
        .footer a {
            color: inherit;
            /* Inherit the text color from the parent */
            text-decoration: none;
            /* Remove underline */
            background: none;
            /* Remove background effects */
            border: none;
            /* Remove border */
        }

        /* Prevent hover effects */
        .footer a:hover,
        .footer a:focus,
        .footer a:active {
            color: inherit;
            /* Maintain the inherited text color */
            background: none;
            /* No background change */
            border: none;
            /* No border change */
            text-decoration: none;
            /* No underline on hover */
        }

        /* Adjust copyright section font size */
        .copyright-text {
            font-size: 0.875rem;
            /* Matches typical footer option size (14px) */
            color: #6c757d;
            /* Matches secondary text color in footer */
        }

        .copyright-text a {
            text-decoration: none;
            /* Removes underline */
            color: #fff;
            /* White text for links */
        }

        .copyright-text a:hover {
            color: #1591ea;
            /* Link hover color to match footer style */
        }

        /* Footer and Copyright shared styles */
        .footer,
        .copyright {
            background-color: #000000;
            /* Black background */
            color: #6c757d;
            /* Secondary text color */
            width: 1000%;
            /* Full width */
            margin: 0;
            /* Remove gaps */
            padding: 20px 0;
            /* Match padding with footer */
        }

        /* Links inside footer and copyright */
        .footer a,
        .copyright a {
            text-decoration: none;
            /* Remove underline */
            color: #ffffff;
            /* White text for links */
        }

        .footer a:hover,
        .copyright a:hover {
            color: #1591ea;
            /* Hover color */
        }
    </style>
    <script src="jsblog/jquery-1.11.0.min.js"></script>
    <script src="jsblog/ui-easing.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="jsblog/plugins.js"></script>
    <script src="jsblog/script.js"></script>


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


    <!-- Floating Bubble -->
    <div class="floating-bubble" id="bubble">
        <div class="bubble-content" id="bubbleContent">
            <a href="#adu">ADU</a>
            <a href="#mdu">MDU</a>
            <a href="#Fence">Fence</a>
            <a href="#Commercial">Commercial</a>
            <a href="#Residential">Residential</a>
        </div>
        <div class="bubble-icon">☰</div>
    </div>
    <style>
        /* Floating Bubble Style */
        .floating-bubble {
            position: fixed;
            bottom: 80px;
            /* Slightly above the "scroll to top" arrow */
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #007bff;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 1000;
        }

        .floating-bubble .bubble-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(255, 255, 255);
            font-size: 24px;
            height: 100%;
        }

        .bubble-content {
            display: none;
            position: absolute;
            bottom: 60px;
            right: 0;
            background-color: #1591ea;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
            z-index: 1000;
        }

        .bubble-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #0a0000;
            font-size: 14px;
            border-bottom: 1px solid #ddd;
        }

        .bubble-content a:last-child {
            border-bottom: none;
        }

        .bubble-content a:hover {
            background-color: #f0f0f0;
        }

        /* Scroll-to-top arrow placeholder */
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background-color: #555;
            color: white;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 999;
        }
    </style>
    <script>
        // Toggle Bubble Menu
        const bubble = document.getElementById('bubble');
        const bubbleContent = document.getElementById('bubbleContent');

        bubble.addEventListener('click', () => {
            const isOpen = bubbleContent.style.display === 'block';
            bubbleContent.style.display = isOpen ? 'none' : 'block';
        });

        // Close menu when clicking outside
        document.addEventListener('click', (event) => {
            if (!bubble.contains(event.target)) {
                bubbleContent.style.display = 'none';
            }
        });
    </script>
    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div style="background: #000000; color: white; width: 100%; margin: 0; padding: 0;">
        <div class="container py-2">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#" style="color: white;">Cresttel</a>,
                    <span style="color: #1591ea;">All Right Reserved</span>.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span style="color: #1591ea;">Distributed By</span>
                    <a class="border-bottom" href="contact.html" style="color: white;">Nicheknights</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            margin-top: auto;
            /* Pushes the footer to the bottom of the content */

        }
    </style>

    <!-- Back to Top -->
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


</html>
