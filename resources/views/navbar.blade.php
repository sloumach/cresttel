<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0" style="color: #1591ea;">Cresttel</h2>

        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div  class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="{{ route('welcome') }}" class="nav-item nav-link ">Home</a>
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