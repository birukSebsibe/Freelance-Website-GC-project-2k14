@extends('layouts.main_layout')
@section('title', 'Mesob | Job Detail')
@section('navbar_content')
    @include('dashboard.client.clientNavBar')
@endsection

@section('body_content')
<!-- Job Description Modal -->
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="staticBackdropLabel">Edit Job Description</h5> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('client.editJobTitleDescription', $bidding->id)}}" method="PUT">
                    @csrf
                    <div class="row g-3">

                        <div class="col-12">
                            <h3 class="mb-3">Job Title</h3><input name="title" type="text" class="form-control"
                                value="{{ old('title', $bidding->title) }}"></input>
                        </div>

                        <div class="col-12">
                            <textarea name="description" class="form-control"
                                rows="5">{{ old('description', $bidding->description) }}</textarea>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a class="btn btn-danger" data-bs-dismiss="modal">Close
                                {{-- href="/client/job-detail/{{$bidding->id}}" --}}
                                Details</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
{{-- Job Description Modal end --}}


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
                        <h3 class="mb-3">{{$bidding->title}} <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" data-toggle="tooltip" data-placement="top"
                                title="Edit Job"><i class="fas fa-pencil-alt fa-2xl alt"></i></button> </h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                            USA</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                            $456</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Job description</h4>
                    <p id="descriptionText">{{$bidding->description}}</p>
                    <hr>
                    <h4 class="mb-3">Payment</h4>
                    <p>5$-10$</p>
                    <hr>
                    <h4 class="mb-3">Qualifications</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua
                        sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore
                            gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat
                        </li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Job Summery</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: {{$bidding->created_at}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Proposals: 10</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: $50</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: Adama, ETHIOPIA</p>
                </div>
                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Company Detail</h4>
                    <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero
                        dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et
                        rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd clita labore.</p>
                </div>
            </div>
            @if($bidding->status)
            <div class="text-center">
                <div class="col-12">
                    <a class="btn btn-primary" href="/client/bidding/viewproposals/{{$bidding->id}}">View Proposals</a>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->
@endsection

