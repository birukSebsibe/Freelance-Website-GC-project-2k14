@extends('layouts/main_layout')
@include('dashboard.freelancer.navbar')

@section('content')
    @section('title', 'Mesob | Freelancer')

<section id="services" class="services">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p>Browse Jobs</p>
        </header>


        @foreach($jobs as $job)
        <a href="{{url('freelancer/home')}}">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-15">
                    <div class="bg-white p-3 rounded mt-2 jobs-box">
                        <div class="row">
                            {{-- <div class="col-md-3">
                                <div
                                    class="d-flex flex-column justify-content-center align-items-center icon-container bg-success text-white mb-2">
                                    <i class="fa fa-flask fa-5x mb-3 mt-5"></i><span class="mb-4">Hands on Lab</span>
                                </div>
                            </div> --}}
                            <div class="col-md-8 border-right">
                                <div class="listing-title">
                                    <a href="{{url('freelancer/home')}}"><h5>{{$job->title}}</h5></a>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <div class="d-flex flex-row align-items-center ratings"><span
                                            class="mr-1 rating-number">4</span>
                                        <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></div><span
                                            class="mr-2 text-black-50 number-ratings">(12342 ratings)</span>
                                    </div>
                                    @if ($job->required_level == 1)
                                        <div class="level mr-2"><span>Level:     </span><span
                                            class="font-weight-bold mark">Beginner</span></div>
                                    
                              
                                    @elseif ($job->required_level == 2)
                                        <div class="level mr-2"><span>Level:     </span><span
                                            class="font-weight-bold mark">Intermediate</span></div>
                                    
                                    @elseif ($job->required_level == 3)
                                        <div class="level mr-2"><span>Level:     </span><span
                                            class="font-weight-bold mark">Expert</span></div>
                                    
                                    @else
                                    <div class="level mr-2"><span>Level:     </span><span
                                        class="font-weight-bold mark">Any</span></div>
                                        
                                    @endif
                                    
                                    <div class="level mr-1"><span>Posted:     </span><span class="font-weight-bold mark">
                                        {{$job->created_at}}</span></div>
                                </div>
                                <div class="description">
                                    <p>{{$job->description}}</p>
                                </div>
                                <div class="tags mb-2"><span>Microsoft</span><span>Azure</span><span>Development</span>
                                </div>
                            </div>
                            <div class="d-flex col-md-3">
                                <div class="d-flex flex-column justify-content-start user-profile w-100">
                                    <div class="d-flex user"><img class="rounded-circle"
                                            src="https://i.imgur.com/6dOWqJu.jpg" width="50">
                                        <div class="about ml-1"><span class="d-block text-black font-weight-bold">Jason
                                                Hamza</span><span>Cloud consultant</span></div>
                                    </div>
                                    <div class="progresses"><span>Designing</span>
                                        <div class="progress mt-1">
                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 50%;">50%</div>
                                        </div>
                                    </div>
                                    <div class="progresses"><span>Expertise</span>
                                        <div class="progress mt-1">
                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 50%;">50%</div>
                                        </div>
                                    </div>
                                    <div class="progresses"><span>Awareness</span>
                                        <div class="progress mt-1">
                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 50%;">50%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </a>
        @endforeach
</section><!-- End Services Section -->
@endsection