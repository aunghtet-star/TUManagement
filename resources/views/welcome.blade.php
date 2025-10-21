@extends('layouts.app')

@section('content')
<div class="">
<section id="header">
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow fixed-top" style="background-color: aquamarine !important;">
            <div class="container-fluid col-md-10" style="background-color: aquamarine;">
                <!-- Navbar Brand (Logo) -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('TUKSElogo-iso-300x300.png')}}" alt="Logo" height="40">
                </a>

                <!-- Navbar Toggler Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link font-style" href="#home" style="font-weight: 700;font-size: 1.3rem;">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link font-style" href="#features" style="font-weight: 700;font-size: 1.3rem;">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-style" href="#about" style="font-weight: 700;font-size: 1.3rem;">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-style" href="#contact" style="font-weight: 700;font-size: 1.3rem;">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-style"  style="font-weight: 700;font-size: 1.3rem;"href="{{ route('teacher.login') }}">Teacher Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-style" href="{{ route('student.login') }}" style="font-weight: 700;font-size: 1.3rem;">Student Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-style" href="{{ route('admin.login') }}" style="font-weight: 700;font-size: 1.3rem;">Admin Login</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                        <button class="btn btn-outline-dark mx-2 rounded-pill font-style" type="button">Contact Us</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </section>

    <!-- End Header Section -->

    <!-- Start Welcome Section -->
    <section id="home" style="margin-top: 9rem !important;">
        <div class="container-fluid col-md-10 mx-auto">
            <div>
                <div style="margin-top: 5rem;">
                    <h2 class="font-style py-3 text-center mt-3 mb-5" style="font-size: 3rem;font-weight: 700;">Welcome to Technological University, Kyaukse's Administrative Management System</h2>
                </div>
               <div style="display: flex; justify-content: between; align-items: center; flex-direction: row; gap: 2rem;">
                 <div class="floating-images text-center">
                    <img src="{{ asset('sayar.jpg') }}" alt="Floating Image 1" width="500" height="500" style="border: rounded;"/>
                </div>
                <div>
                    <p style="font-size: 1.8rem; font-weight: 700;">🎓 Welcome to Technological University (Kyaukse)🎓</p>
                    <p style="font-size: 1.3rem; font-weight: 500;">On behalf of the Administrative Management Team, we extend our warmest greetings to all students, faculty, and stakeholders.
                    Our team is committed to ensuring transparent governance, effective academic support, and smooth administrative services that foster a culture of innovation and excellence.</p>
                    <p  style="font-size: 1.3rem; font-weight: 500;">🤝 Together, we aim to build a collaborative and student-centered environment, where learning, research, and personal growth thrive.</p>
                    <p  style="font-size: 1.3rem; font-weight: 500;">📊 With a focus on digital transformation, efficient resource management, and quality assurance, TU (Kyaukse) continues to move forward as a hub of knowledge and innovation.</p>
                    <p  style="font-size: 1.3rem; font-weight: 500;">✨ Welcome once again—let’s shape the future together!</p>
                </div>
               </div>
            </div>
        </div>

        <div class="container-fluid col-md-10 mt-3 p-3" style="margin-top: 5rem;">
            <div class="row section-theme">
                <div class="col-md-6 order-md-2 p-4 mt-5" >
                    <div class="card rounded-4 border-0 shadow" style="margin-top: 3rem;">
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="0"
                                    class="active"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('teacher.png') }}" alt="" class="d-block w-100 h-auto carousel-image rounded-4" style="object-fit:contain"/>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('ktu2.jpg') }}" alt="" class="d-block w-100 h-auto carousel-image rounded-4" style="object-fit:contain"/>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 order-md-1 mt-6 p-4">
                    <div>
                        <h4 class="text-dark text-left" style="font-size: 3.5rem; font-weight: 800; margin-top: 5rem;">Administrative Management System of Technological University, Kyaukse (TU, KSE)</h4>
                        <p class='text-dark py-3 text-left mb-5' style="font-size: 1.5rem;line-height: 2;">Administrative Management System of Technological University, Kyaukse is a
                            web-based university administrative information and activity  management system for computerization of all the
                            information and activities of Kyaukse Techonological University.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- End Welcome Section -->


    <!-- End Home Section -->
    <!-- Start Login Section -->
    {{-- <section id="login">
        <div class="container mt-3"> <!-- container only, not container-fluid -->
            <div class="row my-5 py-3">
                <!-- Image Column -->
                <div class="col-md-6 d-none d-md-block mt-5">
                    <img src="{{ asset('bg.jpeg') }}" alt="Login Image" class="img-fluid rounded-4 w-100">
                </div>

                <!-- Login Form Column -->
                <div class="col-md-6 d-flex align-items-center">
                    <form class="login-form p-4 rounded-4 w-100" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="mb-4 font-style text-center">Student Login</h2>

                        <div class="form-group my-3">
                            <label for="email" class="py-2">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email">
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="password" class="py-2">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password" placeholder="Enter password">
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="text-center my-3">
                            <button type="submit" class="btn btn-outline-dark btn-block" style="width: 200px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="login">
        <div class="container mt-3"> <!-- container only, not container-fluid -->
            <div class="row my-5 py-3">
                <!-- Image Column -->


                <!-- Login Form Column -->
                <div class="col-md-6 d-flex align-items-center">
                    <form class="login-form p-4 rounded-4 w-100" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="mb-4 font-style text-center">Teacher Login </h2>

                        <div class="form-group my-3">
                            <label for="email" class="py-2">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email">
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="password" class="py-2">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password" placeholder="Enter password">
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="text-center my-3">
                            <button type="submit" class="btn btn-outline-dark btn-block" style="width: 200px;">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-none d-md-block mt-5">
                    <img src="{{ asset('bg.jpeg') }}" alt="Login Image" class="img-fluid rounded-4 w-100">
                </div>
            </div>
        </div>
    </section> --}}


    <!-- End Login Section -->
      <!-- Start Features Section -->
      <section id="features" class="bg-light">
        <div class="container-fluid col-md-10 mx-auto">
            <div class="row vh-100 justify-content-between align-items-center">
                 <div class="text-center mt-3">
                    <h2 class="font-style py-3 pt-0" style="font-size: 3rem; font-weight: 800;">FEATURES</h2>
                    <!-- <p class="texts text-center font-style" style="font-size: 2rem;">Features of Administrative Management System of Technological University, Kyaukse</p> -->
                </div>
                <div class="col-md-5">
                    <div class="row m-2">
                        <div class="col-md-2 text-bg-info text-light rounded-4 d-flex align-items-center icon-card">
                            <svg class="bi bi-app-indicator" width="1em" height="1em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                </path>
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            </svg>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-dark" style="font-size: 1.5rem; font-weight: 700;">Administrator Role</h5>
                            <p class="texts" style="font-size: 1.2rem;">Holds full control over institutional data and user management. Responsible for creating and maintaining departments, admission records, user accounts, timetables, examination results, and university announcements. May view all practical and tutorial materials uploaded by teachers but cannot edit or delete them. Has full moderation rights over the forum and may remove any inappropriate post.

                            </p>
                        </div>
                    </div>
                     <div class="row m-2 mt-5">
                        <div class="col-md-2 text-bg-primary text-light rounded-4 d-flex align-items-center icon-card">
                            <svg class="bi bi-collection" width="1em" height="1em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z">
                                </path>
                            </svg>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-dark card_text" style="font-size: 1.5rem; font-weight: 700;">Teacher Role</h5>
                            <p class="texts" style="font-size: 1.2rem;">Has read-only access to all institutional information. Authorised to upload, edit, and delete their own practical and tutorial materials. Can respond to student questions in the forum and is permitted to edit or delete their own posts.</p>
                        </div>
                    </div>
                      <div class="row m-2 mt-5">
                        <div class="col-md-2 text-bg-danger text-light rounded-4 d-flex align-items-center icon-card">
                            <svg class="bi bi-briefcase" width="1em" height="1em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z">
                                </path>
                            </svg>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-dark card_text" style="font-size: 1.5rem; font-weight: 700;">Student Role</h5>
                            <p class="texts" style="font-size: 1.2rem;">Granted view-only access to all academic content and institutional updates. May participate in the discussion forum by submitting questions and is allowed to edit or delete their own posts. Cannot alter any administrative or instructional records.</p>
                        </div>
                    </div>
                    <div class="row m-2 mt-5">
                        {{-- <div class="col-md-2 text-bg-warning text-light rounded-4 d-flex align-items-center icon-card">
                            <svg class="bi bi-arrow-repeat" width="1em" height="1em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z">
                                </path>
                            </svg>
                        </div> --}}

                    </div>
                   
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <img src="{{ asset('images_3.jpeg') }}" class="img-fluid rounded-5" />
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <img src="{{ asset('ktu2.jpg') }}" class="rounded-5" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->
    <!-- Start About Section -->
    <section id="about">
        <div class="container-fluid col-md-10 mx-auto">
            <div>
                <div>
                    <h2 class="font-style py-3 text-center mt-3 mb-5" style="font-size: 3rem;font-weight: 700;">ABOUT KTU </h2>
                    {{-- <p class='texts py-3 text-center mb-3'>Mandalay Technological University (formerly, the Mandalay
                        Institute of Technology - MIT), in Patheingyi, Mandalay, is a senior prestigious engineering
                        university in Myanmar. The university offers undergraduate, and postgraduate programmes in
                        engineering disciplines to students and is one of the most selective universities in the
                        country.</p> --}}
                </div>
                <div class="floating-images text-center">
                    <img src="{{ asset('TUKSElogo-iso-300x300.png') }}" alt="Floating Image 1" />
                </div>
            </div>
            <div class="row bg-light">
                <div class="col-md-6">
                    <div>
                        <h4 class="font-style text-center mt-3" style="font-size:2rem; font-weight: 800;">Vision </h4>
                        <p class='texts py-3 mb-3' style="font-size: 1.5rem;">To become an internationally recognized University by offering high quality contemporary engineering education and research and by producing competent graduates who are effective communicators and abide by the ethical standards of their profession.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <h4 class="font-style text-center mt-3" style="font-size:2rem; font-weight: 800;">Mission</h4>
                        <p class='texts py-3' style="font-size:1.5rem;">To train researchers and engineers who combine technical knowledge and skills with mastery of humanities and social science, leadership, team building and high ethical standards.To be responsive to the learning and developmental needs of all students and staff applying principles of inclusivity, equality and diversity throughout the institution</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- Start Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <h2 class=" text-center mt-3" style="font-size:3rem; font-weight: 800;">GET IN TOUCH</h2>
                    <p class='texts py-3 text-center mb-3' style="font-size:1.5rem; font-weight: 500;">If you have any question, please feel free to contact us.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid col-md-10 mx-auto">
            <div class="row bg-white g-3  p-4">
                <div class="col-md-6 my-3">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858997.54549389!2d93.57370039633193!3d19.17106527918595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb991dd17e314b%3A0x85c778139e9084da!2sKyaukse%20Technological%20University%20Post%20Office!5e0!3m2!1sen!2smm!4v1754730478909!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 mt-3 g-3  p-4">
                    <h4 class="p-3" style="font-size:1.5rem; font-weight: 800;">Contact Info</h4>
                    <p class="" style="font-size:1.2rem;"><i class="fas fa-home px-2"></i>Kyaukse Technological University</p>
                    <p class="" style="font-size:1.2rem;"><i class="fas fa-map-marker-alt px-2"></i>Kyaukse Township, Mandalay,
                        Myanmar</p>
                    <p class="" style="font-size:1.2rem;"><i class="fas fa-phone px-2"></i>Phone : +95066-50932</p>
                    <p class="" style="font-size:1.2rem;"><i class="fas fa-envelope px-2"></i>Email : info@ktu.edu.mm</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
    <!-- Start Footer Section -->
    <section id="footer" class="bg-light mt-3">
        <div class="container-fluid col-md-10 p-3 mt-3 text-center">
            <i class="fab fa-facebook px-2"></i>
            <i class="fab fa-facebook-messenger px-2"></i>
            <i class="fab fa-instagram px-2"></i>
            <i class="fab fa-pinterest px-2"></i>
            <i class="fab fa-twitter px-2"></i>
            <p class="text-center py-3 texts">
                Copyright © 2025 All rights reserved
            </p>
        </div>
    </section>
    <style>
        html {
            scroll-padding-top: 90px; /* Adjust to match navbar height */
        }
    </style>
</div>
@endsection