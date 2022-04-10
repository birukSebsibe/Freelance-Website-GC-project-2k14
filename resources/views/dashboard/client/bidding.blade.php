@extends('layouts.main_layout')

@section('title', 'Mesob')
@section('navbar_content')
    @include('dashboard.client.clientNavBar')
@endsection

@section('body_content')

<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow" data-wow-delay="0.3s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                        href="{{route('client.bidding', 'all')}}">
                        <h6 class="mt-n1 mb-0">All</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="{{route('client.bidding', 'all')}}">
                        <h6 class="mt-n1 mb-0">Bidding</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <h6 class="mt-n1 mb-0">On Progress</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <h6 class="mt-n1 mb-0">Completed</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <h6 class="mt-n1 mb-0">Cancelled</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">

                    @foreach ($biddings as $bidding)
                    <div class="job-item p-4 mb-4" id="title-div">
                        <div class="row g-4" class="myBox">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded"
                                    src="{{asset('front_end/img/com-logo-1.jpg')}}" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">{{$bidding->title}}</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-3"><i
                                            class="fas fa-thermometer-quarter me-2"></i>{{$bidding->required_level}}</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                    <span class="text">
                                        <p><br>{{$bidding->description}}</p>
                                    </span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="/client/job-detail/{{$bidding->id}}" >View
                                        {{-- href="/freelancer/job-detail/{{$bidding->id}}" --}}
                                        Details</a>
                                </div>
                                <small class="text-truncate"><i
                                        class="far fa-calendar-alt text-primary me-2"></i>{{$bidding->created_at}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{$biddings->links()}}

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jobs End -->

@endsection