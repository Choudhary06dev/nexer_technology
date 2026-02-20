@if(!isset($is_index))
@extends('frontend.layouts.app')

@section('title', 'Contact Us - Nexer Tech Solutions')

@section('content')
<!-- Contact Hero -->
<section class="premium-hero contact-hero">
    <div class="hero-content">
        <h1>Get in <span>Touch</span></h1>
        <p>Let's discuss your next breakthrough. Our experts are ready to turn your vision into reality.</p>
    </div>
</section>
@endif

<!-- Contact Section -->
<section id="contact" class="main">
    <div class="inner">
        <div class="row gtr-200">
            <!-- Form Side -->
            <div class="col-7 col-12-medium">
                <header class="major">
                    <h2>Send us a Message</h2>
                </header>

                @if(session('success'))
                <div class="alert alert-success">
                    <i class="fa fa-check-circle"></i> {{ session('success') }}
                </div>
                @endif

                <form method="post" action="{{ url('/contact') }}" class="modern-form">
                    @csrf
                    <div class="fields">
                        <div class="field half">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="John Doe" required />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="john@example.com" required />
                        </div>
                        <div class="field half">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="0300 1234567" required />
                            <input type="hidden" name="full_phone" id="full_phone">
                        </div>
                        <div class="field half">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="Project Inquiry" required />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="5" placeholder="Tell us about your project or requirements..." required></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><button type="submit" class="hero-btn primary">Send Message <i class="fa fa-paper-plane"></i></button></li>
                    </ul>
                </form>
            </div>

            <!-- Info Side -->
            <div class="col-5 col-12-medium">
                <header class="major">
                    <h2>Contact Information</h2>
                </header>
                
                <div class="contact-info-list">
                    <div class="info-item">
                        <div class="info-icon"><i class="fa fa-envelope"></i></div>
                        <div class="info-text">
                            <h3>Email</h3>
                            <a href="mailto:manager@nexersol.com">manager@nexersol.com</a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa fa-phone"></i></div>
                        <div class="info-text">
                            <h3>Phone</h3>
                            <a href="tel:+923084992485">+92 308 4992485</a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                        <div class="info-text">
                            <h3>Address</h3>
                            <span>915 High Q Tower, 1 Jail Rd,<br>Gulberg V, Lahore, Pakistan</span>
                        </div>
                    </div>
                </div>

                <!-- Map / Visual element placeholder -->
                <div class="contact-visual modern-img-frame" style="margin-top: 2em; height: 200px; background: url('{{ asset('images/map.png') }}') no-repeat center center; background-size: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

@if(!isset($is_index))
@endsection
@endif

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.2/build/css/intlTelInput.css">
<style>
    .iti {
        width: 100%;
        color: #000;
    }

    .alert-success {
        background-color: #2eaf7d;
        color: white;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 4px;
    }

    #contact input,
    #contact textarea {
        background-color: rgba(255, 255, 255, 0.05);
        color: #fff;
        width: 100%;
    }

    #contact label {
        color: #fff;
        font-weight: bold;
        margin-top: 1em;
    }

    .iti {
        width: 100%;
    }

    .iti__country-list {
        color: #000;
    }

    #contact input::placeholder,
    #contact textarea::placeholder {
        color: rgba(255, 255, 255, 0.7) !important;
    }

    /* Adjust form vs contact info width */
    @media screen and (min-width: 981px) {
        #contact .inner>section:first-of-type {
            width: 60%;
        }

        #contact .inner>section.split {
            width: 40%;
        }
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
    });
</script>
@endpush