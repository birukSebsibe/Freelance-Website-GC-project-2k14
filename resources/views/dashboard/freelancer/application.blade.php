@extends('layouts.main_layout')

@section('title', 'Submit-Proposal')

@section('navbar_content')

@endsection

@section('body_content')
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="">
                    <h4 class="mb-4">Apply For The Job</h4>
                    
                    <form action="{{route('freelancer.submit', $job->id)}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input name="max_payment" type="number" class="form-control" placeholder="Payment">
                            </div>
                            
                            <div class="col-12">
                                <textarea name = "letterToClient" class="form-control" rows="5" placeholder="Cover letter"></textarea>
                            </div>

                            <div class="col-12">
                                <textarea name = "experienceDescription" class="form-control" rows="5" placeholder="Experience"></textarea>
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="file" class="form-control bg-white">
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
                
@endsection