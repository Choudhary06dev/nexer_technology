@if(!isset($is_index))
@extends('frontend.layouts.app')

@section('title', 'Our Team - Nexer Tech Solutions')

@section('content')
@endif

<!-- Team Section -->
<section id="team">
    <div class="inner">
        <header class="major">
            <h2>Our Team</h2>
        </header>

        <div class="row">
            <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                <img src="{{ asset('images/author-image-1-646x680.jpg') }}" class="img-responsive" alt="" style="width: 100%;">
                <h3>Johnny William</h3>
                <h4><em>CEO</em></h4>
            </div>

            <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                <img src="{{ asset('images/author-image-2-646x680.jpg') }}" class="img-responsive" alt="" style="width: 100%;">
                <h3>Karry Pitcher</h3>
                <h4><em>CEO</em></h4>
            </div>

            <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                <img src="{{ asset('images/author-image-3-646x680.jpg') }}" class="img-responsive" alt="" style="width: 100%;">
                <h3>Mary Cool</h3>
                <h4><em>CEO</em></h4>
            </div>

            <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                <img src="{{ asset('images/author-image-4-646x680.jpg') }}" class="img-responsive" alt="" style="width: 100%;">
                <h3>Michael Soft</h3>
                <h4><em>CEO</em></h4>
            </div>
        </div>
    </div>
</section>

@if(!isset($is_index))
@endsection
@endif