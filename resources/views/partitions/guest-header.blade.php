<!-- Desktop Navbar (hidden on mobile) -->
<header id="header" class="fixed-top d-flex align-items-center d-none d-lg-flex">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1><a href="{{ route('welcome') }}">Equivalence</a></h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="{{ route('welcome') }}#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#about">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#Features">Features</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#howItWorks">How to use</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="loginDropdown"
                        style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%) ">
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.login') }}">Login</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.register') }}">Sign up</a>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#faq">Q & A</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDrobdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="languageDrobdown"
                        style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%) ">
                        <li><a class="dropdown-item text-white" href="{{ route('welcome') }}">English</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('welcome.ar') }}">Arabic</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</header>

<nav id="mobile-navbar " class="d-lg-none navbar fixed-top shadow-lg rounded-4 rounded-top-0 "
    style="background-color: #131c41">
    <div class="container-fluid w-100 d-flex flex-column align-items-center ">
        <!-- Logo -->
        <a class="navbar-brand text-center" href="{{ route('welcome') }}">
            <h1>Equivalence</h1>
        </a>

        <!-- Navbar links centered under the logo with Swiper -->
        <div class="w-100">
            <!-- Swiper Container -->
            <div class="swiper-container">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Navigation Links as Swiper Slides -->
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#hero">Home</a>
                    </div>
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#about">About</a>
                    </div>
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#Features">Features</a>
                    </div>
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#howItWorks">How to
                            use</a>
                    </div>

                    <!-- Dropdown for login options as a Swiper Slide -->
                    <div class="swiper-slide nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" id="loginDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu text-center" aria-labelledby="loginDropdown"
                            style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%);">
                            <li><a class="dropdown-item text-white" href="{{ route('applicant.login') }}">Login</a>
                            </li>
                            <li><a class="dropdown-item text-white" href="{{ route('applicant.register') }}">Sign
                                    up</a></li>
                        </ul>
                    </div>

                    <!-- FAQ Link as Swiper Slide -->
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#faq">Q & A</a>
                    </div>

                    <div class="swiper-slide nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="mobileLanguageDrobdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="mobileLanguageDrobdown"
                            style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%)">
                            <li><a class="dropdown-item text-white" href="{{ route('welcome') }}">English</a></li>
                            <li><a class="dropdown-item text-white" href="{{ route('welcome.ar') }}">Arabic</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
