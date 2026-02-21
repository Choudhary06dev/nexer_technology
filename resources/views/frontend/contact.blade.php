@if(!isset($is_index))

@section('title', 'Contact Us - Nexer Tech Solutions')

@section('content')
<!-- Contact Hero -->
<section class="contact-hero-premium">
    <div class="inner">
        <header class="major">
            <h1>Get in <span>Touch</span></h1>
        </header>
        <p>Expert solutions for your digital growth. Reach out to our team today.</p>
    </div>
</section>
@endif

<!-- Contact Section -->
<section id="contact" class="full-page-section">
    <div class="contact-wrapper-full">
        <!-- Form Side -->
        <div class="contact-form-side">
            <div class="content-padded">
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
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="E.g. John Doe" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="E.g. john@example.com" required />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <div class="phone-input-container">
                                <input type="tel" name="phone" id="phone" required />
                            </div>
                            <input type="hidden" name="full_phone" id="full_phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="Project Inquiry" required />
                        </div>
                        <div class="form-group full-width">
                            <label for="message">Your Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Tell us about your requirements..." required></textarea>
                        </div>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="premium-btn">
                            <span>Send Message</span>
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Info Side -->
        <div class="contact-info-side">
            <div class="content-padded">
                <header class="major">
                    <h2>Contact Information</h2>
                </header>

                <div class="info-cards-container">
                    <div class="modern-info-card">
                        <div class="icon-wrap"><i class="fa fa-envelope-open"></i></div>
                        <div class="text-wrap">
                            <h3>Email Address</h3>
                            <a href="mailto:manager@nexersol.com">manager@nexersol.com</a>
                        </div>
                    </div>

                    <div class="modern-info-card">
                        <div class="icon-wrap"><i class="fa fa-phone-alt"></i></div>
                        <div class="text-wrap">
                            <h3>Call Us Anytime</h3>
                            <a href="tel:+923084992485">+92 308 4992485</a>
                        </div>
                    </div>

                    <div class="modern-info-card">
                        <div class="icon-wrap"><i class="fa fa-map-marker-alt"></i></div>
                        <div class="text-wrap">
                            <h3>Our Headquarters</h3>
                            <span>915 High Q Tower, 1 Jail Rd, Gulberg V, Lahore, Pakistan</span>
                        </div>
                    </div>
                </div>

                <div class="support-badge">
                    <div class="badge-content">
                        <i class="fa fa-clock"></i>
                        <div>
                            <h4>24/7 Availability</h4>
                            <p>We're always ready to help you thrive.</p>
                        </div>
                    </div>
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
    /* Reset & Full Width Setup */
    #contact {
        background-color: #242943 !important;
        padding: 0 !important;
        margin: 0 !important;
        width: 100% !important;
        overflow: hidden;
    }

    .contact-wrapper-full {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        min-height: 90vh;
    }

    .contact-form-side {
        flex: 1 1 50%;
        background: #2a2f4a;
        display: flex;
        justify-content: flex-end;
    }

    .contact-info-side {
        flex: 1 1 50%;
        background: #242943;
        display: flex;
        justify-content: flex-start;
    }

    .content-padded {
        width: 100%;
        max-width: 700px;
        padding: 6em 4em;
    }

    /* Hero Styling (External Page) */
    .contact-hero-premium {
        background: linear-gradient(rgba(36, 41, 67, 0.7), rgba(36, 41, 67, 0.9)),
            url('https://images.unsplash.com/photo-1516383274235-5f42d6c6426d?q=80&w=2070&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        padding: 10em 2em 6em;
        text-align: center;
    }

    .contact-hero-premium h1 {
        font-size: clamp(2.5rem, 8vw, 4rem);
        font-weight: 800;
        margin-bottom: 0.5em;
    }

    .contact-hero-premium h1 span {
        color: #9bf1ff;
    }

    .contact-hero-premium p {
        font-size: 1.4rem;
        color: rgba(255, 255, 255, 0.6);
    }

    /* Theme Headings Overrides */
    #contact .major h2 {
        font-size: 2.2rem;
        font-weight: 800;
        border-bottom: 3px solid #9bf1ff;
        display: inline-block;
        padding-bottom: 0.5rem;
        margin-bottom: 3rem;
        letter-spacing: -1px;
    }

    #contact .major h2:after {
        display: none !important;
    }

    /* Form Design */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }

    .form-group.full-width {
        grid-column: span 2;
    }

    .form-group label {
        color: #9bf1ff !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.75rem;
        font-weight: 700;
        margin-bottom: 0.8rem;
        display: block;
    }

    .modern-form input,
    .modern-form textarea {
        background: rgba(255, 255, 255, 0.04) !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        border-radius: 8px !important;
        color: #fff !important;
        padding: 1rem 1.25rem !important;
        width: 100% !important;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .modern-form input:focus,
    .modern-form textarea:focus {
        border-color: #9bf1ff !important;
        background: rgba(155, 241, 255, 0.06) !important;
        box-shadow: 0 0 15px rgba(155, 241, 255, 0.15) !important;
        outline: none;
    }

    /* Phone Input Fixes */
    .phone-input-container {
        width: 100%;
        position: relative;
    }

    .iti {
        width: 100% !important;
        display: block !important;
    }

    #phone {
        padding-left: 95px !important;
    }

    /* Space for flag + code */

    .iti__selected-flag {
        background: transparent !important;
        border: none !important;
        padding-left: 15px !important;
    }

    .iti__country-list {
        background-color: #242943 !important;
        color: #fff !important;
        border: 1px solid #3d4465;
        border-radius: 10px;
        padding: 10px;
    }

    .iti__country:hover {
        background-color: rgba(155, 241, 255, 0.1) !important;
        border-radius: 5px;
    }

    .iti__dial-code {
        color: rgba(255, 255, 255, 0.6) !important;
    }

    .iti__selected-dial-code {
        color: #fff !important;
    }

    /* Button */
    .premium-btn {
        background: #9bf1ff;
        color: #242943 !important;
        border: none;
        padding: 1.2rem 3.5rem;
        border-radius: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.9rem;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 15px;
        margin-top: 1rem;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .premium-btn:hover {
        background: #fff;
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    }

    /* Info Cards */
    .info-cards-container {
        display: flex;
        flex-direction: column;
        gap: 2.5rem;
    }

    .modern-info-card {
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
        transition: all 0.3s ease;
    }

    .modern-info-card:hover {
        transform: translateX(10px);
    }

    .icon-wrap {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(155, 241, 255, 0.15) 0%, rgba(155, 241, 255, 0.05) 100%);
        border: 1px solid rgba(155, 241, 255, 0.3);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #9bf1ff;
        font-size: 1.6rem;
        flex-shrink: 0;
    }

    .text-wrap h3 {
        font-size: 0.75rem !important;
        color: #9bf1ff !important;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 0.6rem !important;
        font-weight: 800;
    }

    .text-wrap a,
    .text-wrap span {
        font-size: 1.3rem;
        font-weight: 600;
        color: #fff;
        text-decoration: none;
        line-height: 1.4;
        transition: color 0.3s ease;
    }

    .text-wrap a:hover {
        color: #9bf1ff;
    }

    .support-badge {
        margin-top: 5rem;
        padding: 2.5rem;
        background: rgba(155, 241, 255, 0.03);
        border: 1px dashed rgba(155, 241, 255, 0.2);
        border-radius: 20px;
    }

    .badge-content {
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }

    .badge-content i {
        font-size: 2.5rem;
        color: #9bf1ff;
        opacity: 0.6;
    }

    .badge-content h4 {
        color: #fff !important;
        margin-bottom: 0.3rem !important;
        font-size: 1.1rem !important;
    }

    .badge-content p {
        margin: 0;
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.9rem;
    }

    /* Success Alert */
    .alert-success {
        background: rgba(46, 175, 125, 0.15);
        border: 1px solid #2eaf7d;
        color: #2eaf7d;
        padding: 1.2rem;
        border-radius: 12px;
        margin-bottom: 2rem;
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 600;
    }

    /* Responsive */
    @media screen and (max-width: 1100px) {
        .content-padded {
            padding: 4em 2em;
        }
    }

    @media screen and (max-width: 900px) {

        .contact-form-side,
        .contact-info-side {
            flex: 1 1 100%;
            justify-content: center;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-group.full-width {
            grid-column: span 1;
        }

        .content-padded {
            padding: 4em 10%;
        }

        .contact-hero-premium h1 {
            font-size: 2.8rem;
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