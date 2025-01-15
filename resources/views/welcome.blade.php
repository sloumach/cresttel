<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://cresttel.net/about.html">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction and remodeling company" name="keywords">
    <meta content="Reliable Residential and commercial construction services in san Diego and its
surrounding areas. Contact us for efficient renovation and remodeling solutions." name="description">
    <title> Construction & remodeling services in san diego | cresttel </title>
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
  
  <link rel="icon" href="path-to-your-favicon/favicon.ico" type="image/x-icon">
  <!-- or for PNG files -->
  <link rel="icon" href="path-to-your-favicon/favicon.png" type="image/png">

    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/x-icon">
    <!-- or for PNG files -->
    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/png">
  
  
</head>

<body>
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0" style="color: #1591ea;">Cresttel</h2>

        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div  class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ route('project') }}" class="nav-item nav-link">Project</a>
            <a href="{{ route('blogs') }}" class="nav-item nav-link">Blogs</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

                <div class="nav-item dropdown">
                   <!-- Centered Viewer Counter -->
        <div  class="viewer-counter-container mx-auto d-flex align-items-center" style=": margin-left: 5000px;">
            <i class="bi bi-person-circle" style="font-size: 20px; color: #1591ea;"></i>
            <span id="viewerCount" style="font-size: 24px; margin-left: 8px; font-weight: bold;">100</span>
            <div class="green-indicator" style="width: 10px; height: 10px; background-color: #28a745; border-radius: 50%; position: relative; top: -2px; margin-left: 5px; animation: pulse 1s infinite;"></div>
            <p style="font-size: 14px; color: #000; margin-left: 12px; margin-bottom: 0;"><B>Viewers Now</p></B>
        </div>
                </div>
                
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->
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
    

    <!-- word effect start-->
        <style>
           
           .dynamic-text {
            font-size: 24px;
            color: #333;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            font-size:300%;
            font-weight: bold;
            
        }

        .replacement {
            display: inline-block;
            transition: opacity 0.5s ease;
            white-space: nowrap; /* Prevent wrapping */
            color: #1591ea; /* Set the color for the changing words */
            font-size:100%;
            font-weight: bold;
        }
        </style>
  

   
     <!-- CSS for the pulsing effect -->
<style>
    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.3);
            opacity: 0.7;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
    </style>
<!-- JavaScript for changing the viewer number every second -->
<script>
    // Function to generate an array of 50 random numbers
    function generateRandomNumbers(count, min, max) {
        const numbers = [];
        for (let i = 0; i < count; i++) {
            // Generate a random number between min and max
            numbers.push(Math.floor(Math.random() * (max - min + 1)) + min);
        }
        return numbers;
    }

    // Generate 50 random viewer numbers between 1 and 1000
    const viewerNumbers = generateRandomNumbers(50, 1, 1000);
    
    let currentIndex = 0;
    const viewerCountElement = document.getElementById('viewerCount');

    // Function to update the viewer count every second
    setInterval(() => {
        // Move to the next index in the array, and if it reaches the end, start over
        currentIndex = (currentIndex + 1) % viewerNumbers.length;
        
        // Update the content of the viewerCountElement with the new number
        viewerCountElement.textContent = viewerNumbers[currentIndex];
    }, 5000); // This will execute every 1000 milliseconds (1 second)
</script>



    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/wephome/ezgif-2-fd9d395e0a.webp" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4" style="font-size:480%;">We Build Homes That Lasts</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Expert construction services <br> for residential and commercial properties

                                </p>
                                <a href="project.blade.php"  class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft"><span style="color: rgb(255, 255, 255);">View Projects</span></a>
                                
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
                                <h2 class="display-3 text-white animated slideInDown mb-4">Smart Commercial Solution For All Business</h2>
                                <p class="fs-5 text-white mb-4 pb-2">Providing comprehensive  commercial construction services with high quality craftsmanship tailored for your business success in San Diego.</p>
                                <a href="project.blade.php"  class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft"><span style="color: rgb(255, 255, 255);">View Projects</span></a>
                            
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
                                <h2 class="display-3 text-white animated slideInDown mb-4">Renovation & Remodling</h2>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Home renovation or remodeling services provided with expert results.</p>
                                <a href="project.blade.php"  class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft"><span style="color: rgb(255, 255, 255);">View Projects</span></a>
                                
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

    <script>
        // JavaScript for typing effect
        const words = ["Integrity.", "Commitment."," Reliabilty." ];
        let currentWordIndex = 0;
        let currentCharIndex = 0;
        const replacementElement = document.getElementById('replacement');

        function typeWord() {
            const currentWord = words[currentWordIndex];
            if (currentCharIndex < currentWord.length) {
                replacementElement.textContent += currentWord[currentCharIndex];
                currentCharIndex++;
                setTimeout(typeWord, 100); // Type next character after 100ms
            } else {
                // Wait for a second before starting to erase the word
                setTimeout(eraseWord, 1000);
            }
        }

        function eraseWord() {
            if (currentCharIndex > 0) {
                replacementElement.textContent = replacementElement.textContent.slice(0, -1);
                currentCharIndex--;
                setTimeout(eraseWord, 100); // Erase next character after 100ms
            } else {
                // Move to the next word
                currentWordIndex = (currentWordIndex + 1) % words.length;
                currentCharIndex = 0; // Reset char index for new word
                setTimeout(typeWord, 500); // Wait before typing the next word
            }
        }

        // Start the typing effect
        typeWord();
    </script>
   
   
      <style>* {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      
      img {
        max-width: 100%;
      }
      
      body {
        font-size: 16px;
        line-height: 1.5;
        color: #131722;
      }
      
      
      
      .stock-ticker {
        font-size: 20px;
        padding-block: 8px;
        border-block: 1px solid;
        overflow: hidden;
        user-select: none;
      
        --gap: 20px;
        display: flex;
        gap: var(--gap);
      }
      
      .stock-ticker ul {
        list-style: none;
        flex-shrink: 0;
        min-width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: var(--gap);
      
        animation: scroll 20s linear infinite;
      }
      
      .stock-ticker:hover ul {
        animation-play-state: paused;
      }
      
      @keyframes scroll {
        to {
          transform: translateX(calc(-100% - var(--gap)));
        }
      }
      
      .stock-ticker ul:first-child {
        /* background-color: yellow; */
      }
      
      .stock-ticker ul:last-child {
        /* background-color: pink; */
      }
      
      .stock-ticker .company,
      .stock-ticker .price {
        font-weight: bold;
      }
      
      .stock-ticker .price {
        margin-inline: 4px;
      }
      
      .stock-ticker .plus::before {
        content: "↑";
      }
      
      .stock-ticker .minus::before {
        content: "↓";
      }
      
      .stock-ticker .plus .change,
      .stock-ticker .plus::before {
        color: #089981;
      }
      
      .stock-ticker .minus .change,
      .stock-ticker .minus::before {
        color: #f23645;
      }
      </style>
    
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center">
            
          <h2 class="display-5 mb-5"><span style="color: #1591ea;"><br><br>Our Services</span>
        </div>
        <!-- Increase gutter spacing between columns with g-4 -->
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.1s">
              <div class="service-item border h-100 p-3">
                  <div class="btn-square bg-light rounded-circle mb-3 image-hover" style="width: 70px; height: 70px;">
                      <a href="adu.blade.php">
                          <img class="img-fluid" src="img/wephome/ezgif-2-117d8ed6c3.webp" alt="Icon" style="width: 70px; height: 70px;">
                      </a>
                  </div>
                  <h3 class="mb-2">ADU</h3>
                  <p class="mb-3">"Innovative ADU Design & Construction for Extra Space"</p>
                  <div class="text-start">
                      <a href="adu.blade.php" class="custom-btn">More</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.3s">
              <div class="service-item border h-100 p-3">
                  <div class="btn-square bg-light rounded-circle mb-3 image-hover" style="width: 70px; height: 70px;">
                      <a href="mdu.blade.php">
                          <img class="img-fluid" src="img/wephome/ezgif-5-23356bdb13.webp" alt="Icon" style="width: 70px; height: 70px;">
                      </a>
                  </div>
                  <h3 class="mb-2">MDU</h3>
                  <p class="mb-3">"Efficient MDU Development for Modern Living Solutions"</p>
                  <div class="text-start">
                      <a href="mdu.blade.php" class="custom-btn">More</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.5s">
              <div class="service-item border h-100 p-3">
                  <div class="btn-square bg-light rounded-circle mb-3 image-hover" style="width: 70px; height: 70px;">
                      <a href="residential.blade.php">
                          <img class="img-fluid" src="img/wephome/ezgif-5-613f01933b.webp" alt="Icon" style="width: 70px; height: 70px;">
                      </a>
                  </div>
                  <h3 class="mb-2">Residential</h3>
                  <p class="mb-3">"Residential Building & Remodeling Experts"</p>
                  <div class="text-start">
                      <a href="residential.blade.php" class="custom-btn">More</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.7s">
              <div class="service-item border h-100 p-3">
                  <div class="btn-square bg-light rounded-circle mb-3 image-hover" style="width: 70px; height: 70px;">
                      <a href="commercial.blade.php">
                          <img class="img-fluid" src="img/Home icons/Commercial.webp" alt="Icon" style="width: 70px; height: 70px;">
                      </a>
                  </div>
                  <h3 class="mb-2">Commercial</h3>
                  <p class="mb-3">"Commercial Construction & Renovation Services"</p>
                  <div class="text-start">
                      <a href="commercial.blade.php" class="custom-btn">More</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.9s">
              <div class="service-item border h-100 p-3">
                  <div class="btn-square bg-light rounded-circle mb-3 image-hover" style="width: 70px; height: 70px;">
                      <a href="fence.blade.php">
                          <img class="img-fluid" src="img/Home icons/fence-6148694-5024979.png" alt="Icon" style="width: 70px; height: 70px;">
                      </a>
                  </div>
                  <h3 class="mb-2">Fence</h3>
                  <p class="mb-3">"Reliable Fence Installation & Custom Design Solutions"</p>
                  <div class="text-start">
                      <a href="fence.blade.php" class="custom-btn">More</a>
                  </div>
              </div>
          </div>
      </div>
      
      <style>
      .image-hover img {
          transition: transform 0.3s ease-in-out;
      }
      .image-hover img:hover {
          transform: scale(1.1);
      }
      
      .custom-btn {
          display: inline-block;
          background-color: #007bff;
          color: #fff;
          border: none;
          border-radius: 5px;
          padding: 8px 15px;
          font-size: 14px;
          cursor: pointer;
          text-decoration: none;
          transition: background-color 0.3s ease, transform 0.2s ease;
          text-align: left;
      }
      
      .custom-btn:hover {
          background-color: #0056b3;
          transform: scale(1.05);
      }
      
      .custom-btn:active {
          transform: scale(0.95);
      }
      </style>
      
<!-- Service End -->



   <!-- About Start -->
<!-- About Start -->
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-5 pb-5" style="min-height: 500px;">
            <div class="position-relative bg-dark-radial h-100 ms-3 larger-image">
                <img class="position-absolute w-100 h-100 mt-3 ms-n3" src="img/wephome/ezgif-2-a4321ed7e9.webp" alt="Modern luxury house with swimming pool and outdoor kitchen at sunset, showcasing Cresttel's premium residential construction and design services" style="object-fit: cover;">
            </div> 
        </div>
        <div class="col-lg-7" style="padding-left: 50px;"> <!-- Increased padding-left here -->
            <h2 class="display-5 text-uppercase mb-4">We are <span class="fading">the Leader</span> in Construction Industry!</h2>
            <h3 class="text-uppercase mb-3 text-body">About us</h3>
            <p>With over 20 years of experience, we pride ourselves in delivering top-notch services for both residential and commercial properties. With a wealth of experience under our belt, our skilled team of contractors specializes in custom home building, remodeling projects, and commercial construction endeavors. We are dedicated to achieving excellence and ensuring customer satisfaction, making it a priority to complete every project on schedule and within the agreed budget. Cresttel offers innovative solutions and meticulous attention to detail, making us a standout choice for those seeking excellent construction services. Explore how our Nicheknightss can transform your space with their expert craftsmanship and professionalism.</p>
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
           
        </div>
    </div>
</div>
<!-- About End -->


             
            </div>
        </div>
    

<div class="stock-ticker">
    <ul>
      <li >
        <span class="company">We are the best construction company</span>
        <span class="price">🚧</span>
        <span class="change">🏗️</span>
      </li>
      <li >
        <span class="company">We are the best in San Diego</span>
        <span class="price">🌆</span>
        <span class="change">✨</span>
      </li>
      <li >
        <span class="company">Quality services at affordable prices</span>
        <span class="price">💰</span>
        <span class="change">✅</span>
      </li>
      <li >
        <span class="company">Experienced professionals</span>
        <span class="price">👷</span>
        <span class="change">🛠️</span>
      </li>
      <li >
        <span class="company">Your satisfaction is our priority</span>
        <span class="price">😊</span>
        <span class="change">🏆</span>
      </li>
      <li >
        <span class="company">Building dreams, one brick at a time</span>
        <span class="price">🏠</span>
        <span class="change">🌟</span>
      </li>
      <li >
        <span class="company">Innovative solutions for every project</span>
        <span class="price">💡</span>
        <span class="change">🚀</span>
      </li>
      <li >
        <span class="company">Let's make it happen together</span>
        <span class="price">🤝</span>
        <span class="change">❤️</span>
      </li>
    </ul>
  
    <ul >
      <li >
        <span class="company">We are the best construction company</span>
        <span class="price">🚧</span>
        <span class="change">🏗️</span>
      </li>
      <li >
        <span class="company">We are the best in San Diego</span>
        <span class="price">🌆</span>
        <span class="change">✨</span>
      </li>
      <li >
        <span class="company">Quality services at affordable prices</span>
        <span class="price">💰</span>
        <span class="change">✅</span>
      </li>
      <li >
        <span class="company">Experienced professionals</span>
        <span class="price">👷</span>
        <span class="change">🛠️</span>
      </li>
      <li >
        <span class="company">Your satisfaction is our priority</span>
        <span class="price">😊</span>
        <span class="change">🏆</span>
      </li>
      <li >
        <span class="company">Building dreams, one brick at a time</span>
        <span class="price">🏠</span>
        <span class="change">🌟</span>
      </li>
      <li >
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
  
<style>
    .fading {
    color: #1591ea;
    animation: fade 2s infinite;
}

@keyframes fade {
    0% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 1; }
}

</style>

<!-- Quote Request End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1662 north magnolia Ave El Cajon, ca 92020</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+1) 619-430-4313</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>cs@cresttel.net</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-facebook rounded-circle me-2" href="https://www.facebook.com/cresttelconstruction" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-square btn-instagram rounded-circle me-2" href="https://www.instagram.com/cresttelconstruction/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-square btn-youtube rounded-circle me-2" href="https://www.youtube.com/@Cresttel" target="_blank">
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