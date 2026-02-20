@extends('frontend.layouts.app')

@section('title', 'Contact Us - Nexer Tech Solutions')

@section('content')
<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Contact Us</h1>
            </header>
            <span class="image main"><img src="{{ asset('images/map.png') }}" alt="" /></span>
            <p>Have a project in mind or need help with a software solution? We're here to help! Get in touch with Nexer Tech Solution — our team is ready to answer your questions, discuss your ideas, and provide the support you need.</p>
        </div>
    </section>

</div>

<!-- Contact -->
<section id="contact">
    <div class="inner">
        <section>
            <header class="major">
                <h2>Contact us</h2>
            </header>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <form method="post" action="{{ url('/contact') }}">
                @csrf
                <div class="fields">
                    <div class="field half">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" />
                    </div>
                    <div class="field half">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="field half">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" id="phone" placeholder="Your Phone" />
                        <input type="hidden" name="full_phone" id="full_phone">
                    </div>
                    <div class="field half">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Project Subject" />
                    </div>
                    <div class="field">
                        <label for="message">Notes</label>
                        <textarea name="message" id="message" rows="6" placeholder="Tell us about your project..."></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="primary" /></li>
                </ul>
            </form>
        </section>
        <section class="split">
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-envelope"></span>
                    <h3>Email</h3>
                    <a href="mailto:manager@nexersol.com">manager@nexersol.com</a>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-phone"></span>
                    <h3>Phone</h3>
                    <span>+923084992485</span>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-home"></span>
                    <h3>Address</h3>
                    <span>915 High Q Tower<br> 1 Jail Rd, Gulberg V, Lahore</span>
                </div>
            </section>
        </section>
    </div>
</section>
@endsection

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