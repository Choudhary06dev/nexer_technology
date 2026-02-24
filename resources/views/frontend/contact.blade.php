@if(!isset($is_index))

@section('title', 'Contact Us - Nexer Tech Solutions')

@section('content')
<!-- Contact Hero -->
<section class="contact-hero">
    <div class="contact-hero-inner">
        <div class="contact-hero-badge"><i class="fa fa-envelope-o"></i> Let's Connect</div>
        <h1>Get In <span>Touch</span></h1>
        <p>Have a project in mind? We'd love to hear about it. Send us a message and we'll get back to you as soon as possible.</p>
        <div class="contact-hero-stats">
            <div class="stat-item"><span class="stat-num">24h</span><span class="stat-label">Response Time</span></div>
            <div class="stat-divider"></div>
            <div class="stat-item"><span class="stat-num">100%</span><span class="stat-label">Client Satisfaction</span></div>
            <div class="stat-divider"></div>
            <div class="stat-item"><span class="stat-num">5★</span><span class="stat-label">Rated Service</span></div>
        </div>
    </div>
</section>
@endif

<!-- Contact Main -->
<section id="contact" class="contact-main-section">

    <!-- Info Cards Row -->
    <div class="contact-info-strip">
        <div class="contact-info-card">
            <div class="contact-info-icon"><i class="fa fa-envelope"></i></div>
            <div class="contact-info-text">
                <span class="info-label">Email Us</span>
                <a href="mailto:manager@nexersol.com">manager@nexersol.com</a>
            </div>
        </div>
        <div class="contact-info-card">
            <div class="contact-info-icon"><i class="fa fa-phone"></i></div>
            <div class="contact-info-text">
                <span class="info-label">Call Us</span>
                <a href="tel:+923084992485">+92 308 4992485</a>
            </div>
        </div>
        <div class="contact-info-card">
            <div class="contact-info-icon"><i class="fa fa-map-marker"></i></div>
            <div class="contact-info-text">
                <span class="info-label">Visit Us</span>
                <span>915 High Q Tower, Gulberg V, Lahore</span>
            </div>
        </div>
        <div class="contact-info-card">
            <div class="contact-info-icon"><i class="fa fa-clock-o"></i></div>
            <div class="contact-info-text">
                <span class="info-label">Working Hours</span>
                <span>Mon – Fri, 9am – 6pm PKT</span>
            </div>
        </div>
    </div>

    <!-- Form + Map Grid -->
    <div class="contact-body-grid">

        <!-- Form -->
        <div class="contact-form-card">
            <div class="form-card-header">
                <h2>Send a Message</h2>
            </div>

            @if(session('success'))
            <div class="contact-success-alert">
                <i class="fa fa-check-circle"></i>
                <div>
                    <strong>Message Sent!</strong>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
            @endif

            <form method="post" action="{{ url('/contact') }}" class="contact-modern-form" novalidate>
                @csrf
                <div class="form-two-col">
                    <div class="modern-field">
                        <label for="name">Full Name <span class="req">*</span></label>
                        <div class="field-wrap">
                            <i class="fa fa-user field-icon"></i>
                            <input id="name" type="text" name="name" placeholder="John Doe" value="{{ old('name') }}" required />
                        </div>
                        @error('name')<span class="field-error"><i class="fa fa-exclamation-circle"></i> {{ $message }}</span>@enderror
                    </div>
                    <div class="modern-field">
                        <label for="email">Email Address <span class="req">*</span></label>
                        <div class="field-wrap">
                            <i class="fa fa-envelope field-icon"></i>
                            <input id="email" type="email" name="email" placeholder="john@example.com" value="{{ old('email') }}" required />
                        </div>
                        @error('email')<span class="field-error"><i class="fa fa-exclamation-circle"></i> {{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-two-col">
                    <div class="modern-field">
                        <label for="phone">Phone Number</label>
                        <div class="field-wrap phone-wrap">
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" />
                        </div>
                        <input type="hidden" name="full_phone" id="full_phone" value="{{ old('full_phone') }}">
                        @error('phone')<span class="field-error"><i class="fa fa-exclamation-circle"></i> {{ $message }}</span>@enderror
                    </div>
                    <div class="modern-field">
                        <label for="subject">Subject</label>
                        <div class="field-wrap">
                            <i class="fa fa-tag field-icon"></i>
                            <input id="subject" type="text" name="subject" placeholder="How can we help?" value="{{ old('subject') }}" />
                        </div>
                        @error('subject')<span class="field-error"><i class="fa fa-exclamation-circle"></i> {{ $message }}</span>@enderror
                    </div>
                </div>



                <div class="modern-field full">
                    <label for="message">Your Message <span class="req">*</span></label>
                    <div class="field-wrap">
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your project, goals, and timeline..." required>{{ old('message') }}</textarea>
                    </div>
                    @error('message')<span class="field-error"><i class="fa fa-exclamation-circle"></i> {{ $message }}</span>@enderror
                </div>

                <div class="form-submit-row">
                    <button type="submit" class="contact-send-btn" id="contact-submit">
                        <span class="btn-label">Send Message</span>
                        <span class="btn-icon"><i class="fa fa-paper-plane"></i></span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Right Side: Map + Socials -->
        <div class="contact-right-col">
            <!-- Google Map -->
            <div class="contact-map-card">
                <div class="map-header"><i class="fa fa-map-o"></i> Find Us Here</div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.404878699565!2d74.34286331512225!3d31.51754018138927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483b7d80dd7%3A0x856d3f5c4f5e41c7!2sGulberg%20V%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
                    width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" title="Nexer Technology Office Location">
                </iframe>
            </div>

            <!-- Social Links -->
            <div class="contact-social-card">
                <h3>Follow Us</h3>
                <p>Stay connected with us on social media for the latest updates and tech insights.</p>
                <div class="social-links-grid">
                    <a href="#" class="social-link-item linkedin"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a>
                    <a href="#" class="social-link-item twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    <a href="#" class="social-link-item facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a href="#" class="social-link-item instagram"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                    <a href="https://wa.me/923084992485" target="_blank" class="social-link-item whatsapp"><i class="fa fa-whatsapp"></i><span>WhatsApp</span></a>
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
    /* ===== CONTACT HERO ===== */
    .contact-hero {
        background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 40%, #0f172a 100%);
        padding: 100px 2em 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
        top: -150px;
        left: 50%;
        transform: translateX(-50%);
        pointer-events: none;
    }

    .contact-hero-inner {
        position: relative;
        z-index: 1;
        max-width: 700px;
        margin: 0 auto;
    }

    .contact-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(99, 102, 241, 0.15);
        border: 1px solid rgba(99, 102, 241, 0.3);
        color: #a5b4fc;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 0.85em;
        font-weight: 600;
        letter-spacing: 0.05em;
        margin-bottom: 1.5em;
        text-transform: uppercase;
    }

    .contact-hero h1 {
        color: #ffffff;
        font-size: 3.2em;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 0.5em;
    }

    .contact-hero h1 span {
        color: #818cf8;
    }

    .contact-hero>.contact-hero-inner>p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 1.1em;
        line-height: 1.7;
        margin-bottom: 2.5em;
    }

    .contact-hero-stats {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2em;
        flex-wrap: wrap;
    }

    .stat-item {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .stat-num {
        color: #818cf8;
        font-size: 1.8em;
        font-weight: 800;
        line-height: 1;
    }

    .stat-label {
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.78em;
        margin-top: 4px;
    }

    .stat-divider {
        width: 1px;
        height: 40px;
        background: rgba(255, 255, 255, 0.15);
    }

    /* ===== CONTACT MAIN ===== */
    .contact-main-section {
        background: #f8fafc;
        padding: 40px 2em 20px;
    }

    /* ===== INFO STRIP ===== */
    .contact-info-strip {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.2em;
        max-width: 1100px;
        margin: 0 auto 3em;
    }

    .contact-info-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 1.2em 1.5em;
        display: flex;
        align-items: center;
        gap: 1em;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        border: 1px solid #e2e8f0;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .contact-info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(99, 102, 241, 0.12);
        border-color: rgba(99, 102, 241, 0.2);
    }

    .contact-info-icon {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, #6366f1, #818cf8);
        border-radius: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.1em;
        flex-shrink: 0;
    }

    .contact-info-text {
        display: flex;
        flex-direction: column;
        min-width: 0;
    }

    .info-label {
        font-size: 0.72em;
        color: #94a3b8;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 3px;
    }

    .contact-info-text a,
    .contact-info-text span {
        color: #1e293b;
        font-weight: 600;
        font-size: 0.88em;
        white-space: normal;
        word-break: break-word;
        text-decoration: none;
    }

    .contact-info-text a:hover {
        color: #6366f1;
    }

    /* ===== BODY GRID ===== */
    .contact-body-grid {
        display: grid;
        grid-template-columns: 1fr 420px;
        gap: 2em;
        max-width: 1100px;
        margin: 0 auto;
    }

    /* ===== FORM CARD ===== */
    .contact-form-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 1em 2.5em;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
    }

    .form-card-header {
        margin-bottom: 2em;
    }

    .form-card-header h2 {
        font-size: 1.8em;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.3em;
    }

    .form-card-header p {
        color: #64748b;
        font-size: 0.95em;
    }

    /* Success Alert */
    .contact-success-alert {
        background: linear-gradient(135deg, #f0fdf4, #dcfce7);
        border: 1px solid #86efac;
        border-radius: 12px;
        padding: 1.2em 1.5em;
        display: flex;
        align-items: flex-start;
        gap: 1em;
        margin-bottom: 2em;
    }

    .contact-success-alert i {
        color: #22c55e;
        font-size: 1.5em;
        margin-top: 2px;
    }

    .contact-success-alert strong {
        color: #15803d;
        display: block;
        margin-bottom: 4px;
    }

    .contact-success-alert p {
        color: #166534;
        margin: 0;
        font-size: 0.9em;
    }

    /* Form */
    .contact-modern-form {
        display: flex;
        flex-direction: column;
        gap: 1.4em;
    }

    .form-two-col {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.4em;
    }

    .modern-field {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .modern-field label {
        font-size: 0.85em;
        font-weight: 700;
        color: #374151;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .req {
        color: #ef4444;
    }

    .field-wrap {
        position: relative;
    }

    .field-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 0.9em;
        z-index: 1;
        pointer-events: none;
    }

    .field-wrap textarea+.field-icon {
        top: 16px;
        transform: none;
    }

    .field-wrap input,
    .field-wrap select,
    .field-wrap textarea {
        width: 100%;
        padding: 13px 14px 13px 42px;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        font-size: 0.95em;
        color: #1e293b;
        background: #f8fafc;
        transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
        outline: none;
        box-sizing: border-box;
    }

    .field-wrap textarea {
        padding: 13px 14px 13px 14px;
        resize: vertical;
        min-height: 130px;
    }

    .field-wrap select {
        appearance: none;
        cursor: pointer;
    }

    .field-wrap input:focus,
    .field-wrap select:focus,
    .field-wrap textarea:focus {
        border-color: #6366f1;
        background: #ffffff;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    }

    .field-wrap input::placeholder,
    .field-wrap textarea::placeholder {
        color: #cbd5e1;
    }

    .field-error {
        font-size: 0.82em;
        color: #ef4444;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* Phone Input Override */
    .phone-wrap .iti {
        width: 100% !important;
        display: block !important;
    }

    .phone-wrap .iti input {
        padding-left: 90px !important;
        border-radius: 12px !important;
    }

    .iti__country-list {
        background: #fff !important;
        color: #1e293b !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 10px !important;
    }

    /* Submit */
    .form-submit-row {
        display: flex;
        align-items: center;
        gap: 1.5em;
        flex-wrap: wrap;
    }

    .contact-send-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #6366f1, #818cf8);
        color: white;
        border: none;
        border-radius: 12px;
        padding: 15px 32px;
        font-size: 1em;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s;
        box-shadow: 0 4px 20px rgba(99, 102, 241, 0.35);
    }

    .contact-send-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(99, 102, 241, 0.45);
        background: linear-gradient(135deg, #4f46e5, #6366f1);
    }

    .contact-send-btn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    .btn-icon {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        padding: 4px 8px;
    }

    .form-note {
        font-size: 0.82em;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 5px;
        margin: 0;
    }

    /* ===== RIGHT COLUMN ===== */
    .contact-right-col {
        display: flex;
        flex-direction: column;
        gap: 1.5em;
    }

    /* Map Card */
    .contact-map-card {
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.07);
        border: 1px solid #e2e8f0;
    }

    .map-header {
        padding: 1em 1.5em;
        font-weight: 700;
        color: #1e293b;
        border-bottom: 1px solid #f1f5f9;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.95em;
    }

    .map-header i {
        color: #6366f1;
    }

    .contact-map-card iframe {
        display: block;
    }

    /* Social Card */
    .contact-social-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 1.8em;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.07);
        border: 1px solid #e2e8f0;
    }

    .contact-social-card h3 {
        font-size: 1.1em;
        color: #0f172a;
        margin-bottom: 0.4em;
        font-weight: 700;
    }

    .contact-social-card p {
        color: #64748b;
        font-size: 0.88em;
        margin-bottom: 1.2em;
    }

    .social-links-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 0.8em;
    }

    .social-link-item {
        flex: 1 1 140px;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.88em;
        transition: all 0.25s;
    }

    .social-link-item i {
        font-size: 1.1em;
    }

    .social-link-item.linkedin {
        background: #EEF2FF;
        color: #0077b5;
    }

    .social-link-item.linkedin:hover {
        background: #0077b5;
        color: white;
    }

    .social-link-item.twitter {
        background: #EFF6FF;
        color: #1da1f2;
    }

    .social-link-item.twitter:hover {
        background: #1da1f2;
        color: white;
    }

    .social-link-item.facebook {
        background: #EFF6FF;
        color: #1877f2;
    }

    .social-link-item.facebook:hover {
        background: #1877f2;
        color: white;
    }

    .social-link-item.instagram {
        background: #FDF2F8;
        color: #e1306c;
    }

    .social-link-item.instagram:hover {
        background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
        color: white;
    }

    .social-link-item.whatsapp {
        background: #f0fdf4;
        color: #25d366;
    }

    .social-link-item.whatsapp:hover {
        background: #25d366;
        color: white;
    }



    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .contact-info-strip {
            grid-template-columns: repeat(2, 1fr);
        }

        .contact-body-grid {
            grid-template-columns: 1fr;
        }

        .contact-right-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        .contact-hero h1 {
            font-size: 2.2em;
        }

        .contact-hero-stats {
            gap: 1.2em;
        }

        .contact-info-strip {
            grid-template-columns: 1fr 1fr;
        }

        .form-two-col {
            grid-template-columns: 1fr;
        }

        .contact-right-col {
            grid-template-columns: 1fr;
        }

        .form-submit-row {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 480px) {
        .contact-info-strip {
            grid-template-columns: 1fr;
        }

        .contact-hero h1 {
            font-size: 1.8em;
        }

        .social-links-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.2/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Phone Input
        const phoneInput = document.querySelector('#phone');
        const fullPhoneInput = document.querySelector('#full_phone');
        if (phoneInput) {
            const iti = window.intlTelInput(phoneInput, {
                initialCountry: 'pk',
                separateDialCode: true,
                utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.2/build/js/utils.js',
            });
            const update = () => {
                fullPhoneInput.value = iti.getNumber();
            };
            phoneInput.addEventListener('change', update);
            phoneInput.addEventListener('input', () => {
                phoneInput.value = phoneInput.value.replace(/[^0-9]/g, '');
                update();
            });
            document.querySelector('form').addEventListener('submit', update);
        }

        // Submit button loading state
        const form = document.querySelector('form.contact-modern-form');
        const submitBtn = document.querySelector('#contact-submit');
        if (form && submitBtn) {
            form.addEventListener('submit', function() {
                submitBtn.disabled = true;
                const label = submitBtn.querySelector('.btn-label');
                if (label) label.textContent = 'Sending...';
            });
        }
    });
</script>
@endpush