@extends('layouts.main_layout')
@section('title', 'Mesob | View Proposals')
@section('navbar_content')
    @include('dashboard.client.clientNavBar')
@endsection

@section('body_content')
<!-- Proposals Start -->
<div class="container-xxl py-5">
    <div class="container">


        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Proposal Listing</h1>

        
        {{-- Session Message--}}
        @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        {{-- Session Message end--}}


        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    @forelse ($proposals as $proposal)
                    <div class="proposal-item p-4 mb-4" id="title-div">
                        <div class="row g-4" class="myBox">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded"
                                    src="{{asset('front_end/img/com-logo-1.jpg')}}" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">{{$proposal->title}}</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-3"><i
                                            class="fas fa-thermometer-quarter me-2"></i>{{$proposal->required_level}}</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>{{$proposal->max_payment}}$</span>
                                    <span class="text">
                                        <p><br>{{$proposal->letterToClient}}</p>
                                    </span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="/freelancer/proposal-detail/{{$proposal->id}}">View
                                        Details</a>
                                </div>
                                <small class="text-truncate"><i
                                        class="far fa-calendar-alt text-primary me-2"></i>{{$proposal->created_at}}</small>
                            </div>
                        </div>
                    </div>
                    {{$proposals->links()}}
                    @empty
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>No Proposal Submitted</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Proposals End -->
@endsection
