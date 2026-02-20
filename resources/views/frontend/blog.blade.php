@if(!isset($is_index))
@extends('frontend.layouts.app')

@section('title', 'Blog - Nexer Tech Solutions')

@section('content')
@endif

<!-- Blog Section -->
<section id="blog">
    <div class="inner">
        <header class="major">
            <h1>Blog</h1>
        </header>
        <span class="image main"><img src="{{ asset('images/blog-fullscreen-1-1920x700.jpg') }}" alt="Blog Banner" /></span>

        <p>Nexer Tech Solution's blog provides deep insights into the most recent software development trends, digital transformation strategies, and the latest news from our expert technology teams.</p>

        <div class="row gtr-200">
            <div class="col-12">
                <section>
                    <span class="image left"><img src="{{ asset('images/blog-1-720x480.jpg') }}" alt="Healthcare AI" /></span>
                    <h3>Revolutionizing Healthcare with AI</h3>
                    <p>How artificial intelligence is transforming patient care and operational efficiency in modern healthcare systems.</p>
                    <div class="clearfix"></div>
                    <hr />
                </section>

                <section>
                    <span class="image right"><img src="{{ asset('images/blog-2-720x480.jpg') }}" alt="Fintech Future" /></span>
                    <h3>The Future of Fintech</h3>
                    <p>Exploring the emerging trends in financial technology and how they are reshaping the global economy.</p>
                    <div class="clearfix"></div>
                    <hr />
                </section>
            </div>
        </div>
        <ul class="actions">
            <li><a href="#" class="button">View All Posts</a></li>
        </ul>
    </div>
</section>

@if(!isset($is_index))
@endsection
@endif