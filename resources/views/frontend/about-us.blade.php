@if(!isset($is_index))

@section('title', 'About Us - Nexer Technology')

@section('content')
<!-- About Hero -->
<section class="premium-hero about-hero">
    <div class="hero-content">
        <h1>About <span>Nexer</span></h1>
        <p>A legacy of innovation, high-performance solutions, and a vision to empower digital transformations globally.</p>
    </div>
</section>
@endif

<!-- Main Content Area -->
<div id="main" class="{{ !isset($is_index) ? 'alt' : '' }}">

    <!-- Who We Are Section -->
    <section id="about" class="about-intro-modern">
        <div class="about-container">

            <!-- Section Label -->
            <div class="about-label ao-fade-up">
                <span class="label-dot"></span>
                Who We Are
            </div>

            <!-- Heading -->
            <!-- <h2 class="about-headline ao-fade-up">
                Building Tomorrow's<br>
                <span class="gradient-text">Digital Solutions</span> Today
            </h2> -->

            <!-- Content Grid -->
            <div class="about-content-grid">

                <!-- Text Side -->
                <div class="about-text-col ao-slide-left">
                    <p class="about-lead">
                        Nexer Technology is a <strong>forward-thinking software development company</strong> committed to delivering innovative, scalable, and high-performance technology solutions for businesses across industries.
                    </p>
                    <p class="about-body">
                        Founded with a vision to drive digital transformation, we specialize in crafting custom software applications that empower organizations to thrive in a fast-evolving digital landscape.
                    </p>
                    <p class="about-body">
                        Our team of skilled developers, designers, and technology strategists bring together deep technical expertise and a passion for problem-solving. Whether it's building robust web platforms, mobile applications, or enterprise-grade systems, we focus on <strong>quality, usability, and performance</strong> in everything we do.
                    </p>

                </div>

                <!-- Image Side -->
                <div class="about-img-col ao-slide-right">
                    <div class="about-img-wrapper">
                        <img src="{{ asset('images/about-fullscreen-1-1920x700.jpg') }}" alt="About Nexer Technology" />
                        <div class="img-badge">
                            <i class="fa fa-check-circle"></i>
                            <span>Trusted Partner</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Row -->
            <div class="about-stats-row ao-fade-up">
                <div class="about-stat">
                    <span class="stat-value">50+</span>
                    <span class="stat-desc">Projects Delivered</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="stat-value">98%</span>
                    <span class="stat-desc">Client Satisfaction</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="stat-value">5+</span>
                    <span class="stat-desc">Years Experience</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="stat-value">10k+</span>
                    <span class="stat-desc">Hours of Works</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="stat-value">15+</span>
                    <span class="stat-desc">Award Winning</span>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Grid -->
    <section class="about-features-modern">
        <div class="about-container">
            <div class="about-label about-label--center ao-fade-up">
                <span class="label-dot"></span>
                Our Expertise
            </div>
            <h2 class="about-headline about-headline--center ao-fade-up">
                What We <span class="gradient-text">Deliver</span>
            </h2>

            <div class="features-grid-modern">
                <div class="fcard ao-fade-up" style="animation-delay: 0.05s">
                    <div class="fcard-icon"><i class="fa fa-code"></i></div>
                    <h3>Software Development</h3>
                    <p>Scalable custom software designed to solve complex business challenges with modern tech stacks.</p>
                    <div class="fcard-line"></div>
                </div>
                <div class="fcard ao-fade-up" style="animation-delay: 0.12s">
                    <div class="fcard-icon"><i class="fa fa-laptop"></i></div>
                    <h3>Web &amp; App Solutions</h3>
                    <p>Responsive web platforms and high-performance mobile apps for iOS and Android.</p>
                    <div class="fcard-line"></div>
                </div>
                <div class="fcard ao-fade-up" style="animation-delay: 0.19s">
                    <div class="fcard-icon"><i class="fa fa-paint-brush"></i></div>
                    <h3>UI/UX Design</h3>
                    <p>User-centric design that prioritizes accessibility, aesthetics, and seamless interactions.</p>
                    <div class="fcard-line"></div>
                </div>
                <div class="fcard ao-fade-up" style="animation-delay: 0.26s">
                    <div class="fcard-icon"><i class="fa fa-cloud"></i></div>
                    <h3>Cloud Solutions</h3>
                    <p>Robust cloud infrastructure and migration services to ensure your data is secure and scalable.</p>
                    <div class="fcard-line"></div>
                </div>
                <div class="fcard ao-fade-up" style="animation-delay: 0.33s">
                    <div class="fcard-icon"><i class="fa fa-plug"></i></div>
                    <h3>API Integration</h3>
                    <p>Connecting your systems seamlessly for improved data flow and operational efficiency.</p>
                    <div class="fcard-line"></div>
                </div>
                <div class="fcard ao-fade-up" style="animation-delay: 0.40s">
                    <div class="fcard-icon"><i class="fa fa-wrench"></i></div>
                    <h3>Maintenance</h3>
                    <p>Ongoing support and modernization to keep your digital assets running at peak performance.</p>
                    <div class="fcard-line"></div>
                </div>
            </div>
        </div>
    </section>

</div>

@if(!isset($is_index))
@endsection
@endif

@push('styles')
<style>
    /* ====================================================
   ABOUT PAGE — MODERN CSS
==================================================== */

    /* Container */
    .about-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 2em;
    }

    /* ---- Intro Section ---- */
    .about-intro-modern {
        padding: 5em 0 3em;
        background: #ffffff;
    }

    /* Section label pill */
    .about-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(0, 77, 230, 0.07);
        color: #004de6;
        font-size: 0.75em;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 6px 16px;
        border-radius: 50px;
        margin-bottom: 1.2em;
    }

    .about-label--center {
        display: flex;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
        width: fit-content;
    }

    .label-dot {
        width: 7px;
        height: 7px;
        background: #004de6;
        border-radius: 50%;
        display: inline-block;
    }

    /* Main heading */
    .about-headline {
        font-size: clamp(2em, 4vw, 3em) !important;
        font-weight: 800 !important;
        color: #0f172a !important;
        line-height: 1.15 !important;
        margin-bottom: 1.5em !important;
    }

    .about-headline--center {
        text-align: center;
    }

    .gradient-text {
        background: linear-gradient(135deg, #004de6, #3b82f6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Content grid */
    .about-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4em;
        align-items: center;
    }

    /* Text column */
    .about-lead {
        font-size: 1.1em !important;
        line-height: 1.8 !important;
        color: #000000 !important;
        margin-bottom: 1.2em !important;
        font-weight: 400 !important;
    }

    .about-body {
        font-size: 0.97em !important;
        line-height: 1.8 !important;
        color: #000000 !important;
        margin-bottom: 1em !important;
    }

    .about-body strong {
        color: #000000 !important;
    }

    /* Stats row */
    .about-stats-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 4em;
        padding-top: 3em;
        border-top: 1px solid #e2e8f0;
        width: 100%;
    }

    .about-stat {
        display: flex;
        flex-direction: column;
    }

    .stat-value {
        font-size: 1.7em;
        font-weight: 800;
        color: #004de6;
        line-height: 1;
    }

    .stat-desc {
        font-size: 0.7em;
        color: #94a3b8;
        font-weight: 600;
        margin-top: 4px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        white-space: nowrap;
    }

    .about-stat-divider {
        width: 1px;
        height: 40px;
        background: #e2e8f0;
    }

    @media (max-width: 1200px) {
        .about-stats-row {
            flex-wrap: wrap;
            gap: 1.5em;
            justify-content: flex-start;
        }

        .about-stat-divider {
            display: none;
        }
    }

    /* Image column */
    .about-img-col {
        margin-top: -2em;
    }

    .about-img-wrapper {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.12);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .about-img-wrapper:hover {
        transform: translateY(-6px);
        box-shadow: 0 40px 90px rgba(0, 77, 230, 0.15);
    }

    .about-img-wrapper img {
        width: 100%;
        height: 420px;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }

    .about-img-wrapper:hover img {
        transform: scale(1.03);
    }

    /* Floating badge */
    .img-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        padding: 10px 18px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.82em;
        font-weight: 700;
        color: #0f172a;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    .img-badge i {
        color: #22c55e;
        font-size: 1.1em;
    }

    /* ---- Features Section ---- */
    .about-features-modern {
        padding: 3em 0 5em;
        background: #f8fafc;
    }

    .features-grid-modern {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5em;
        margin-top: 3em;
    }

    /* Feature cards */
    .fcard {
        background: #ffffff;
        border-radius: 20px;
        padding: 2em 1.8em;
        border: 1px solid #e2e8f0;
        position: relative;
        overflow: hidden;
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1),
            box-shadow 0.35s ease,
            border-color 0.35s ease;
    }

    .fcard::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #004de6, #3b82f6);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.35s ease;
    }

    .fcard:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(0, 77, 230, 0.12);
        border-color: rgba(0, 77, 230, 0.15);
    }

    .fcard:hover::before {
        transform: scaleX(1);
    }

    .fcard-icon {
        width: 52px;
        height: 52px;
        background: rgba(0, 77, 230, 0.08);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #004de6;
        font-size: 1.3em;
        margin-bottom: 1.2em;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .fcard:hover .fcard-icon {
        background: #004de6;
        color: #ffffff;
        transform: rotate(-8deg) scale(1.1);
    }

    .fcard h3 {
        font-size: 1.05em !important;
        font-weight: 700 !important;
        color: #0f172a !important;
        margin-bottom: 0.6em !important;
    }

    .fcard p {
        font-size: 0.88em !important;
        line-height: 1.7 !important;
        color: #64748b !important;
        margin: 0 !important;
    }

    .fcard-line {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 0;
    }

    /* ====================================================
   SCROLL ANIMATIONS
==================================================== */
    .ao-fade-up {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }

    .ao-slide-left {
        opacity: 0;
        transform: translateX(-40px);
        transition: opacity 0.8s ease, transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .ao-slide-right {
        opacity: 0;
        transform: translateX(40px);
        transition: opacity 0.8s ease, transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .ao-visible {
        opacity: 1 !important;
        transform: none !important;
    }

    /* ====================================================
   RESPONSIVE
==================================================== */
    @media (max-width: 1024px) {
        .features-grid-modern {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .about-content-grid {
            grid-template-columns: 1fr;
            gap: 2.5em;
        }

        .about-img-col {
            order: -1;
        }

        .about-img-wrapper img {
            height: 280px;
        }

        .about-stats-row {
            gap: 1.2em;
            justify-content: center;
        }

        .features-grid-modern {
            grid-template-columns: 1fr;
        }

        .about-headline {
            font-size: 1.8em !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Intersection Observer for scroll animations
    (function() {
        const animEls = document.querySelectorAll('.ao-fade-up, .ao-slide-left, .ao-slide-right');

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('ao-visible');
                    // Staggered delay via inline style, already set in HTML
                }
            });
        }, {
            threshold: 0.15
        });

        animEls.forEach(function(el) {
            observer.observe(el);
        });
    })();
</script>
@endpush