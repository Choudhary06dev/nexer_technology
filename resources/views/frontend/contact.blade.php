@if(!isset($is_index))

@section('title', 'Contact Us - Nexer Tech Solutions')

@section('content')
<!-- Premium Contact Hero -->
<section class="contact-hero-premium">
    <div class="inner">
        <header class="major">
            <h1><span>Get In Touch</span>Let's Start a Conversation</h1>
        </header>
    </div>
</section>
@endif

<!-- Contact Content -->
<section id="contact" class="contact-premium-section">
    <div class="contact-grid-container">
        <!-- Form Side -->
        <div class="contact-premium-form">
            <h2>Send us a message</h2>

            @if(session('success'))
            <div class="alert-premium-success">
                <i class="fa fa-check-circle"></i> {{ session('success') }}
            </div>
            @endif

            <form method="post" action="{{ url('/contact') }}" class="stylish-form">
                @csrf
                <div class="form-row">
                    <div class="input-group">
                        <label>Your Name</label>
                        <input type="text" name="name" placeholder="John Doe" required />
                    </div>
                    <div class="input-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="john@example.com" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label>Phone Number</label>
                        <div class="phone-input-container">
                            <input type="tel" name="phone" id="phone" required />
                        </div>
                        <input type="hidden" name="full_phone" id="full_phone">
                    </div>
                    <div class="input-group">
                        <label>Subject</label>
                        <input type="text" name="subject" placeholder="General Inquiry" required />
                    </div>
                </div>

                <div class="input-group full">
                    <label>How can we help?</label>
                    <textarea name="message" rows="4" placeholder="Tell us about your project..." required></textarea>
                </div>

                <div class="submit-wrap">
                    <button type="submit" class="btn-premium-send">
                        Send Message <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Info Side -->
        <div class="contact-premium-info">
            <h2>Information</h2>

            <div class="info-premium-card">
                <div class="icon-shield"><i class="fa fa-envelope"></i></div>
                <div class="card-details">
                    <h3>Email us</h3>
                    <a href="mailto:manager@nexersol.com">manager@nexersol.com</a>
                </div>
            </div>

            <div class="info-premium-card">
                <div class="icon-shield"><i class="fa fa-phone"></i></div>
                <div class="card-details">
                    <h3>Call us</h3>
                    <a href="tel:+923084992485">+92 308 4992485</a>
                </div>
            </div>

            <div class="info-premium-card">
                <div class="icon-shield"><i class="fa fa-map-marker"></i></div>
                <div class="card-details">
                    <h3>Visit us</h3>
                    <p>915 High Q Tower, 1 Jail Rd, <br>Gulberg V, Lahore, Pakistan</p>
                </div>
            </div>
        </div>
    </div>
</section>

@if(!isset($is_index))
@endsection
@endif

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/contact-redesign.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.2/build/css/intlTelInput.css">
<style>
    .alert-premium-success {
        background: #f0fff4;
        border-left: 4px solid #38a169;
        color: #2f855a;
        padding: 1.5em;
        margin-bottom: 2em;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 15px;
        font-weight: 600;
    }

    .phone-input-container .iti {
        width: 100% !important;
    }

    .phone-input-container input {
        border-bottom: 2px solid #eeeeee !important;
        padding-left: 55px !important;
    }

    .iti__country-list {
        background-color: #ffffff !important;
        color: #000000 !important;
        border: 1px solid #eeeeee;
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

        const updateFullPhone = () => {
            if (iti.isValidNumber()) {
                fullPhoneInput.value = iti.getNumber();
            } else {
                fullPhoneInput.value = "";
            }
        };

        input.addEventListener('change', updateFullPhone);
        input.addEventListener('input', () => {
            input.value = input.value.replace(/[^0-9]/g, '');
            updateFullPhone();
        });

        document.querySelector('form').addEventListener('submit', function() {
            fullPhoneInput.value = iti.getNumber();
        });
    });
</script>
@endpush