@extends('frontend.layouts.app')

@section('title', 'Blog - Nexer Tech Solutions')

@section('content')

<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Blog</h1>
            </header>
            <span class="image main"><img src="{{ asset('images/blog-fullscreen-1-1920x700.jpg') }}" alt="Blog Banner" /></span>

            <p>Nexer Tech Solution's blog provides deep insights into the most recent software development trends, digital transformation strategies, and the latest news from our expert technology teams. We're dedicated to helping businesses stay ahead in an ever-shifting digital landscape through expert knowledge and shared experiences.</p>

            <!-- Blog Post Entries -->
            <div class="row gtr-200">
                <div class="col-12">

                    <!-- Blog Entry 1 -->
                    <section>
                        <span class="image left"><img src="{{ asset('images/blog-1-720x480.jpg') }}" alt="Healthcare AI" /></span>
                        <h3>Revolutionizing Healthcare with AI</h3>
                        <p>How artificial intelligence is transforming patient care and operational efficiency in modern healthcare systems. From predictive analytics to personalized medicine, the integration of AI is proving to be a game-changer for medical providers and patients alike.</p>
                        <ul class="actions">
                            <li><a href="#" class="button small">Read More</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <hr />
                    </section>

                    <!-- Blog Entry 2 -->
                    <section>
                        <span class="image right"><img src="{{ asset('images/blog-2-720x480.jpg') }}" alt="Fintech Future" /></span>
                        <h3>The Future of Fintech</h3>
                        <p>Exploring the emerging trends in financial technology and how they are reshaping the global economy. As decentralization and digital assets continue to rise, we investigate the key technologies ensuring security, transparency, and accessibility for financial users worldwide.</p>
                        <ul class="actions">
                            <li><a href="#" class="button small">Read More</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <hr />
                    </section>

                    <!-- Blog Entry 3 -->
                    <section>
                        <span class="image left"><img src="{{ asset('images/blog-3-720x480.jpg') }}" alt="E-commerce Scaling" /></span>
                        <h3>Scaling E-commerce Platforms</h3>
                        <p>Key strategies for building and managing high-performance e-commerce solutions that grow with your business. We cover everything from database optimization to global CDN delivery, ensuring your platform provides a flawless user experience under any load.</p>
                        <ul class="actions">
                            <li><a href="#" class="button small">Read More</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <hr />
                    </section>

                </div>
            </div>
        </div>
    </section>

</div>

@endsection