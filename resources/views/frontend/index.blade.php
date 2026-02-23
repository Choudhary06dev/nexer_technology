@extends('frontend.layouts.app')

@section('title', 'Nexer Tech Solutions - Home')

@section('content')

<!-- Hero Section -->
<section id="banner" class="premium-hero">
    <div class="hero-content">
        <h1>Empowering Your <span>Digital Future</span></h1>
        <p>Nexer Technology Solutions provides cutting-edge tech expertise to scale and transform your business for the modern landscape.</p>
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
    <section id="testimonials">
        <div class="inner">
            <header class="major">
                <h2>Testimonials</h2>
            </header>
            <div class="row">
                <div class="col-6">
                    <p><em>"Nexer Tech Solutions brought both agility and enterprise-grade discipline to our digital transformation project. They integrated quickly with our in-house teams, navigated our legacy systems with ease, and delivered secure, scalable software on time. Their professionalism and accountability set them apart."</em></p>
                    <p><strong>- Aqib Ahsan "A ONE HOME TEXTILE"</strong></p>
                </div>

                <div class="col-6">
                    <p><em>"Working with Nexer Tech Solutions was a game-changer for our startup. Their team not only delivered a rock-solid MVP ahead of schedule, but they also helped us refine our vision. The communication was seamless, and the technical quality exceeded our expectations. Nexer isn't just a service provider – they’re a true partner."</em></p>
                    <p><strong>- Sher Khan "Techmuo"</strong></p>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.contact', ['is_index' => true])

</div>

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.2/build/css/intlTelInput.css">
<style>
    #main section {
        padding: 1.5em 0;
        border-top: 1px solid rgba(36, 41, 67, 0.1);
    }

    #banner {
        min-height: 100vh;
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
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.2/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.querySelector("#phone");
        const fullPhoneInput = document.querySelector("#full_phone");
        const iti = window.intlTelInput(input, {
            initialCountry: "pk",
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.2/build/js/utils.js",
        });

        input.addEventListener('change', function() {
            fullPhoneInput.value = iti.getNumber();
        });

        // Restrict to numbers only
        input.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            fullPhoneInput.value = iti.getNumber();
        });

        document.querySelector('form').addEventListener('submit', function() {
            fullPhoneInput.value = iti.getNumber();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endpush