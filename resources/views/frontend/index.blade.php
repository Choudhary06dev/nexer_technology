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
        <p>Nexer Tech Solutions provides cutting-edge tech expertise to scale and transform your business for the modern landscape.</p>
        <div class="hero-actions">
            <a href="#about" class="hero-btn primary scrolly">Learn More</a>
            <a href="#contact" class="hero-btn secondary scrolly">Get Started</a>
        </div>
    </div>
</section>

<!-- Main -->
<div id="main">

    @include('frontend.about-us', ['is_index' => true])

    @include('frontend.video-analytics', ['is_index' => true])

    @include('frontend.process', ['is_index' => true])

    @include('frontend.blog', ['is_index' => true])

    @include('frontend.team', ['is_index' => true])

    <!-- Testimonials -->
    <section id="testimonials" class="premium-testimonials">
        <div class="inner">
            <header class="major text-center ao-fade-up" style="margin-left: auto; margin-right: auto;">
                <h2>What <span class="highlight">Our Clients</span> Say</h2>
                <p>Real feedback from businesses we've helped transform</p>
            </header>
            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card ao-fade-up">
                    <div class="card-bg"></div>
                    <div class="quote-header">
                        <div class="client-avatar">
                            <span class="initials">AA</span>
                        </div>
                        <div class="client-info">
                            <span class="client-name">Aqib Ahsan</span>
                            <span class="client-company">A ONE HOME TEXTILE</span>
                        </div>
                        <div class="quote-icon"><i class="fa fa-quote-right"></i></div>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Nexer Tech Solutions brought both agility and enterprise-grade discipline to our digital transformation project. They integrated quickly with our in-house teams, navigated our legacy systems with ease, and delivered secure, scalable software on time."</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card ao-fade-up">
                    <div class="card-bg"></div>
                    <div class="quote-header">
                        <div class="client-avatar">
                            <span class="initials">SK</span>
                        </div>
                        <div class="client-info">
                            <span class="client-name">Sher Khan</span>
                            <span class="client-company">Techmuo</span>
                        </div>
                        <div class="quote-icon"><i class="fa fa-quote-right"></i></div>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Working with Nexer Tech Solutions was a game-changer for our startup. Their team not only delivered a rock-solid MVP ahead of schedule, but they also helped us refine our vision. The communication was seamless, and the quality exceeded expectations."</p>
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

    /* Premium Testimonials Styling */
    .premium-testimonials {
        background: #f8fafc !important;
        position: relative;
        overflow: hidden;
    }

    .premium-testimonials::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -10%;
        width: 50%;
        height: 100%;
        background: radial-gradient(circle, rgba(0, 77, 230, 0.05) 0%, transparent 70%);
        z-index: 0;
        pointer-events: none;
    }

    .premium-testimonials .inner {
        position: relative;
        z-index: 1;
        max-width: 1280px;
        margin: 0 auto;
    }

    .premium-testimonials header.major h2 {
        font-size: 2.5em;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 0.2em;
    }

    .premium-testimonials header.major h2 .highlight {
        color: #004de6;
    }

    .premium-testimonials header.major p {
        color: #64748b;
        font-size: 1.1em;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 3em;
        margin-top: 4em;
    }

    .testimonial-card {
        background: #ffffff;
        border-radius: 24px;
        padding: 2em 2em;
        /* Reduced vertical padding from 3em to 2em, horizontal from 2.5em to 2em */
        position: relative;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(226, 232, 240, 1);
        overflow: hidden;
        z-index: 1;
        display: flex;
        flex-direction: column;
        height: 100%;
        /* Ensure equal heights if needed, but flex lets them grow naturally */
    }

    .testimonial-card .card-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 77, 230, 0.03) 0%, transparent 100%);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 50px rgba(0, 77, 230, 0.12);
        border-color: rgba(0, 77, 230, 0.3);
    }

    .testimonial-card:hover .card-bg {
        opacity: 1;
    }

    .quote-header {
        display: flex;
        align-items: center;
        gap: 1.5em;
        margin-bottom: 1.5em;
        /* Reduced from 2em */
        position: relative;
    }

    .client-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #004de6 0%, #00bfff 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.25em;
        box-shadow: 0 8px 20px rgba(0, 77, 230, 0.3);
        flex-shrink: 0;
    }

    .client-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .client-name {
        display: block;
        font-weight: 700;
        color: #0f172a;
        font-size: 1.2em;
        margin-bottom: 0.2em;
    }

    .client-company {
        display: block;
        font-size: 0.85em;
        color: #64748b;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .quote-icon {
        margin-left: auto;
        font-size: 2.5em;
        color: rgba(0, 77, 230, 0.08);
        transition: all 0.5s ease;
    }

    .testimonial-card:hover .quote-icon {
        color: rgba(0, 77, 230, 0.2);
        transform: scale(1.1) rotate(5deg);
    }

    .rating {
        margin-bottom: 1em;
        /* Reduced from 1.5em */
        color: #fbbf24;
        font-size: 1.1em;
        display: flex;
        gap: 0.2em;
    }

    .testimonial-text {
        font-size: 1.15em;
        line-height: 1.7;
        color: #334155;
        margin-bottom: 0;
        font-style: italic;
        position: relative;
    }

    @media screen and (max-width: 980px) {
        .testimonials-grid {
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
        }

        .testimonial-card {
            padding: 1.5em 1.5em;
        }

        .premium-testimonials header.major h2 {
            font-size: 2.2em;
        }
    }

    @media screen and (max-width: 736px) {
        .testimonials-grid {
            grid-template-columns: 1fr;
            gap: 2em;
        }

        .testimonial-card {
            padding: 2em 1.5em;
        }

        .quote-icon {
            font-size: 2em;
        }

        .premium-testimonials header.major h2 {
            font-size: 2em;
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
        background-size: cover !important;
        background-position: center center !important;
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
        document.querySelectorAll('a[href^="#"], a[href*="/#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                const targetId = href.includes('#') ? '#' + href.split('#')[1] : null;

                if (!targetId || targetId === '#') return;

                // Only prevent default if target exists on current page
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    const headerHeight = 60; // Reduced to match mobile header
                    const elementTop = targetElement.getBoundingClientRect().top + window.scrollY;
                    window.scrollTo({
                        top: elementTop - headerHeight - 20, // More breathing room
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endpush