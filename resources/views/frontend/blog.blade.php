@if(!isset($is_index))

@section('title', 'Insights & Innovation - Nexer Tech Solutions')

@section('content')
<!-- Blog Hero -->
<section class="blog-hero-ultra">
    <div class="mesh-gradient"></div>
    <div class="hero-shapes">
        <div class="shape s1"></div>
        <div class="shape s2"></div>
        <div class="shape s3"></div>
    </div>
    <div class="hero-container">
        <div class="hero-badge-premium">
            <span class="pulse"></span>
            Nexer Engineering Insights
        </div>
        <h1>Shaping the <span>Future</span> of Code</h1>
        <p>A curated collection of deep-tech insights, engineering breakthroughs, and digital strategy from our global expert teams.</p>

        <div class="hero-search">
            <div class="search-box">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search insights...">
            </div>
            <div class="popular-tags">
                <span>AI</span>
                <span>DevOps</span>
                <span>Fintech</span>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Blog Main Section -->
<section id="blog" class="blog-section-ultra @if(isset($is_index)) index-mode @endif">
    <div class="container-premium">

        @if(isset($is_index))
        <header class="section-header-modern">
            <div class="header-line"></div>
            <span class="sub-label">Knowledge Hub</span>
            <h2 class="circular-hover">
                <span class="word">Latest</span>
                <span class="word accent">Engineering</span>
                <span class="word">Insights</span>
            </h2>
        </header>
        @else
        <!-- Featured Post - Only on Blog Page -->
        <div class="featured-post-container">
            <article class="featured-card">
                <div class="featured-img">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=1200&auto=format&fit=crop" alt="AI Breakthrough">
                </div>
                <div class="featured-content">
                    <div class="card-meta-row">
                        <span class="tag-pill">Engineering</span>
                        <span class="time-read"><i class="fa fa-clock-o"></i> 12 min read</span>
                    </div>
                    <h2>Empowering Digital Transformation: A Roadmap for Modern Enterprises</h2>
                    <p>Discover how Nexer Technology helps global organizations navigate the complex landscape of digital transformation with scalable, enterprise-grade software solutions.</p>
                    <div class="author-row">
                        <img src="https://i.pravatar.cc/150?u=1" alt="Author">
                        <div class="author-info">
                            <strong>Sarah Jenkins</strong>
                            <span>Head of AI Research</span>
                        </div>
                    </div>
                    <a href="{{ route('blog') }}" class="btn-read-featured">Read Full Analysis <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </article>
        </div>
        @endif

        <div class="blog-grid-premium">
            <!-- Article 1 -->
            <article class="glass-card">
                <div class="card-image-wrap">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop" alt="Software Development">
                    <div class="card-category-badge">Software Engineering</div>
                </div>
                <div class="card-body-premium">
                    <div class="card-meta-pills">
                        <span><i class="fa fa-calendar"></i> Oct 15, 2023</span>
                        <span><i class="fa fa-bolt"></i> Engineering</span>
                    </div>
                    <h3>Custom Software Development</h3>
                    <p>How we build scalable, high-performance software solutions tailored to solve unique business challenges across diverse industries.</p>
                    <div class="card-footer-premium">
                        <div class="mini-author">By <span>Arsalan Khan</span></div>
                        <a href="{{ route('blog') }}" class="link-arrow">Details <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="glass-card">
                <div class="card-image-wrap">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=800&auto=format&fit=crop" alt="Web Solutions">
                    <div class="card-category-badge">Web & Apps</div>
                </div>
                <div class="card-body-premium">
                    <div class="card-meta-pills">
                        <span><i class="fa fa-calendar"></i> Oct 12, 2023</span>
                        <span><i class="fa fa-bolt"></i> Strategy</span>
                    </div>
                    <h3>Modern Web & App Solutions</h3>
                    <p>Crafting responsive web platforms and high-performance mobile applications that drive user engagement and business growth.</p>
                    <div class="card-footer-premium">
                        <div class="mini-author">By <span>Emma Stone</span></div>
                        <a href="{{ route('blog') }}" class="link-arrow">Details <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="glass-card">
                <div class="card-image-wrap">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=800&auto=format&fit=crop" alt="Cloud Tech">
                    <div class="card-category-badge">Cloud Tech</div>
                </div>
                <div class="card-body-premium">
                    <div class="card-meta-pills">
                        <span><i class="fa fa-calendar"></i> Oct 08, 2023</span>
                        <span><i class="fa fa-bolt"></i> Infrastructure</span>
                    </div>
                    <h3>Cloud Infrastructure & Migration</h3>
                    <p>Ensuring your business is future-ready with robust cloud solutions designed for maximum scalability, security, and performance.</p>
                    <div class="card-footer-premium">
                        <div class="mini-author">By <span>John Doe</span></div>
                        <a href="{{ route('blog') }}" class="link-arrow">Details <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

@push('styles')
<style>
    :root {
        --primary-glow: #6366f1;
        --secondary-glow: #818cf8;
        --accent-glow: #4f46e5;
        --glass-bg: rgba(255, 255, 255, 0.7);
        --glass-border: rgba(255, 255, 255, 0.4);
        --dark-text: #0f172a;
        --light-text: #64748b;
    }

    /* ===== ULTRA HERO ===== */
    .blog-hero-ultra {
        position: relative;
        padding: 160px 0 120px;
        background: #020617;
        overflow: hidden;
        text-align: center;
        color: white;
    }

    .mesh-gradient {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:
            radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.15) 0, transparent 50%),
            radial-gradient(at 100% 100%, rgba(79, 70, 229, 0.15) 0, transparent 50%);
        opacity: 0.8;
    }

    .hero-shapes .shape {
        position: absolute;
        filter: blur(80px);
        opacity: 0.3;
        border-radius: 50%;
        z-index: 1;
        animation: floatShape 20s infinite alternate;
    }

    .s1 {
        width: 300px;
        height: 300px;
        background: #6366f1;
        top: -10%;
        left: 0%;
    }

    .s2 {
        width: 400px;
        height: 400px;
        background: #4f46e5;
        bottom: -20%;
        right: 0%;
    }

    .s3 {
        width: 250px;
        height: 250px;
        background: #818cf8;
        top: 40%;
        left: 50%;
        transform: translateX(-50%);
    }

    @keyframes floatShape {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(40px, 40px) scale(1.1);
        }
    }

    .hero-container {
        position: relative;
        z-index: 10;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 2em;
    }

    .hero-badge-premium {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 8px 18px;
        border-radius: 100px;
        font-size: 0.85em;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 2.5em;
        backdrop-filter: blur(10px);
    }

    .pulse {
        width: 8px;
        height: 8px;
        background: #6366f1;
        border-radius: 50%;
        box-shadow: 0 0 10px #6366f1;
        animation: pulseAnim 2s infinite;
    }

    @keyframes pulseAnim {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.5);
            opacity: 0.5;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .blog-hero-ultra h1 {
        font-size: 4.5em;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 0.4em !important;
        letter-spacing: -2px;
        color: white !important;
    }

    .blog-hero-ultra h1 span {
        background: linear-gradient(135deg, #818cf8, #6366f1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .blog-hero-ultra p {
        font-size: 1.25em;
        color: rgba(255, 255, 255, 0.6);
        max-width: 700px;
        margin: 0 auto 3em !important;
        line-height: 1.6;
    }

    .hero-search {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.5em;
    }

    .search-box {
        position: relative;
        width: 100%;
        max-width: 500px;
    }

    .search-box i {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, 0.4);
    }

    .search-box input {
        width: 100%;
        background: rgba(255, 255, 255, 0.05) !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        padding: 15px 15px 15px 50px !important;
        border-radius: 12px !important;
        color: white !important;
        font-size: 1em !important;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .search-box input:focus {
        background: rgba(255, 255, 255, 0.1) !important;
        border-color: #6366f1 !important;
        box-shadow: 0 0 25px rgba(99, 102, 241, 0.2) !important;
    }

    .popular-tags {
        display: flex;
        gap: 1em;
    }

    .popular-tags span {
        font-size: 0.8em;
        color: rgba(255, 255, 255, 0.4);
        background: rgba(255, 255, 255, 0.03);
        padding: 4px 12px;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s;
    }

    .popular-tags span:hover {
        color: white;
        background: rgba(99, 102, 241, 0.2);
    }

    /* ===== MAIN SECTION ===== */
    .blog-section-ultra {
        background: #fdfdff;
        padding: 100px 0;
        position: relative;
    }

    .blog-section-ultra.index-mode {
        padding: 60px 0 100px;
    }

    .container-premium {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 2em;
    }

    .section-header-modern {
        margin-bottom: 4em;
        text-align: center;
    }

    .header-line {
        width: 40px;
        height: 4px;
        background: #6366f1;
        margin: 0 auto 1.5em;
        border-radius: 10px;
    }

    .sub-label {
        display: block;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 0.85em;
        letter-spacing: 2px;
        color: #6366f1;
        margin-bottom: 0.8em;
    }

    .section-header-modern h2 {
        font-size: 2.8em;
        font-weight: 800;
        color: #0f172a !important;
        cursor: default;
    }

    .section-header-modern h2.circular-hover .word {
        display: inline-block;
        transition: color 0.3s;
    }

    .section-header-modern h2.circular-hover .word.accent {
        color: #6366f1;
    }

    .section-header-modern h2.circular-hover:hover .word {
        animation: circularFloat 3s infinite linear;
    }

    .section-header-modern h2.circular-hover:hover .word:nth-child(2) {
        animation-delay: 0.5s;
    }

    .section-header-modern h2.circular-hover:hover .word:nth-child(3) {
        animation-delay: 1s;
    }

    @keyframes circularFloat {
        0% {
            transform: translate(0, -12px);
        }

        25% {
            transform: translate(12px, 0px);
        }

        50% {
            transform: translate(0, 12px);
        }

        75% {
            transform: translate(-12px, 0px);
        }

        100% {
            transform: translate(0, -12px);
        }
    }

    /* ===== FEATURED CARD ===== */
    .featured-post-container {
        margin-top: -80px;
        margin-bottom: 5em;
        position: relative;
        z-index: 20;
    }

    .featured-card {
        background: white;
        border-radius: 30px;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        box-shadow: 0 40px 80px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(226, 232, 240, 0.5);
    }

    .featured-img {
        overflow: hidden;
    }

    .featured-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .featured-card:hover .featured-img img {
        transform: scale(1.03);
    }

    .featured-content {
        padding: 4em;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-meta-row {
        display: flex;
        align-items: center;
        gap: 1.5em;
        margin-bottom: 1.5em;
    }

    .tag-pill {
        background: #eef2ff;
        color: #4f46e5;
        padding: 6px 16px;
        border-radius: 100px;
        font-size: 0.8em;
        font-weight: 700;
        text-transform: uppercase;
    }

    .time-read {
        font-size: 0.85em;
        color: #94a3b8;
        font-weight: 600;
    }

    .featured-content h2 {
        font-size: 2.2em !important;
        font-weight: 800 !important;
        line-height: 1.2 !important;
        margin-bottom: 0.8em !important;
        color: #0f172a !important;
    }

    .featured-content p {
        font-size: 1.1em;
        line-height: 1.7;
        color: #64748b;
        margin-bottom: 2em !important;
    }

    .author-row {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 2.5em;
    }

    .author-row img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }

    .author-info strong {
        display: block;
        font-size: 0.95em;
        color: #1e293b;
    }

    .author-info span {
        font-size: 0.8em;
        color: #94a3b8;
    }

    .btn-read-featured {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        font-weight: 700;
        color: #6366f1 !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9em;
        border-bottom: 2px solid #eef2ff !important;
        padding-bottom: 4px;
        transition: all 0.3s;
    }

    .btn-read-featured:hover {
        gap: 20px;
        border-color: #6366f1 !important;
    }

    /* ===== BLOG GRID ===== */
    .blog-grid-premium {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 3em;
    }

    .glass-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid #f1f5f9;
        transition: all 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    }

    .glass-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px rgba(99, 102, 241, 0.12);
        border-color: rgba(99, 102, 241, 0.2);
    }

    .card-image-wrap {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .card-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .glass-card:hover .card-image-wrap img {
        transform: scale(1.1);
    }

    .card-category-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        padding: 5px 14px;
        border-radius: 100px;
        font-size: 0.75em;
        font-weight: 700;
        color: #0f172a;
        text-transform: uppercase;
    }

    .card-body-premium {
        padding: 2.2em;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .card-meta-pills {
        display: flex;
        gap: 1em;
        margin-bottom: 1.2em;
    }

    .card-meta-pills span {
        font-size: 0.72em;
        font-weight: 700;
        text-transform: uppercase;
        color: #94a3b8;
        letter-spacing: 0.5px;
    }

    .card-body-premium h3 {
        font-size: 1.45em !important;
        font-weight: 700 !important;
        line-height: 1.4 !important;
        color: #1e293b !important;
        margin-bottom: 0.8em !important;
    }

    .card-body-premium p {
        font-size: 0.95em;
        line-height: 1.7;
        color: #64748b;
        margin-bottom: 2em !important;
        flex-grow: 1;
    }

    .card-footer-premium {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 1.5em;
        border-top: 1px solid #f8fafc;
    }

    .mini-author {
        font-size: 0.85em;
        color: #94a3b8;
    }

    .mini-author span {
        font-weight: 700;
        color: #1e293b;
    }

    .link-arrow {
        color: #6366f1 !important;
        font-weight: 800;
        font-size: 0.85em;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: transform 0.3s;
    }

    .link-arrow:hover {
        transform: rotate(90deg);
    }

    /* Index Footer */
    .index-footer {
        margin-top: 5em;
        text-align: center;
    }

    .btn-all-insights {
        position: relative;
        display: inline-flex;
        padding: 18px 45px;
        background: #0f172a;
        color: white !important;
        border-radius: 100px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        overflow: hidden;
        transition: all 0.3s;
    }

    .btn-glow {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }

    .btn-all-insights:hover .btn-glow {
        left: 100%;
    }

    .btn-all-insights:hover {
        background: #6366f1;
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(99, 102, 241, 0.3);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
        .blog-hero-ultra h1 {
            font-size: 3.5em;
        }

        .featured-card {
            padding: 0.5em;
        }

        .featured-content {
            padding: 2.5em;
        }
    }

    @media (max-width: 1024px) {
        .blog-grid-premium {
            grid-template-columns: repeat(2, 1fr);
        }

        .featured-card {
            grid-template-columns: 1fr;
        }

        .featured-img {
            height: 350px;
        }
    }

    @media (max-width: 768px) {
        .blog-hero-ultra {
            padding: 120px 0 80px;
        }

        .blog-hero-ultra h1 {
            font-size: 2.8em;
        }

        .blog-grid-premium {
            grid-template-columns: 1fr;
            max-width: 450px;
            margin: 0 auto;
        }

        .section-header-modern h2 {
            font-size: 2.2em;
        }

        .featured-content {
            padding: 2em;
        }

        .featured-content h2 {
            font-size: 1.8em !important;
        }
    }
</style>
@endpush

@if(!isset($is_index))
@endsection
@endif

@push('scripts')
<script>
    document.querySelectorAll('.link-arrow').forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href') === "{{ route('blog') }}" || this.getAttribute('href') === '#') {
                e.preventDefault();
                alert('Detailed case study for this project is being documented and will be available soon!');
            }
        });
    });
</script>
@endpush