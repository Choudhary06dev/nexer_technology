@if(!isset($is_index))


@section('title', 'About Us - Nexer Tech Solutions')

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
    <section class="about-intro">
        <div class="inner">
            <div class="row gtr-200">
                <div class="col-7 col-12-medium">
                    <header class="major">
                        <h2>Who We Are</h2>
                    </header>
                    <p>Nexer Tech Solution is a forward-thinking software development company committed to delivering innovative, scalable, and high-performance technology solutions for businesses across industries. Founded with a vision to drive digital transformation, we specialize in crafting custom software applications that empower organizations to thrive in a fast-evolving digital landscape.</p>
                    <p>Our team of skilled developers, designers, and technology strategists bring together deep technical expertise and a passion for problem-solving. Whether it's building robust web platforms, mobile applications, or enterprise-grade systems, we focus on quality, usability, and performance in everything we do.</p>
                </div>
                <div class="col-5 col-12-medium">
                    <span class="image fit modern-img-frame">
                        <img src="{{ asset('images/about-fullscreen-1-1920x700.jpg') }}" alt="About Nexer" />
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Grid -->
    <section class="about-features">
        <div class="inner">
            <header class="major text-center">
                <h2>Our Expertise</h2>
            </header>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon-wrapper"><i class="fa fa-code"></i></div>
                    <h3>Software Development</h3>
                    <p>Scalable custom software designed to solve complex business challenges with modern tech stacks.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-wrapper"><i class="fa fa-laptop"></i></div>
                    <h3>Web & App Solutions</h3>
                    <p>Responsive web platforms and high-performance mobile apps for iOS and Android.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-wrapper"><i class="fa fa-paint-brush"></i></div>
                    <h3>UI/UX Design</h3>
                    <p>User-centric design that prioritizes accessibility, aesthetics, and seamless interactions.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-wrapper"><i class="fa fa-cloud"></i></div>
                    <h3>Cloud Solutions</h3>
                    <p>Robust cloud infrastructure and migration services to ensure your data is secure and scalable.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-wrapper"><i class="fa fa-plug"></i></div>
                    <h3>API Integration</h3>
                    <p>Connecting your systems seamlessly for improved data flow and operational efficiency.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-wrapper"><i class="fa fa-wrench"></i></div>
                    <h3>Maintenance</h3>
                    <p>Ongoing support and modernization to keep your digital assets running at peak performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="about-philosophy footer-cta">
        <div class="inner text-center">
            <header class="major">
                <h2>Our Philosophy</h2>
            </header>
            <p>At Nexer Tech Solution, we believe in a client-first approach. We take the time to understand your business goals, challenges, and users to develop solutions that not only meet your needs but exceed your expectations. Our agile development process ensures transparency, flexibility, and rapid delivery without compromising on quality.</p>
            <p class="impact-text">Driven by innovation and guided by experience, Nexer Tech Solution is your trusted partner in technology.</p>
            <ul class="actions special">
                <li><a href="{{ route('contact') }}" class="hero-btn primary">Let’s build the future together</a></li>
            </ul>
        </div>
    </section>

</div>

@if(!isset($is_index))
@endsection
@endif