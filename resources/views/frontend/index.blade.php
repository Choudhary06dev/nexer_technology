@extends('frontend.layouts.app')

@section('title', 'Nexer Tech Solutions - Home')

@section('content')

<!-- Hero Section -->
<section class="premium-hero">
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

    <!-- About Section -->
    <section id="about" class="main">
        <div class="inner">
            <header class="major">
                <h2>About Us</h2>
            </header>
            <span class="image main"><img src="{{ asset('images/about-fullscreen-1-1920x700.jpg') }}" alt="" /></span>
            <p>Nexer Tech Solution is a forward-thinking software development company committed to delivering innovative, scalable, and high-performance technology solutions for businesses across industries. Founded with a vision to drive digital transformation, we specialize in crafting custom software applications that empower organizations to thrive in a fast-evolving digital landscape.</p>
            <p>Our team of skilled developers, designers, and technology strategists bring together deep technical expertise and a passion for problem-solving. Whether it's building robust web platforms, mobile applications, or enterprise-grade systems, we focus on quality, usability, and performance in everything we do.</p>

            <ul class="actions">
                <li><a href="#contact" class="button next scrolly">Get in touch</a></li>
            </ul>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog">
        <div class="inner">
            <header class="major">
                <h2>Blog</h2>
            </header>
            <span class="image main"><img src="{{ asset('images/blog-fullscreen-1-1920x700.jpg') }}" alt="Blog Banner" /></span>

            <p>Nexer Tech Solution's blog provides deep insights into the most recent software development trends and news.</p>

            <div class="row gtr-200">
                <div class="col-12">
                    <section>
                        <span class="image left"><img src="{{ asset('images/blog-1-720x480.jpg') }}" alt="Healthcare AI" /></span>
                        <h3>Revolutionizing Healthcare with AI</h3>
                        <p>How artificial intelligence is transforming patient care and operational efficiency in modern healthcare systems.</p>
                        <div class="clearfix"></div>
                        <hr />
                    </section>

                    <section>
                        <span class="image right"><img src="{{ asset('images/blog-2-720x480.jpg') }}" alt="Fintech Future" /></span>
                        <h3>The Future of Fintech</h3>
                        <p>Exploring the emerging trends in financial technology and how they are reshaping the global economy.</p>
                        <div class="clearfix"></div>
                        <hr />
                    </section>
                </div>
            </div>
            <ul class="actions">
                <li><a href="#" class="button">View All Posts</a></li>
            </ul>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team">
        <div class="inner">
            <header class="major">
                <h2>Our Team</h2>
            </header>
            <div class="row">
                <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                    <img src="{{ asset('images/author-image-1-646x680.jpg') }}" class="img-responsive" alt="" style="width: 100%;">
                    <h3>Johnny William</h3>
                    <h4><em>CEO</em></h4>
                </div>
                <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                    <img src="{{ asset('images/author-image-2-646x680.jpg') }}" class="img-responsive" alt="" style="width: 100%;">
                    <h3>Karry Pitcher</h3>
                    <h4><em>CEO</em></h4>
                </div>
                <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                    <img src="{{ asset('images/author-image-3-646x680.jpg') }}" class="img-responsive" alt="" style="width: 100%;">
                    <h3>Mary Cool</h3>
                    <h4><em>CEO</em></h4>
                </div>
                <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                    <img src="{{ asset('images/author-image-4-646x680.jpg') }}" class="img-responsive" alt="" style="width: 100%;">
                    <h3>Michael Soft</h3>
                    <h4><em>CEO</em></h4>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Contact -->
    <section id="contact">
        <div class="inner">
            <section>
                <header class="major">
                    <h2>Contact Us</h2>
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

</div>

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

    #main section {
        padding: 4em 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    #banner {
        min-height: 100vh;
    }

    #contact input,
    #contact textarea {
        background-color: rgba(255, 255, 255, 0.05) !important;
        color: #fff !important;
        width: 100%;
    }

    #contact label {
        color: #fff !important;
        font-weight: bold;
        margin-top: 1em;
    }

    #contact input::placeholder,
    #contact textarea::placeholder {
        color: rgba(255, 255, 255, 0.7) !important;
    }

    .iti__country-list {
        color: #000;
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