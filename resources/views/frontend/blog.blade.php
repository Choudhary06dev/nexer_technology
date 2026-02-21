@if(!isset($is_index))


@section('title', 'Blog - Nexer Tech Solutions')

@section('content')
<!-- Blog Hero -->
<section class="premium-hero blog-hero">
    <div class="hero-content">
        <h1>Our <span>Blog</span></h1>
        <p>Insights, trends, and success stories from the forefront of digital innovation.</p>
    </div>
</section>
@endif

<!-- Blog Section -->
<section id="blog" class="main">
    <div class="inner">
        <header class="major text-center">
            <h2>Latest Insights</h2>
        </header>
        
        <p class="text-center">Nexer Tech Solution's blog provides deep insights into the most recent software development trends, digital transformation strategies, and the latest news from our expert technology teams.</p>

        <div class="blog-grid">
            <!-- Post 1 -->
            <div class="blog-post-card">
                <div class="blog-img">
                    <img src="{{ asset('images/blog-1-720x480.jpg') }}" alt="Healthcare AI">
                </div>
                <div class="blog-body">
                    <h3>Revolutionizing Healthcare with AI</h3>
                    <p>How artificial intelligence is transforming patient care and operational efficiency in modern healthcare systems.</p>
                    <a href="#" class="blog-btn">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Post 2 -->
            <div class="blog-post-card">
                <div class="blog-img">
                    <img src="{{ asset('images/blog-2-720x480.jpg') }}" alt="Fintech Future">
                </div>
                <div class="blog-body">
                    <h3>The Future of Fintech</h3>
                    <p>Exploring the emerging trends in financial technology and how they are reshaping the global economy.</p>
                    <a href="#" class="blog-btn">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        @if(isset($is_index))
        <ul class="actions special" style="margin-top: 3em;">
            <li><a href="{{ route('about') }}" class="button next">View All Posts</a></li>
        </ul>
        @endif
    </div>
</section>

@if(!isset($is_index))
@endsection
@endif