@extends('layouts.main_layout')

@section('title', 'Mesob')
@section('navbar_content')

<!-- Navbar Start -->
<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="{{url('freelancer/home')}}" class="nav-item nav-link active">Jobs</a>
        <a href="about.html" class="nav-item nav-link">Search</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Jobs</a>
            <div class="dropdown-menu rounded-0 m-0">
                <a href="job-list.html" class="dropdown-item">Waiting</a>
                <a href="job-detail.html" class="dropdown-item">On Progress</a>
            </div>
        </div>
        <a href="index.html" class="nav-item nav-link">Portfolio</a>
        <a href="contact.html" class="nav-item nav-link">Report</a>
    </div>
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Profile</a>
        <div class="dropdown-menu rounded-0 m-0">
            <a href="job-list.html" class="dropdown-item">Edit Profile</a>
            <a class="dropdown-item" href="{{ route('freelancer.logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form action="{{ route('freelancer.logout') }}" id="logout-form" method="post">@csrf</form>
        </div>
    </div>
</div>

<!-- Navbar End -->
@endsection
@section('body_content')

<!-- Header End -->
<div class="container-xxl py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Jobs</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                        href="#tab-1">
                        <h6 class="mt-n1 mb-0">Featured</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <h6 class="mt-n1 mb-0">Full Time</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <h6 class="mt-n1 mb-0">Part Time</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">

                    @foreach ($jobs as $job)
                    <div class="job-item p-4 mb-4" id="title-div">
                        <div class="row g-4" class="myBox">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded"
                                    src="{{asset('front_end/img/com-logo-1.jpg')}}" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">{{$job->title}}</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-3"><i
                                            class="fas fa-thermometer-quarter me-2"></i>{{$job->required_level}}</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                    <span class="text">
                                        <p><br>{{$job->description}}</p>
                                    </span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="/freelancer/job-detail/{{$job->id}}">View
                                        Details</a>
                                </div>
                                <small class="text-truncate"><i
                                        class="far fa-calendar-alt text-primary me-2"></i>{{$job->created_at}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{$jobs->links()}}

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jobs End -->


@endsection