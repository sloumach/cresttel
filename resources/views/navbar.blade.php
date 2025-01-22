<link href="css/nav.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
    <h2 class="m-0 text-primary">Cresttel</h2>

    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="{{ route('welcome') }}" class="nav-item nav-link ">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ route('project') }}" class="nav-item nav-link">Project</a>
            <a href="{{ route('blogs') }}" class="nav-item nav-link">Blogs</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

            <div class="nav-item dropdown">
                <!-- Centered Viewer Counter -->
                <div class="viewer-counter-container mx-auto d-flex align-items-center">
    <i class="bi bi-person-circle text-primary fs-4"></i>
    <span id="viewerCount" class="fs-4 fw-bold text-dark ms-2"></span>
    <div class="green-indicator bg-success rounded-circle"></div>
    <p class="fs-6 text-dark ms-3 mb-0"><strong>Viewers Now</strong></p>
</div>

                    </B>
                </div>
            </div>

        </div>

    </div>
</nav>
