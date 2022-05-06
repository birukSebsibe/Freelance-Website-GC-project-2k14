@extends('layouts.main_layout')
@section('title', 'Mesob | Job Detail')
@section('navbar_content')
    @include('dashboard.client.clientNavBar')
@endsection

@section('body_content')


<!-- Job Detail Start -->
<div class="container-xxl py-5 "data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">

                {{-- Session Message--}}
                @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                {{-- Session Message end--}}

                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt=""
                        style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{$proposal->freelancer->name}}  </h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                            USA</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                            $456</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Cover Letter</h4>
                    <p id="descriptionText">{{$proposal->letterToClient}}</p>
                    <hr>
                    <h4 class="mb-3">Payment</h4>
                    <p>${{$proposal->min_payment}} - ${{$proposal->max_payment}}</p>
                    <hr>
                    <h4 class="mb-3">Experience</h4>
                    <p>{{$proposal->experienceDescription}}</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Freelancer Summary</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Name: {{$proposal->freelancer->name}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Email: {{$proposal->freelancer->email}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: Adama, ETHIOPIA</p>
                </div>
            </div>
            <div class="text-center">
                <div class="col-12">
                    <a class="btn btn-primary" href="#">Accept Proposal</a>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->
@endsection



