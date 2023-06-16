<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Account Automation System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
    </head>
    <body class="antialiased">
        <div class="container">
            <h1>
                <strong>Account Automation System</strong>
            </h1>
            
            <!-- ----------Start Navbar---------- -->
            <nav class="navbar navbar-expand-sm navbar-light sticky-top mb-2" style="background-color: #e3f2fd; border-radius: 3px;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="https://just.edu.bd/"><img src="images/logo.png" alt="JUST logo" width="30" height="30" class="d-inline-block align-text-top">
                        যবিপ্রবি</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="\">হোম</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">অফিস সমূহ</a>
                                <ul class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/vc">Office Of The Vice Chancellor</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/treasurer">Office Of The Treasurer</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/registrar">Office Of The Registrar</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/librarian">Office Of The Librarian</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/proctor">Office Of The Proctor</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/counselling">Office Of The Student Counseling And Guidance</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/accounts">Office Of The Director Of Accounts</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/pdw">Office Of The Director Of Planning, Development And Works</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/controller">Office Of The Controller Of Examinations</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/engineer">Office Of The Chief Engineer</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/medical">Office Of The Chief Medical Officer</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/phedu">Office Of The Physical Education</a></li>
                                    <li><a class="dropdown-item" href="https://just.edu.bd/offices/ict-cell">Office Of The ICT Cell</a></li>
                                </ul>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}">লগ আউট</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">ইনডেক্স</a>
                                    </li>
                                    
                                @else
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">লগ ইন</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}" >নিবন্ধন</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                            </ul>
                        <form class="d-flex">
                            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                            @if(Route::has('login'))
                                @auth
                                    <img src="images/man.png" alt="Profile" width="40" height="40" class="d-inline-block mx-2">
                                @endauth
                                    
                            @endif
                        
                        </form>
                    </div>
                </div>
            </nav>
            <!-- ----------End Navbar---------- -->    

            <!-- ----------Start Carousel---------- -->
            <div id="carouselExampleFade" class="carousel slide carousel-fade mb-2" data-bs-ride="carousel">
                <div style="width: 1285px; height: 250px; border-radius: 5px;" class="carousel-inner my-1">
                    <div class="carousel-item active">
                        <img src="images/image1.png" class="d-block img-fluid" alt="images1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image2.png" class="d-block img-fluid" alt="images2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image3.png" class="d-block img-fluid" alt="images3">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image4.png" class="d-block img-fluid" alt="images4">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image5.png" class="d-block img-fluid" alt="images5">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image6.png" class="d-block img-fluid" alt="images5">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image7.png" class="d-block img-fluid" alt="images5">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image8.png" class="d-block img-fluid" alt="images5">
                    </div>
                </div>
            </div>
            <!-- ----------End Carousel---------- -->

            <!-- ----------Start Card---------- -->
            <div class="text-center mb-2">
                <div style="margin: 0 auto" class="row">
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="images/images1.jpg" class="card-img-top" alt="image1">
                            <div class="card-body">
                                <h5 class="card-title">বাজেট নং ১</h5>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <a href="#" class="btn btn-primary">বিবারণী দেখুন</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="images/images2.jpg" class="card-img-top" alt="image1">
                            <div class="card-body">
                                <h5 class="card-title">বাজেট নং ২</h5>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <a href="#" class="btn btn-primary">বিবারণী দেখুন</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="images/images3.jpg" class="card-img-top" alt="image1">
                            <div class="card-body">
                                <h5 class="card-title">বাজেট নং ৩</h5>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <a href="#" class="btn btn-primary">বিবারণী দেখুন</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="images/images4.jpg" class="card-img-top" alt="image1">
                            <div class="card-body">
                                <h5 class="card-title">বাজেট নং ৪</h5>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <a href="#" class="btn btn-primary">বিবারণী দেখুন</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------End Card---------- -->
            
        </div>
            
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </body>
        
<!-- Footer -->
<footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2023 Copyright:
       Shariar Oni
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</html>