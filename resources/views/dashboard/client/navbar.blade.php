@include('layouts.stylesheet')
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/mesob3.png" alt="">
        <span>Mesob </span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
                <li><a class="nav-link scrollto" href="{{url('freelancer/home')}}">Jobs</a></li>
                <li><a class="nav-link scrollto" href="#Find Work">My Jobs</a></li>
                <li><a class="nav-link scrollto" href="#Why Mesob">Chat room</a></li>
                <li><a class="getstarted scrollto" href="#Why Mesob">Notification</a></li>
                <li><a class="getstarted scrollto" href="{{ route('freelancer.logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{ route('freelancer.logout') }}" id="logout-form" method="post">@csrf</form>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->
