<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixels</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- Owl Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
   <div class="tb-container">
        <!-- Navbar -->
        <nav class="navbar-nav w-100 container-fluid flex-row position-fixed w-100">
          <!-- Logo + menu key -->
          <div class="container-fluid d-grid grid-custom">
            <a href="#" class="logo d-flex align-items-center pr-2">
                <div class="menu-key fs-20 p-2 mt-2">
                   <ion-icon name="menu-outline"></ion-icon>
                </div>
                <img src="{{asset('images/logo.png')}}" alt="pexels">
            </a>
            <!-- Main nav -->
            <ul class="navbar-nav flex-row justify-content-start pl-4 menu">
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600">Discover</li>
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600">Movies</li>
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600">TV Series</li>
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600">People</li>       
            </ul>
            <!-- Search nav -->
            <form class="form d-flex align-items-center">
                <input type="search" placeholder="Search Movies,Tv Series,People">
            </form>
            <ul class="user navbar-nav flex-row justify-content-end align-items-center ">
               <li class="nav-item fs-12 fw-600 d-flex align-items-center">Sign in</li>
               <li class="nav-item fs-12 fw-600 border d-flex align-items-center pl-3 pr-3 pt-2 pb-2 ml-3">Sign up</li>
           </ul>
           <Div class="d-flex justify-content-end align-items-center fs-18 search-key">
               <ion-icon name="search-outline"></ion-icon>
           </div>
          </div>
        </nav>
        <!-- space hold nav -->
        <nav></nav>
        <!-- aside nav -->
        <aside class="w-100 h-100 position-fixed bg-light side-nav">
            <ul class="menu navbar-nav mt-4">
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600 p-3">Discover</li>
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600 p-3">Movies</li>
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600 p-3">TV Series</li>
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600 p-3">People</li> 
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600 p-3">Sign in</li> 
                <li class="nav-item d-flex align-items-center fs-12 pl-3 fw-600 p-3">Register</li>   
            </ul>
        </aside>
        <!-- overlay search -->
        <div class="search overlay w-100 h-100 position-fixed justify-content-center align-items-center top-0 start-0">
           <form action="" method="" class="form w-100 h-100 d-flex justify-content-center align-items-center p-2">
               <input class="form-control w-100" type="text" placeholder="Search Movie,Tv Series,People">
           </form>
        </div>
        <!-- Content area -->
        <div class="pm-container w-100">
            @yield('content')
        </div>
        <!-- Footer -->
        <!-- <div class="footer d-flex justify-content-around d-flex align-items-center mt-5"> -->
           <!-- Footer Logo -->
           <!-- <div class="logo">
             <img src="{{asset('images/logo.white.png')}}" alt="logo">
           </div> -->
           <!-- Footer nav -->
           <!-- <div class="footer-nav">
              <ul class="menu navbar-nav flex-row">
                 <li class="nav-item">Term of use</li>
                 <li class="nav-item">About us</li>
                 <li class="nav-item">Contact us</li>
                 <li class="nav-item">Privacy policy</li>
              </ul>
           </div> -->
           <!-- Social Nav -->
           <!-- <div class="social-nav d-flex justify-content-center">
              <p class="fs-12 pr-2 text-white mb-0 d-flex align-items-center">Contact Us:</p>
              <ul class="menu navbar-nav flex-row">
                 <li class="nav-item fs-20"><ion-icon name="logo-facebook"></ion-icon></li>
                 <li class="nav-item fs-20"><ion-icon name="logo-twitter"></ion-icon></li>
                 <li class="nav-item fs-20"><ion-icon name="logo-pinterest"></ion-icon></li>
                 <li class="nav-item fs-20"><ion-icon name="logo-dribbble"></ion-icon></li>
              </ul>
           </div>
        </div> -->
    </div>
    <!-- Script -->
    <script src="https://unpkg.com/ionicons@5.2.1/dist/ionicons.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/owl.slider.js')}}"></script>
    <script src="{{asset('js/sliderManagment.js')}}"></script>
    <script src="{{asset('js/menus.js')}}"></script>
</body>
</html>