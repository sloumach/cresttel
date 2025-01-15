<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://cresttel.net/project.blade.php">
    <meta charset="utf-8">
    <title>Cresttel's construction & Remodeling Projects in San Diego</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="construction" name="keywords">
    <meta content="Remodeling" name="keywords">
    <meta content="San Diego" name="keywords">
    <meta content="View our portfolio of projects in San Diego, completed by Cresttel's expert team. Quality and attention to detail in every construction and remodeling job." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

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

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            background-color: #1c1c1c; /* Match your website's background */
            padding: 20px;
            flex-wrap: wrap; /* Allow wrapping for smaller screens */
        }
    
        .icon-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #1591ea;
            flex: 1; /* Allow even spacing */
            min-width: 250px; /* Prevent collapsing too much on smaller screens */
        }
    
        .icon {
            width: 24px;
            height: 24px;
            display: inline-block;
        }
    
        .text {
            font-family: Arial, sans-serif;
            color: #ffffff; /* Adjust text color */
            font-size: 14px; /* Adjust text size for smaller screens */
        }
    
        /* Responsive styles for smaller screens */
        @media (max-width: 768px) {
            .icon-container {
                flex-direction: column;
                align-items: center; /* Center items */
            }
    
            .icon-wrapper {
                justify-content: center;
                text-align: center;
            }
    
            .text {
                font-size: 12px; /* Slightly smaller text */
            }
        }
    </style>
    
    <div class="icon-container">
        <!-- Location Icon -->
        <div class="icon-wrapper">
            <div class="icon">
                <!-- Use an SVG path for a location icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                </svg>
            </div>
            <div class="text">1662 North Magnolia Ave, El Cajon, CA 92020</div>
        </div>
    
        <!-- Email Icon -->
        <div class="icon-wrapper">
            <div class="icon">
                <!-- Use an SVG path for an email icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12.713l-11.713-7.021c-.242-.145-.287-.475-.09-.688l.033-.033c.199-.221.534-.232.78-.024l11.287 6.928 11.287-6.928c.246-.208.581-.197.78.024l.033.033c.197.213.152.543-.09.688l-11.713 7.021zm11.944-6.713c-.063-.019-.129-.033-.194-.033h-23.5c-.066 0-.132.014-.194.033.042.055.102.123.181.176l11.757 7.04c.24.144.563.144.803 0l11.757-7.04c.08-.052.14-.121.181-.176zm-23.944 1.854v11.145c0 .552.448 1 1 1h22c.552 0 1-.448 1-1v-11.145l-11 6.592c-.31.185-.69.185-1 0l-11-6.592z"/>
                </svg>
            </div>
            <div class="text">cs@cresttel.net</div>
        </div>
    
        <!-- Phone Icon -->
        <div class="icon-wrapper">
            <div class="icon">
                <!-- Use an SVG path for a phone icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M6.62 10.79c2.44 4.51 5.87 7.94 10.39 10.39l2.2-2.2c.27-.27.67-.36 1.02-.26 1.12.32 2.33.5 3.57.5.55 0 1 .45 1 1v4c0 .55-.45 1-1 1-11.05 0-20-8.95-20-20 0-.55.45-1 1-1h4c.55 0 1 .45 1 1 0 1.24.18 2.45.5 3.57.1.35.01.74-.26 1.02l-2.2 2.2z"/>
                </svg>
            </div>
            <div class="text">(+1) 619-430-4313</div>
        </div>
    </div>
        
        </div>
    </div>
</body>
</html>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
           <h2 class="m-0" style="color: #1591ea;">Cresttel</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ route('project') }}" class="nav-item nav-link">Project</a>
            <a href="{{ route('blogs') }}" class="nav-item nav-link">Blogs</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->


    


    <!-- Projects Start -->
    <!-- partial:index.partial.html -->
    

    <section class="slider">
      <div class="list">
          <div class="item active">
              <div class="image" style="--url: url('img/Project/Picture44.jpg')"></div>
              <div class="content">
                  <h2 style="color: #ffffff;">Best Fence Services</h2>
                 
              </div>
          </div>
          <div class="item ">
              <div class="image" style="--url: url('img/Project/Frameless_glass_balustrade_on_spiral_stairs.jpg')"></div>
              <div class="content">
                  <h2 style="color: #ffffff;">Modern Stairs</h2>
                  
              </div>
          </div>
          <div class="item">
              <div class="image" style="--url: url('img/Project/rf3.jpg')"></div>
              <div class="content">
                  <h2 style="color: #ffffff;">Modern Living Solutions</h2>
                  
              </div>
          </div>
          <div class="item">
            <div class="image" style="--url: url('img/Project/zse.jpg')"></div>
            <div class="content">
                <h2  style="color: #ffffff;">The best Renovation</h2>
                
            </div>
        </div>
        <div class="item">
          <div class="image" style="--url: url('img/Project/rfde.jpg')"></div>
          <div class="content">
              <h2 style="color: #ffffff;">Residential</h2>
             
          </div>
      </div>
      <div class="item">
        <div class="image" style="--url: url('img/Project/flooring.png')"></div>
        <div class="content">
            <h2 style="color: #ffffff;">Concrete</h2>
            
        </div>
    </div>
    <div class="item">
      <div class="image" style="--url: url('img/Project/solar-farm.jpg')"></div>
      <div class="content">
          <h2 style="color: #ffffff;">Solar  Farm</h2>
         
      </div>
  </div>
  <div class="item">
    <div class="image" style="--url: url('img/Project/CBD-CONTRACTING-UNION-STREET.jpg')"></div>
    <div class="content">
        <h2 style="color: #ffffff;">Custom Design Solutions</h2>
        
    </div>
</div>
<div class="item">
  <div class="image" style="--url: url('img/Project/septic-tank1.jpg')"></div>
  <div class="content">
      <h2 style="color: #ffffff;">Septic tanks</h2>
      
  </div>
</div>
      </div>
      <div class="arrows">
          <button id="prev">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
              </svg>
          </button>
          <button id="next">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
              </svg>
          </button>
      </div>
  </section>
</main>

    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img2/design_4x.jpg.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Designing</h3>
                        <p style="color: #1c1c1c;" class="mb-0">At Cresttel, we believe that the foundation of any successful construction project lies in meticulous planning and innovative design. Our team of architects and engineers work collaboratively to create detailed plans and blueprints that align with your vision. We focus on selecting the best materials and ensuring that our designs meet all regulatory and safety standards. Our goal is to deliver a functional, aesthetically pleasing, and sustainable design that exceeds your expectations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img2/OIP.jpg.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Renovation Solutions</h3>
                        <p style="color: #1c1c1c;" class="mb-0">Renovation is about breathing new life into existing structures. Whether it's a minor cosmetic update or a major structural overhaul, Cresttel is here to help. Our renovation process includes demolishing outdated elements, repairing or replacing damaged components, and installing new features to enhance the functionality and appearance of your property. We aim to preserve the original character of the building while adding modern touches that increase its value and appeal.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img2/maintenance-3d-icon-illustrations-png.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Maintenance</h3>
                        <p style="color: #1c1c1c;" class="mb-0">Maintenance is crucial for the longevity and safety of any building. At Cresttel, we offer comprehensive maintenance services to keep your property in top condition. Our team conducts regular inspections, performs necessary repairs, and services essential systems such as plumbing, electrical, and HVAC. Effective maintenance prevents costly repairs and ensures a safe and comfortable environment for all occupants.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img2/about-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4">A Creative Construction Company  For Your Dream Buildings</h1>
                    <p style="color: #1c1c1c;">At Cresttel, we don’t just build structures; we create environments that inspire, protect, and elevate the way people live and work. Our journey begins with a vision—a commitment to delivering excellence in every project, no matter the scale or complexity. From Accessory Dwelling Units (ADUs) to Multi-Dwelling Units (MDUs), from commercial properties to residential developments, and even fencing solutions, we bring expertise and innovation to every venture we undertake.</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h2 class="display-1 mb-n2" data-toggle="counter-up">25</h2>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience and + </h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="BLOGS.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Why Choose Us!</h4>
                    <h3 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h3>
                    <div class="row g-4">
                        <div class="col-12">
                           
                            </div>
                        </div>
                       
                        </div>
                    </div>
                </div>
               
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <p style="text-align: center;color: #000000;font-size:170%;">Imagine your ADU designed not just as an addition but as an extension of your lifestyle, blending efficiency with sustainability. Visualize MDUs crafted with meticulous attention to detail, balancing the demands of high-density living with thoughtful design that enhances both functionality and aesthetic value. Step into commercial spaces developed with businesses in mind—tailored to foster productivity, innovation, and success. Picture residential properties where every corner reflects comfort, warmth, and a true sense of home. Even our fencing solutions go beyond the ordinary, providing both security and elegance that seamlessly integrate with your property’s personality.

        At the heart of every project lies our unwavering dedication to quality and client satisfaction. We understand that each project is more than just a task; it’s an opportunity to bring dreams to life. By focusing on innovation, craftsmanship, and attention to detail, Cresttel has become a trusted partner in the construction and property development industry.
        
        We don’t just meet expectations—we exceed them, ensuring that every client feels valued and every project leaves a lasting impression. Let Cresttel be the foundation for your next venture, where excellence isn’t just a goal; it’s our standard.</p>


    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Projects</h4>
                <h5 style="font-size:150%;" class="display-5 mb-4">Visit Our Latest Projects And Our Innovative Works</h5>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. Modern Complex</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Royal Hotel</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Mexwel Buiding</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Shopping Complex</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img2/project-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 style="font-size:150%;" class="mb-3">25 Years Of Experience In Architecture Industry</h6>
                                    <p class="mb-4">We believe in establishing strong relationships with our clients open and consistent dialogue. Whether you have question, specific requirements, or special request, we’re here to assist you. Feel free to contact us any time, and let’s collaborate to turn your vision to reality</p>
                                    <div class="row gx-5 py-2">
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                </div>
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Expert Coordination</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Skilled Technicians</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                </div>
            </div>
                                    <a href="BLOGS.html" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img2/project-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 style="font-size:150%;" class="mb-3">25 Years Of Experience In Architecture Industry</h2>
                                    <p class="mb-4">We believe in establishing strong relationships with our clients open and consistent dialogue. Whether you have question, specific requirements, or special request, we’re here to assist you. Feel free to contact us any time, and let’s collaborate to turn your vision to reality</p>
                                    <div class="row gx-5 py-2">
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                </div>
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Expert Coordination</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Skilled Technicians</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                </div>
            </div>
    <a href="BLOGS.html" class="btn btn-primary py-3 px-5 mt-3">Read More</a>                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img2/project-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 style="font-size:150%;" class="mb-3">25 Years Of Experience In Architecture Industry</h3>
                                    <p class="mb-4">We believe in establishing strong relationships with our clients open and consistent dialogue. Whether you have question, specific requirements, or special request, we’re here to assist you. Feel free to contact us any time, and let’s collaborate to turn your vision to reality</p>
                                    <div class="row gx-5 py-2">
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                </div>
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Expert Coordination</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Skilled Technicians</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                </div>
            </div>
    <a href="BLOGS.html" class="btn btn-primary py-3 px-5 mt-3">Read More</a>                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img2/project-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 style="font-size:150%;" class="mb-3">25 Years Of Experience In Architecture Industry</h5>
                                    <p class="mb-4">We believe in establishing strong relationships with our clients open and consistent dialogue. Whether you have question, specific requirements, or special request, we’re here to assist you. Feel free to contact us any time, and let’s collaborate to turn your vision to reality</p>
                                    <div class="row gx-5 py-2">
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                </div>
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Expert Coordination</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Skilled Technicians</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                </div>
            </div>
    <a href="BLOGS.html" class="btn btn-primary py-3 px-5 mt-3">Read More</a>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

  </div>
 <script>let items = document.querySelectorAll('.slider .list .item');
  let prevBtn = document.getElementById('prev');
  let nextBtn = document.getElementById('next');
  let lastPosition = items.length - 1;
  let firstPosition = 0;
  let active = 0;
  let autoChange;
  
  // Function to navigate to the next slide
  nextBtn.onclick = () => {
      active = (active + 1) > lastPosition ? 0 : active + 1; // Loop back to first slide
      setSlider();
      resetAutoChange();
  };
  
  // Function to navigate to the previous slide
  prevBtn.onclick = () => {
      active = (active - 1) < firstPosition ? lastPosition : active - 1; // Loop back to last slide
      setSlider();
      resetAutoChange();
  };
  
  // Function to apply active class and update arrow visibility
  const setSlider = () => {
      let oldActive = document.querySelector('.slider .list .item.active');
      if (oldActive) oldActive.classList.remove('active');
      items[active].classList.add('active');
      // Update arrow visibility
      nextBtn.classList.remove('d-none');
      prevBtn.classList.remove('d-none');
  };
  
  // Function to set auto-change timer
  const startAutoChange = () => {
      autoChange = setInterval(() => {
          active = (active + 1) > lastPosition ? 0 : active + 1;
          setSlider();
      }, 5000); // Change every 5 seconds
  };
  
  // Reset auto-change timer on manual navigation
  const resetAutoChange = () => {
      clearInterval(autoChange);
      startAutoChange();
  };
  
  // Set slider and auto-change on load
  setSlider();
  startAutoChange();
  
  // Set diameter for circular images
  const setDiameter = () => {
      let slider = document.querySelector('.slider');
      let widthSlider = slider.offsetWidth;
      let heightSlider = slider.offsetHeight;
      let diameter = Math.sqrt(Math.pow(widthSlider, 2) + Math.pow(heightSlider, 2));
      document.documentElement.style.setProperty('--diameter', diameter + 'px');
  };
  setDiameter();
  window.addEventListener('resize', () => {
      setDiameter();
  });
  </script>
 <style>
 @import url('https://fonts.cdnfonts.com/css/bebas-neue');
@import url('https://fonts.cdnfonts.com/css/poppins');
/* 1200 x 780 */


*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
}
svg{
    color: #fff;
}
:root{
    --width-default: min(1200px, 90vw);
    --diameter: 1432px;
}


.slider{
    /* background-color: red; */
    color: #eee;
    width: 100vw;
    height: 100vh;
    position: relative;
    overflow: hidden;
    margin-top: -70px;
}
.slider .list .item{
    position: absolute;
    inset: 0 0 0 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 1s;
}
.slider .list .item .content{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translateX(-50%);
    width: max-content;
    max-width: 100%;
    text-align: center;
    display: grid;
    grid-template-columns: repeat(2, 400px);
    text-align: left;
    gap: 80px;
    font-size: 1.2em;
    text-transform: uppercase;
    font-family: Poppins;
    text-shadow: 0 0 80px #000;
}
.slider .list .item .content h2{
    font-size: 10em;
    font-family: 'Bebas Neue', sans-serif;
    line-height: 0.9em;
    transform: translateY(-100%);
    transition: transform 1s;
    grid-row-start: 1;
    grid-row-end: 3;
}
.slider .list .item .content p{
}
.slider .list .item .content p:last-child{
    display: flex;
    justify-content: start;
    align-items: end;
    padding-bottom: 25px;
}
/* item default */
.slider .list .item .image{
    flex-shrink: 0;
    width: var(--diameter);
    height: var(--diameter);
    background-image: var(--url);
    background-size: var(--diameter) var(--diameter);
    background-position: center;
    border-radius: 50%;
    transform: rotate(-60deg);
    position: relative;
    transition: 1s;
}
.slider .list .item .image::before, 
.slider .list .item .image::after{
    position: absolute;
    width: 70%;
    height: 70%;
    content: '';
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)  rotate(-120deg);
    background-image: 
    linear-gradient(to right, #0004, #0004),
    var(--url);
    background-size: var(--diameter) var(--diameter);
    background-position: center;
    transition: 1s;
}
.slider .list .item .image::after{
    width: 30%;
    height: 30%;
    background-image: var(--url);
    border: 3px solid #fff2;
    transform: translate(-50%, -50%) rotate(-170deg);
}

/* default  */
.slider .list .item .image{
    filter: blur(30px);
}

.slider .list .item{
    pointer-events: none;
    opacity: 0;
}
/* item active */
.slider .list .item.active{
    pointer-events: auto;
    opacity: 1;
}
.slider .item.active .image{
    filter: blur(0px);
    transform: rotate(0deg);
}
.slider .item.active .image::before,
.slider .item.active .image::after
{
    transform: translate(-50%, -50%) rotate(0deg) ;
}
.slider .list .item.active .content h2{
    transform: translateY(0);
}

/* item phía sau */
.slider .list .item.active ~ .item{
    opacity: 0;
}
.slider .item.active ~ .item .image{
    transform: rotate(60deg);
}
.slider .item.active ~ .item .image::before
{
    transform: translate(-50%, -50%) rotate(120deg) ;
}
.slider .item.active ~ .item .image::after
{
    transform: translate(-50%, -50%) rotate(170deg) ;
}
.slider .list .item.active ~ .item .content h2{
    transform: translateY(100%);
}
/* arrows */
/* Ensure arrows are visible */
.arrows {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 30px; /* Default position for desktop */
    width: var(--width-default);
    display: flex;
    justify-content: space-between;
    z-index: 10; /* Ensure arrows are above other elements */
}

.arrows button {
    all: unset;
    cursor: pointer;
    opacity: 1; /* Ensure visibility */
    pointer-events: auto; /* Ensure they are clickable */
    border-radius: 50%; /* Circular buttons */
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.arrows button:hover {
    transform: scale(1.1); /* Slight zoom on hover */
}

.arrows button svg {
    color: #000000; /* White arrow icons */
    width: 24px;
    height: 24px;
}

/* Ensure arrows are visible and adjusted for mobile */
@media all and (max-width: 767px) {
    .arrows {
        bottom: 100px; /* Move arrows higher on mobile */
    }

    .arrows button {
        width: 40px; /* Slightly smaller for mobile */
        height: 300px;
    }
}


.slider .list::after{
    position: absolute;
    content: '';
    bottom: 0;
    width: min(1000px, 100vw);
    height: 70%;
    left: 50%;
    transform: translateX(-50%);
    background-image: url(img/model.png);
    background-size: cover;
    background-position: top;
    pointer-events: none;
    animation: showModel 1s ease-in-out 1 forwards;
}
@keyframes showModel{
    from{
        transform: translateX(-50%) scale(1.3) translateY(88px);
    }
}

/* Show arrows on mobile */
@media all and (max-width: 767px) {
    .arrows button {
        opacity: 1 !important;
        pointer-events: auto !important;
    }
}

@media all and (max-width: 1024px) {
    .slider .list .item .content{
        grid-template-columns: repeat(2, 300px);
    }
    .slider .list .item .content h2{
        font-size: 8em;
    }
}
@media all and (max-width: 767px) {
    .slider .list .item .content{
        grid-template-columns: 80%;
        justify-content: center;
        gap: 20px;
        top: 70px;
    }
    .slider .list .item .content h2{
        font-size: 4em;
    }
    .slider .list .item .content p{
        font-size: small;
    }
}
  </style>
    <!-- Projects End -->
        

     <!-- Footer Start -->
 <div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
      <div class="row g-5">
          <div class="col-lg-3 col-md-6">
              <h5 class="text-light mb-4">Address</h5>
              <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1662 north magnolia Ave El Cajon, ca 92020</p>
              <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+1) 619-430-4313 </p>
              <p class="mb-2"><i class="fa fa-envelope me-3"></i>cs@cresttel.net</p>
              <div class="d-flex pt-2">
                <a class="btn btn-square btn-facebook rounded-circle me-2" href="https://www.facebook.com/cresttelconstruction" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-square btn-instagram rounded-circle me-2" href="https://www.instagram.com/cresttelconstruction/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-square btn-youtube rounded-circle me-2" href="https://www.youtube.com/" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
<style>.btn-facebook {
background-color: #1877f2; /* Facebook Blue */
color: white;
border: none;
}
.btn-facebook:hover {
background-color: #145dbf;
color: white;
}

.btn-instagram {
background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
color: white;
border: none;
}
.btn-instagram:hover {
background: linear-gradient(45deg, #e6683c, #f09433);
color: white;
}

.btn-youtube {
background-color: #ff0000; /* YouTube Red */
color: white;
border: none;
}
.btn-youtube:hover {
background-color: #cc0000;
color: white;
}
</style>     
          </div>
          <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="adu.blade.php">ADU</a>
                    <a class="btn btn-link" href="mdu.blade.php">MDU</a>
                    <a class="btn btn-link" href="commercial.blade.php">Commercial</a>
                    <a class="btn btn-link" href="fence.blade.php">Fence</a>
                    <a class="btn btn-link" href="residential.blade.php">Residential</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="service.html">Our Services</a>
                    <a class="btn btn-link" href="BLOGS.html">Our Blogs</a>
                    <a class="btn btn-link" href="project.blade.php">Projects</a>
                </div>
        
              
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
   <div class="container-fluid py-4" style="background: #000000;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#"><span style="color: rgb(255, 255, 255);">Cresttel</span></a>, 
                <span style="color: #1591ea;">All Right Reserved</span>.
            </div>
            
            <div class="col-md-6 text-center text-md-end">
                
                <span style="color: #1591ea;">Distributed By</span>. <a class="border-bottom" href="https://nicheknights.com/"><span style="color: rgb(255, 255, 255);">Nicheknights</span></a>
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
<style>/* Scroll to Top Button Styles */
    #scrollToTop {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background-color: #007BFF; /* Circle background color */
        color: #fff; /* Arrow color */
        border-radius: 50%; /* Makes it circular */
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 1000; /* Keeps it on top */
    }
    
    #scrollToTop i {
        font-size: 20px; /* Arrow size */
    }
    
    /* Show button when visible */
    #scrollToTop.show {
        opacity: 1;
        visibility: visible;
    }
    </style>
    <script>// Show/Hide Scroll to Top Button
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
  </body>
  <script>function toggleSocialIcons() {
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