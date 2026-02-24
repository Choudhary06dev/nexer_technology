@extends('frontend.layouts.app')

@section('title', 'Nexer Technology - Home')

@section('content')

@php $bannerImage = asset('images/banner-image-1-1920x700.png'); @endphp
<section id="banner" class="premium-hero">
    <style>
        .banner-bg-overlay {
            background-image: url('{{ $bannerImage }}') !important;
        }
    </style>
    <div class="banner-bg-overlay"></div>
    <div class="hero-content">
        <h1>Empowering Your <span>Digital Future</span></h1>
        <p>Nexer Technology provides cutting-edge tech expertise to scale and transform your business for the modern landscape.</p>
        <div class="hero-actions">
            <a href="#about" class="hero-btn primary scrolly">Learn More</a>
            <a href="#contact" class="hero-btn secondary scrolly">Get Started</a>
        </div>
    </div>
</section>

<!-- Main -->
<div id="main">

    @include('frontend.about-us', ['is_index' => true])

    @include('frontend.blog', ['is_index' => true])

    @include('frontend.team', ['is_index' => true])

    <!-- Testimonials -->
    <section id="testimonials" class="modern-testimonials">
        <div class="inner">
            <header class="major text-center" style="margin-left: auto; margin-right: auto;">
                <h2>What Our Clients Say</h2>
                <p>Real feedback from businesses we've helped transform</p>
            </header>
            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fa fa-quote-left"></i></div>
                    <div class="rating">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Nexer Tech Solutions brought both agility and enterprise-grade discipline to our digital transformation project. They integrated quickly with our in-house teams, navigated our legacy systems with ease, and delivered secure, scalable software on time."</p>
                    <div class="client-info">
                        <div class="client-details">
                            <span class="client-name">Aqib Ahsan</span>
                            <span class="client-company">A ONE HOME TEXTILE</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fa fa-quote-left"></i></div>
                    <div class="rating">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Working with Nexer Tech Solutions was a game-changer for our startup. Their team not only delivered a rock-solid MVP ahead of schedule, but they also helped us refine our vision. The communication was seamless, and the quality exceeded expectations."</p>
                    <div class="client-info">
                        <div class="client-details">
                            <span class="client-name">Sher Khan</span>
                            <span class="client-company">Techmuo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.contact', ['is_index' => true])

</div>

@endsection

@push('styles')
<style>
    #main section {
        padding: 2em 0;
        border-top: 1px solid rgba(36, 41, 67, 0.1);
        background: #ffffff !important;
        position: relative;
        z-index: 2;
    }

    /* Modern Testimonials Styling */
    .modern-testimonials {
        background: linear-gradient(135deg, #f8faff 0%, #ffffff 100%) !important;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2.5em;
        margin-top: 3em;
    }

    .testimonial-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(0, 77, 230, 0.1);
        border-radius: 20px;
        padding: 2em 1.5em;
        position: relative;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .testimonial-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 77, 230, 0.08);
        border-color: rgba(0, 77, 230, 0.3);
    }

    .quote-icon {
        position: absolute;
        top: 1.5em;
        right: 1.5em;
        font-size: 2em;
        color: rgba(0, 77, 230, 0.1);
        transition: color 0.3s ease;
    }

    .testimonial-card:hover .quote-icon {
        color: rgba(0, 77, 230, 0.2);
    }

    .rating {
        margin-bottom: 1.5em;
        color: #ffc107;
        font-size: 0.9em;
    }

    .testimonial-text {
        font-size: 1.1em;
        line-height: 1.8;
        color: #444;
        margin-bottom: 2em;
        font-style: italic;
    }

    .client-info {
        display: flex;
        align-items: center;
        gap: 1em;
    }

    .client-name {
        display: block;
        font-weight: 700;
        color: #1a1a1a;
        font-size: 1.1em;
    }

    .client-company {
        display: block;
        font-size: 0.85em;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 0.2em;
    }

    @media screen and (max-width: 736px) {
        .testimonial-card {
            padding: 2em 1.5em;
        }
    }

    #banner.premium-hero {
        min-height: 90vh !important;
        height: 90vh !important;
        position: relative;
        overflow: hidden;
    }

    .banner-bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: 100% 100% !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        z-index: 0;
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .alert-success {
        background-color: #2eaf7d;
        color: white;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 4px;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for anchor links (with fixed header offset)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const headerHeight = document.getElementById('header')?.offsetHeight || 80;
                    const elementTop = targetElement.getBoundingClientRect().top + window.scrollY;
                    window.scrollTo({
                        top: elementTop - 50, // Reduced to 70px to scroll further down
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endpush