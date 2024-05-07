<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> -->
</head>
<body>

    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>dorjitshewang49@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+975 17407293</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="https://www.facebook.com/kanyingnetworkingtours">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="https://twitter.com/kanying17407293">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14"><g fill="none"><g clip-path="url(#primeTwitter0)"><path fill="currentColor" d="M11.025.656h2.147L8.482 6.03L14 13.344H9.68L6.294 8.909l-3.87 4.435H.275l5.016-5.75L0 .657h4.43L7.486 4.71zm-.755 11.4h1.19L3.78 1.877H2.504z"/></g><defs><clipPath id="primeTwitter0"><path fill="#fff" d="M0 0h14v14H0z"/></clipPath></defs></g></svg>
                        </a>
                        <a class="text-primary px-3" href="https://www.linkedin.com/in/ka-nying-networking-tours-and-travels-7b3285231/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com/kanyingnetworkingtour1992/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Navbar Start -->
     <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{route('homepage')}}" class="navbar-brand">
                    <h1 class="m-0 text-primary" style="font-size:larger"><span class="text-dark">Ka-</span>Nying</h1>
                    <span style="font-size:small">Networking Tours and Travel</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{route('homepage')}}" class="nav-item nav-link" style="color:#333">About</a>
                        <a href="{{route('homepage')}}" class="nav-item nav-link" style="color:#333">Destinations</a>
                        <a href="{{route('homepage')}}" class="nav-item nav-link" style="color:#333">Services</a>
                        <a href="{{route('homepage')}}" class="nav-item nav-link" style="color:#333">Gallery</a>
                        <a href="{{route('homepage')}}" class="nav-item nav-link" style="color:#333">Feedback</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Packages Start -->
    <div id="gallery" class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Gallery</h6>
                <h1 style="font-size:xx-large">Explore Our Gallery</h1>
            </div>
            <div class="row">
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/1.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />

                        <img
                        src="{{asset('img/2.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/3.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds"
                        />

                        <img
                        src="{{asset('img/4.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/5.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea"
                        />

                        <img
                        src="{{asset('img/6.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park"
                        />
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/1.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />

                        <img
                        src="{{asset('img/gallery/2.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/3.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds"
                        />

                        <img
                        src="{{asset('img/gallery/4.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/5.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea"
                        />

                        <img
                        src="{{asset('img/gallery/6.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park"
                        />
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/7.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />

                        <img
                        src="{{asset('img/gallery/8.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/9.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds"
                        />

                        <img
                        src="{{asset('img/gallery/10.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/11.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea"
                        />

                        <img
                        src="{{asset('img/gallery/12.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park"
                        />
                    </div>


                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/13.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />

                        <img
                        src="{{asset('img/gallery/14.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/15.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds"
                        />

                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/17.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea"
                        />

                        <img
                        src="{{asset('img/gallery/18.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park"
                        />
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/19.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />

                        <img
                        src="{{asset('img/gallery/20.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Wintry Mountain Landscape"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/21.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds"
                        />

                        <img
                        src="{{asset('img/gallery/22.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                        />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="{{asset('img/gallery/23.jpeg')}}"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea"
                        />
                    </div>

                </div>
            <!-- Gallery -->
            </div>
        </div>
    </div>
    <!-- Gallery -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <h1 class="text-primary"><span class="text-white">Ka-</span>Nying</h1>
                <span>Networking Tours and Travels</span>
                <p class="m-0 mt-2 text-white-50">Copyright &copy; 2024. All Rights Reserved.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>