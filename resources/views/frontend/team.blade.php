@if(!isset($is_index))

@endif
@if(!isset($is_index))


@section('title', 'Our Team - Nexer Tech Solutions')

@section('content')
<!-- Team Hero -->
<section class="premium-hero team-hero">
    <div class="hero-content">
        <h1>Meet the <span>Team</span></h1>
        <p>The visionaries and creators behind Nexer's high-performance technology solutions.</p>
    </div>
</section>
@endif

<!-- Team Section -->
<section id="team" class="main" style="padding-top: 3em !important; padding-bottom: 0.5em !important;">
    <div class="inner">
        <header class="major text-center ao-fade-up">
            <h2>Our Leadership</h2>
        </header>

        <div class="team-grid">
            <div class="team-card ao-fade-up">
                <div class="member-img">
                    <img src="{{ asset('images/author-image-1-646x680.jpg') }}" alt="Sher Khan" style="object-position: top center; object-fit: cover; width: 100%; height: 100%;">
                    <div class="member-overlay">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Sher Khan</h3>
                    <h4>Admin Officer</h4>
                </div>
            </div>

            <div class="team-card ao-fade-up">
                <div class="member-img">
                    <img src="{{ asset('images/author-image-2-646x680.jpg') }}" alt="Karry Pitcher">
                    <div class="member-overlay">
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/amjad-subhani"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Amjad Subhani</h3>
                    <h4>Software Developer</h4>
                </div>
            </div>

            <div class="team-card ao-fade-up">
                <div class="member-img">
                    <img src="{{ asset('images/author-image-3-646x680.jpg') }}" alt="Mary Cool">
                    <div class="member-overlay">
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/msaeedofficial"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Ahmad Saeed</h3>
                    <h4>Web Developer</h4>
                </div>
            </div>

            <div class="team-card ao-fade-up">
                <div class="member-img">
                    <img src="{{ asset('images/author-image-4-646x680.jpg') }}" alt="Michael Soft">
                    <div class="member-overlay">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Afaq Tahir</h3>
                    <h4>Sr. Laravel Developer</h4>
                </div>
            </div>
        </div>
    </div>
</section>

@if(!isset($is_index))
@endsection
@endif