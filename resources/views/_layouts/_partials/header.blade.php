<div class="py-2 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md-5 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                        <span class="text">12 Aiyeteju Bus-Stop, Ibeju-Lekki, Lagos</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">info@thekingspremierschool.com</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="/">
            <img src="{{asset('frontend/images/kps5.png') }}" alt="tkps" width="150" height="100"> 
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item {{ request()->routeIs('teachers') ? 'active' : '' }}"><a href="{{ route('teachers') }}" class="nav-link">Teachers</a></li>
                <li class="nav-item {{ request()->routeIs('subjects') ? 'active' : '' }}"><a href="{{ route('subjects') }}" class="nav-link">Subjects</a></li>
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item {{ request()->routeIs('login') ? 'active' : '' }}"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="nav-item {{ request()->routeIs('register') ? 'active' : '' }}"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            </ul>
        </div>
    </div>
</nav>