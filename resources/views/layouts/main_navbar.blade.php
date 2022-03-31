@include('layouts.stylesheet')
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <img src="assets/img/mesob3.png" alt="">
            <span>Mesob </span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{url('client/login')}}">Find Talent</a></li>
                <li><a class="nav-link scrollto" href="{{url('freelancer/login')}}">Find Work</a></li>
                <li><a class="nav-link scrollto" href="#Why Mesob">Why Mesob</a></li>
                <li><a class="nav-link scrollto" href="#Enterprise">Enterprise</a></li>
                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a class="getstarted scrollto dropdown-toggle" href="#" role="button" id="login"
                                            data-mdb-toggle="dropdown" aria-expanded="false">
                                            Login as
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href={{url('freelancer/login')}}>Freelancer</a></li>
                                            <li><a class="dropdown-item" href={{url('client/login')}}>Client</a></li>
                                        </ul>
                                    </div>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a class="getstarted scrollto dropdown-toggle" href="#" role="button" id="login"
                                            data-mdb-toggle="dropdown" aria-expanded="false">
                                            Register as
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href={{url('freelancer/register')}}>Freelancer</a></li>
                                            <li><a class="dropdown-item" href={{url('client/register')}}>Client</a></li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
