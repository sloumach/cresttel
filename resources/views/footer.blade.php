<div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1662 north magnolia Ave El Cajon, ca
                    92020</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+1) 619-430-4313</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>cs@cresttel.net</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-facebook rounded-circle me-2"
                        href="https://www.facebook.com/cresttelconstruction" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-square btn-instagram rounded-circle me-2"
                        href="https://www.instagram.com/cresttelconstruction/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-square btn-youtube rounded-circle me-2"
                        href="https://www.youtube.com/@Cresttel" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <style>
                    .btn-facebook {
                        background-color: #1877f2;
                        /* Facebook Blue */
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
                        background-color: #ff0000;
                        /* YouTube Red */
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
                <a class="btn btn-link" href="{{ route('adu') }}">ADU</a>
                <a class="btn btn-link" href="{{ route('mdu') }}">MDU</a>
                <a class="btn btn-link" href="{{ route('commercial') }}">Commercial</a>
                <a class="btn btn-link" href="{{ route('fence') }}">Fence</a>
                <a class="btn btn-link" href="{{ route('residential') }}">Residential</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('service') }}">Our Services</a>
                <a class="btn btn-link" href="{{ route('blogs') }}">Our Blogs</a>
                <a class="btn btn-link" href="{{ route('project') }}">Projects</a>
            </div>


        </div>
    </div>
</div>
