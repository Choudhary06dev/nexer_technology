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
<section id="team" class="main" style="padding-top: 0.5em !important; padding-bottom: 0.5em !important;">
    <div class="inner">
        <header class="major text-center">
            <h2>Our Leadership</h2>
        </header>

        <div class="team-grid">
            <div class="team-card">
                <div class="member-img">
                    <img src="{{ asset('images/author-image-1-646x680.jpg') }}" alt="Johnny William">
                    <div class="member-overlay">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Johnny William</h3>
                    <h4>Chief Executive Officer</h4>
                </div>
            </div>

            <div class="team-card">
                <div class="member-img">
                    <img src="{{ asset('images/author-image-2-646x680.jpg') }}" alt="Karry Pitcher">
                    <div class="member-overlay">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Karry Pitcher</h3>
                    <h4>Chief Technology Officer</h4>
                </div>
            </div>

            <div class="team-card">
                <div class="member-img">
                    <img src="{{ asset('images/author-image-3-646x680.jpg') }}" alt="Mary Cool">
                    <div class="member-overlay">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Mary Cool</h3>
                    <h4>Head of Design</h4>
                </div>
            </div>

            <div class="team-card">
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
                    <h3>Michael Soft</h3>
                    <h4>Lead Architect</h4>
                </div>
            </div>
        </div>
    </div>
</section>

@if(!isset($is_index))
@endsection
@endif