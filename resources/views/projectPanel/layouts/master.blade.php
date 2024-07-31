<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doccure-Dental</title>

    <link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
</head>
<body>
<header class="header home">

    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
            </a>
            <a href="{{route('index')}}" class="navbar-brand logo">
                <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="{{route('index')}}" class="menu-logo">
                    <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="active">
                    <a href="{{route('index')}}">Anasayfa</a>
                </li>

                <li class="has-submenu">
                    <a href="">Doktorlar <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        @foreach($departments as $department)
                            <li class="has-submenu">
                                <a href="#">{{ $department->name }}</a>
                                <ul class="submenu">
                                    @foreach($department->doctors as $doctor)
                                        <li>
                                            <a href="#">{{ $doctor->title }} {{ $doctor->name }} {{ $doctor->surname }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <a href="{{route('appointment')}}">Randevu Al</a>
                </li>
                <li>
                    <a href="#" target="_blank">Admin</a>
                </li>
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item">
                <a class="nav-link header-login" href="login.html">login / Signup </a>
            </li>
        </ul>
    </nav>
</header>

@yield('content')

<footer class="footer">

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <a href="index.html" class="footer-logo logo">
                        <img src="{{asset('assets/img/footer-logo.png')}}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="social-icon media-btn mt-3 mb-2">
                    <ul>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 mt-4 text-center">
                    <ul class="policy-menu text-center">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="doctor-dashboard.html">Doctors</a></li>
                        <li><a href="blog-list.html">Blogs</a></li>
                        <li><a href="#">Our Clinic</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="term-condition.html">Terms and Conditions</a></li>
                        <li><a href="privacy-policy.html">Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-fluid">

            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="copyright-text">
                            <p class="mb-0">© 2020 <a href="#" class="text-yellow"> Dentalcare</a> All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Copyright -->

        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
</body>
</html>
