<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EQUIVALENCE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!--  Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Equivalence</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#Features">Features</a></li>
                    <li><a class="nav-link scrollto" href="#howItWorks">How to use</a></li>
                    <li class="dropdown "><a href="#" class="text-decoration-none"><span>Login</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="text-decoration-none" href="login.html">Login</a></li>
                            <li><a class="text-decoration-none" href="register.html">Sign up</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto " href="#faq">Q % A</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center"
        style="background-image: url({{ asset('assets/img/hero-3.jpg') }});background-size: cover">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            {{-- style="background-image: url({{ asset('build/assets/img/hero.jpg') }}) ;background-size:cover;" --}}
            <!-- Slide 1 -->
            <div class="carousel-item active ">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown shadow-lg text-white">Equivalence</h2>
                    <p class="animate__animated fanimate__adeInUp">Our platform simplifies the process of evaluating and
                        recognizing your academic qualifications, ensuring a smooth journey for your educational and
                        professional mobility.</p>
                    <a href="#about"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto text-decoration-none">Read
                        More</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item"> {{--  style="background-image: url({{ asset('build/assets/img/hero-2.jpg') }})"> --}}

                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Equivalence</h2>
                    <p class="animate__animated animate__fadeInUp">Our platform simplifies the process of evaluating and
                        recognizing your academic qualifications, ensuring a smooth journey for your educational and
                        professional mobility.</p>
                    <a href="#about"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto text-decoration-none">Read
                        More</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">{{-- style="background-image: url({{ asset('build/assets/img/hero-1.jpg') }});background-size: fill;"> --}} <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Equivalence</h2>
                    <p class="animate__animated animate__fadeInUp">Our platform simplifies the process of evaluating and
                        recognizing your academic qualifications, ensuring a smooth journey for your educational and
                        professional mobility.</p>
                    <a href="#about"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto text-decoration-none">Read
                        More</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d=" M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about my-5">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>About</h2>
                    <p>Who we are</p>
                </div>

                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6">
                        <p>
                            Chez EQUIVALENCE, nous nous engageons à simplifier le processus d'équivalence des diplômes
                            pour les étudiants, les diplômés et les professionnels. Notre mission est de fournir une
                            plateforme sécurisée, intuitive et efficace qui harmonise l'évaluation et la reconnaissance
                            des qualifications académiques à la fois localement et internationalement.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Facilitation de la Mobilité: Nous croyons en la
                                facilitation de la mobilité éducative et professionnelle en offrant un système fiable de
                                vérification et de comparaison des diplômes.</li>
                            <li><i class="ri-check-double-line"></i>Expertise en Éducation et Technologie: Notre équipe
                                est composée d'experts en éducation, en technologie et en sécurité des données.</li>
                            <li><i class="ri-check-double-line"></i> Innovation et Expérience Utilisateur: En mettant
                                l'accent sur l'innovation et l'expérience utilisateur, nous visons à rendre le parcours
                                de reconnaissance des diplômes aussi fluide et accessible que possible.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Que vous soyez un étudiant cherchant à poursuivre vos études ou un professionnel souhaitant
                            faire avancer votre carrière, [Nom de Votre Plateforme] est là pour soutenir vos aspirations
                            et vous aider à atteindre vos objectifs.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <div class="features " data-aos="fade-up" id="Features">

            <div class="container text-center w-75">
                <div class="section-title text-start" data-aos="zoom-out">
                    <h2>our main</h2>
                    <p>Features</p>
                    <p class="text-muted fs-5">
                        Main Features of Our Diploma Equivalence Platform
                    </p>
                </div>

                <div class="row  mb-5 pb-5 g-4">
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="features--card d-flex justify-content-center align-items-center p-3 py-5 text-decoration-none">
                            <div class="text-center">
                                <i class="fa-brands fa-uikit" style="font-size: 64px"></i>
                                <p class="mt-3">User-Friendly <br />Interface</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="features--card d-flex justify-content-center align-items-center p-3 py-5 text-decoration-none">
                            <div class="text-center">
                                <i class="fa-solid fa-user-lock" style="font-size: 64px"></i>
                                <p class="mt-3">
                                    Secure Verification <br />
                                    System
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="features--card d-flex justify-content-center align-items-center p-3 py-5 text-decoration-none">
                            <div class="text-center">
                                <i class="fa-solid fa-graduation-cap" style="font-size: 64px"></i>
                                <p class="mt-3">Automated Equivalence <br />Assessment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Features Section ======= -->
        <section id="howItWorks" class="features">
            <div class="container">
                <ul class="nav nav-tabs row d-flex justify-content-center pb-3 ">
                    <li class="nav-item col-3" data-aos="zoom-in">
                        <a class="nav-link active show rounded-3" data-bs-toggle="tab" href="#tab-1">
                            <h4 class="d-none d-lg-block">Step</h4>
                            <i class="fa-solid fa-0"></i>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                        <a class="nav-link rounded-3" data-bs-toggle="tab" href="#tab-2">
                            <h4 class="d-none d-lg-block">Step</h4>
                            <i class="fa-solid fa-1"></i>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                        <a class="nav-link rounded-3" data-bs-toggle="tab" href="#tab-3">
                            <h4 class="d-none d-lg-block">Step</h4>
                            <i class="fa-solid fa-2"></i>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                        <a class="nav-link rounded-3" data-bs-toggle="tab" href="#tab-4">
                            <h4 class="d-none d-lg-block">Step</h4>
                            <i class="fa-solid fa-3"></i>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" data-aos="fade-up">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Account Creation</h3>
                                <p>
                                    To perform any operations on the platform, the applicant must first create an
                                    account to obtain a username and password. This initial step ensures secure access
                                    to all services and personalized features available on the platform
                                </p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Click <a href="/register.html">sign up</a> button on the header to register
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        Check your email after you register to activate your account
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold"> Troubleshoot Access Issues:</span> If you do not receive
                                        your activation email, check your spam folder or verify the email address
                                        provided during registration. If you still have trouble accessing your account
                                        (e.g., activation link not received, account not activated), contact the
                                        equivalence service at sde@mesrs.dz.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/features-1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Login</h3>
                                <p>
                                    After creating and activating your account, you will need to log in to the platform
                                    to access its features and services. Logging in ensures that you can securely manage
                                    your personal information and track your requests.
                                </p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold"> Log In to Your Account:</span> Use your username (email
                                        address) and password to log in.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        If you have trouble accessing your account, contact the equivalence service at
                                        sde@mesrs.dz.
                                    </li>
                                </ul>


                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/features-2.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3> Fill Out the Required Forms</h3>
                                <p>
                                    After logging in and providing your personal information, the next step is to
                                    complete all required forms and submit your equivalence request. This process
                                    involves providing detailed information about your diploma and uploading the
                                    necessary documents in the specified format.
                                </p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold"> Personal Information and Forms:</span> Fill out all
                                        personal details accurately and complete all mandatory forms provided by the
                                        platform.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">New Request:</span> Click on the “New Request” button..
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold"> Diploma Information:</span> Provide detailed information
                                        about the diploma to be evaluated for equivalence.
                                    </li>
                                    <li>

                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">Required Documents: </span>Submit the necessary documents
                                        as per the decree. Consult the decree via the link:
                                        http://equiv.mesrs.dz:8080/ext-equiv/images/Circulaire_n_1260_fr.pdf.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">PDF Format:</span> Ensure all required documents are
                                        submitted in PDF format, including the information contained in the forms for
                                        each document.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">Confirm and Print:</span> Confirm your submission and
                                        print the receipt of the application submission.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/features-3.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Processing and Notification</h3>
                                <p>
                                    After submitting your equivalence request, the platform's equivalence services will
                                    process and verify your application. You will then be notified of the status and
                                    outcome of your request.
                                </p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">Request Processing:</span> The requests are processed and
                                        verified by the Equivalence Services.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">Status Notification: </span> After processing, you will
                                        be notified of the status of your request via the equivalence platform.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">Appointment:</span> Once the equivalence request is
                                        signed, you will be informed of the proposed appointment.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">Document Presentation:</span> When collecting the
                                        equivalence certificate, present the original copies of all your diplomas.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/features-4.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>-->
        </section>
        <!-- End Features Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-out">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Equivalence</h3>
                        <p> Experience Seamless Diploma Recognition</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="register.html">Sign up now</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">How long does it
                            take to get my diploma evaluated ? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What documents are
                            required for the equivalence assessment ? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Can I track the
                            status of my application ? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>
                </ul>

            </div>
        </section><!-- End F.A.Q Section -->




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Selecao</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://kit.fontawesome.com/cbd9fa1bec.js" crossorigin="anonymous"></script>
    <!--  Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
