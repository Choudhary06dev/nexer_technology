@if(!isset($is_index))
@section('title', 'Video Analytics Solutions - Nexer Technology')
@section('content')
@endif

<!-- ==============================================
     VIDEO ANALYTICS: PREMIUM NAVY & BLUE EDITION
=============================================== -->
<section id="solutions" class="va-ng-section">
    <!-- Luxury Background Elements -->
    <div class="va-ng-bg">
        <div class="va-ng-grid"></div>
        <div class="va-ng-glow top-left"></div>
        <div class="va-ng-glow bottom-right"></div>
    </div>

    <div class="va-ng-container">
        
        <!-- HERO / INTRO -->
        <div class="va-ng-hero ao-fade-up">
            <div class="va-ng-hero-text">
                <div class="va-ng-badge">
                    <span class="va-ng-pulse"></span>
                    Premium Surveillance Intelligence
                </div>
                <h2>Next-Gen <span class="blue-text">Video Analytics</span> Solutions</h2>
                <p>We provide advanced Video Analytics solutions powered by intelligent AI-based surveillance technology. Our system transforms traditional CCTV monitoring into smart, automated, and actionable insights to enhance security, safety, and operational efficiency.</p>
            </div>
            
            <div class="va-ng-hero-visual ao-slide-right">
                <!-- AI Robotic Camera Image -->
                <img src="{{ asset('assets/img/ai_robotic_camera.png') }}" alt="AI Robotic Surveillance" class="ai-robotic-img">
            </div>
        </div>

        <!-- ASYMMETRICAL FEATURE MATRIX -->
        <div class="va-ng-matrix-title ao-fade-up">
            <h3>Advanced <span class="blue-text">Capabilities</span></h3>
            <div class="blue-line"></div>
        </div>

        <div class="va-ng-matrix">
            <!-- Feature 1 -->
            <div class="ng-card span-4 ao-fade-up" style="transition-delay: 0.1s">
                <div class="ng-card-img">
                    <img src="{{ asset('assets/img/ai_face_detection.png') }}" alt="Face Detection Grid">
                    <div class="ng-icon-overlay"><i class="fa fa-user-circle"></i></div>
                </div>
                <h4>Face Detection & Recognition</h4>
                <p>Pinpoint accuracy in recognizing faces even in crowded environments. Flag VIPs instantly or trigger immediate alerts for blacklisted individuals.</p>
                <div class="blue-laser-border"></div>
            </div>

            <!-- Feature 2 -->
            <div class="ng-card ao-fade-up" style="transition-delay: 0.2s">
                <div class="ng-card-img">
                    <img src="{{ asset('assets/img/ai_anpr_system.png') }}" alt="ANPR Plate Security">
                    <div class="ng-icon-overlay"><i class="fa fa-car"></i></div>
                </div>
                <h4>ANPR Systems</h4>
                <p>High-speed License Plate Recognition for automated gate access and traffic control.</p>
                <div class="blue-laser-border"></div>
            </div>

            <!-- Feature 3 -->
            <div class="ng-card ao-fade-up" style="transition-delay: 0.3s">
                <div class="ng-card-img">
                    <img src="{{ asset('assets/img/ai_perimeter.png') }}" alt="Perimeter Protection">
                    <div class="ng-icon-overlay"><i class="fa fa-shield"></i></div>
                </div>
                <h4>Perimeter Protection</h4>
                <p>Virtual tripwires detect any unauthorized intrusion instantly.</p>
                <div class="blue-laser-border"></div>
            </div>

            <!-- Feature 4 -->
            <div class="ng-card span-4 ao-fade-up" style="transition-delay: 0.4s">
                <div class="ng-card-img">
                    <img src="{{ asset('assets/img/ai_crowd.png') }}" alt="Crowd Traffic Thermal">
                    <div class="ng-icon-overlay"><i class="fa fa-users"></i></div>
                </div>
                <h4>Crowd Density & Human Classification</h4>
                <p>Accurately differentiate between humans and vehicles while monitoring crowd density in public areas to prevent stampedes or bottlenecks.</p>
                <div class="blue-laser-border"></div>
            </div>

            <!-- Feature 5 -->
            <div class="ng-card span-3 ao-fade-up" style="transition-delay: 0.5s">
                <div class="ng-card-img">
                    <img src="{{ asset('assets/img/ai_fire_smoke.png') }}" alt="Heat Detection">
                    <div class="ng-icon-overlay"><i class="fa fa-fire"></i></div>
                </div>
                <h4>Fire & Smoke</h4>
                <p>Early automated warnings before traditional heat sensors trigger.</p>
                <div class="blue-laser-border"></div>
            </div>

            <!-- Feature 6 -->
            <div class="ng-card span-3 ao-fade-up" style="transition-delay: 0.6s">
                <div class="ng-card-img">
                    <img src="{{ asset('assets/img/ai_object_tracking.png') }}" alt="Object AI Scan">
                    <div class="ng-icon-overlay"><i class="fa fa-briefcase"></i></div>
                </div>
                <h4>Object Tracking</h4>
                <p>Alerts for objects left behind or stolen from designated secure zones.</p>
                <div class="blue-laser-border"></div>
            </div>
        </div>

        <!-- USE CASES STRIP -->
        <div class="va-ng-usecases ao-fade-up">
            <div class="ng-uc-header">
                <h3>Scalable Deployments</h3>
            </div>
            <div class="ng-uc-flex">
                <div class="uc-item">
                    <i class="fa fa-building"></i>
                    <strong>Smart Offices</strong>
                </div>
                <div class="uc-item">
                    <i class="fa fa-shopping-cart"></i>
                    <strong>Retail Spaces</strong>
                </div>
                <div class="uc-item">
                    <i class="fa fa-industry"></i>
                    <strong>Factories</strong>
                </div>
                <div class="uc-item">
                    <i class="fa fa-graduation-cap"></i>
                    <strong>Campuses</strong>
                </div>
                <div class="uc-item">
                    <i class="fa fa-university"></i>
                    <strong>Mosques / Public</strong>
                </div>
            </div>
        </div>

        <!-- BENEFITS LIST -->
        <div class="va-ng-benefits ao-fade-up">
            <div class="ng-ben-item">
                <div class="ben-num">01</div>
                <h5>Automated Monitoring</h5>
                <p>Eliminate human error from traditional CCTV watching.</p>
            </div>
            <div class="ng-ben-line"></div>
            <div class="ng-ben-item">
                <div class="ben-num">02</div>
                <h5>Rapid Response</h5>
                <p>Sub-second alerts straight to security protocols.</p>
            </div>
            <div class="ng-ben-line"></div>
            <div class="ng-ben-item">
                <div class="ben-num">03</div>
                <h5>Business Intel</h5>
                <p>Turn footfall data into actionable operational insights.</p>
            </div>
            <div class="ng-ben-line"></div>
            <div class="ng-ben-item">
                <div class="ben-num">04</div>
                <h5>Plug-and-Play</h5>
                <p>Seamlessly integrates with your existing IP camera infrastructure.</p>
            </div>
        </div>

    </div>
</section>

@push('styles')
<style>
/* ====================================================
   NAVY & BLUE PREMIUM AESTHETIC - VIDEO ANALYTICS
==================================================== */

:root {
    --ng-navy: #0a1128;
    --ng-navy-light: #162241;
    --ng-blue-primary: #004de6;
    --ng-blue-light: #60a5fa;
    --ng-blue-glow: rgba(0, 77, 230, 0.3);
    --ng-text: #f8fafc; /* Reverted to light for use in dark cards */
    --ng-text-muted: #94a3b8; /* Reverted for dark cards */
}

.va-ng-section {
    background-color: var(--ng-navy);
    color: var(--ng-text);
    padding: 100px 0 120px;
    position: relative;
    overflow: hidden;
    font-family: 'Inter', sans-serif; /* fallback */
    border-top: 2px solid var(--ng-blue-primary);
}

/* Background Luxury Grid */
.va-ng-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
    pointer-events: none;
}
.va-ng-grid {
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(rgba(0, 77, 230, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 77, 230, 0.15) 1px, transparent 1px);
    background-size: 50px 50px;
    opacity: 0.8;
}

.va-ng-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, var(--ng-blue-glow) 0%, transparent 60%);
    border-radius: 50%;
    filter: blur(80px);
}
.va-ng-glow.top-left { top: -200px; left: -200px; }
.va-ng-glow.bottom-right { bottom: -200px; right: -200px; }

.va-ng-container {
    max-width: 1400px; /* Increased to reduce left/right empty space on larger screens */
    margin: 0 auto;
    padding: 0 40px;
    position: relative;
    z-index: 2;
}

/* Typography Overrides */
.blue-text {
    background: linear-gradient(135deg, var(--ng-blue-light) 0%, var(--ng-blue-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* --- Hero Section --- */
.va-ng-hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
    margin-bottom: 40px;
}
.va-ng-hero-text {
    flex: 1.2;
    max-width: 750px; /* Increased to span more width */
}

.va-ng-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 18px;
    border: 1px solid rgba(0, 77, 230, 0.4);
    border-radius: 50px;
    background: rgba(0, 77, 230, 0.05);
    color: var(--ng-blue-light);
    font-size: 0.8em;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 25px;
    box-shadow: 0 0 15px var(--ng-blue-glow);
}
.va-ng-pulse {
    width: 8px; height: 8px;
    background: var(--ng-blue-primary);
    border-radius: 50%;
    box-shadow: 0 0 10px var(--ng-blue-primary);
    animation: ng-pulse 2s infinite;
}
@keyframes ng-pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.5); opacity: 0.4; }
    100% { transform: scale(1); opacity: 1; }
}

.va-ng-hero h2 {
    font-size: clamp(2.5em, 5vw, 4em);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 20px;
    color: var(--ng-navy); /* fixed text color from white to navy for contrast */
}
.va-ng-hero p {
    font-size: 1.1em;
    color: #475569; /* Dark slate for readability on light background */
    line-height: 1.8;
}

/* AI Robotic Hero Visual */
.va-ng-hero-visual {
    flex: 1;
    display: flex;
    justify-content: center;
    position: relative;
}
.ai-robotic-img {
    max-width: 100%;
    height: 550px;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0, 77, 230, 0.15);
    animation: float-bot 6s ease-in-out infinite;
    position: relative;
    z-index: 10;
}
@keyframes float-bot {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
}
.neural-node {
    position: relative;
    width: 450px; /* Increased width */
    height: 450px; /* Increased height */
    display: flex;
    align-items: center;
    justify-content: center;
}
.core-eye {
    font-size: 5em; /* Bigger eye */
    color: var(--ng-blue-primary);
    z-index: 10;
    text-shadow: 0 0 30px var(--ng-blue-primary);
    animation: eye-float 4s ease-in-out infinite;
}
@keyframes eye-float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}
.ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid var(--ng-blue-primary);
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
}
.ring-1 {
    width: 250px; height: 250px; /* Increased */
    border-width: 2px;
    border-style: dashed;
    animation: spin 15s linear infinite;
    opacity: 0.6;
}
.ring-2 {
    width: 380px; height: 380px; /* Increased */
    border: 1px solid rgba(0, 77, 230, 0.3);
    animation: spin-reverse 20s linear infinite;
}
@keyframes spin { 100% { transform: translate(-50%, -50%) rotate(360deg); } }
@keyframes spin-reverse { 100% { transform: translate(-50%, -50%) rotate(-360deg); } }

/* Data particles */
.data-particles span {
    position: absolute;
    width: 4px; height: 4px;
    background: var(--ng-blue-light);
    border-radius: 50%;
    top: 50%; left: 50%;
    opacity: 0;
}
.data-particles span:nth-child(1) { animation: shoot 3s infinite 0.1s; }
.data-particles span:nth-child(2) { animation: shoot 3s infinite 0.8s; }
.data-particles span:nth-child(3) { animation: shoot 3s infinite 1.5s; }
.data-particles span:nth-child(4) { animation: shoot 3s infinite 2.2s; }
@keyframes shoot {
    0% { transform: translate(-50%, -50%) scale(1); opacity: 1; }
    100% { transform: translate(calc(-50% + 150px), calc(-50% - 100px)) scale(0); opacity: 0; }
}

/* --- Features Matrix --- */
.va-ng-matrix-title {
    text-align: center;
    margin-bottom: 60px;
}
.va-ng-matrix-title h3 {
    font-size: 2.2em;
    font-weight: 800;
    color: var(--ng-navy); /* Dark color for light background */
}
.blue-line {
    width: 60px;
    height: 3px;
    background: var(--ng-blue-primary);
    margin: 15px auto 0;
    box-shadow: 0 0 10px var(--ng-blue-primary);
}

.va-ng-matrix {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-auto-rows: minmax(200px, auto);
    gap: 30px;
    margin-bottom: 100px;
}

.ng-card {
    grid-column: span 2;
    background: var(--ng-navy-light);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 16px;
    padding: 20px; /* Uniform tight padding */
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.ng-card-img {
    height: 250px; /* Increased from 180px */
    width: 100%;
    margin-bottom: 20px; /* Reduced margin */
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    flex-shrink: 0;
}
.ng-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}
.ng-card:hover .ng-card-img img {
    transform: scale(1.08); /* slight zoom on hover */
}
.ng-icon-overlay {
    position: absolute;
    bottom: 15px;
    left: 15px;
    width: 45px;
    height: 45px;
    background: rgba(10, 17, 40, 0.85); /* Navy transparent */
    backdrop-filter: blur(8px);
    border: 1px solid rgba(0, 77, 230, 0.4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ng-blue-primary);
    font-size: 1.2em;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

.ng-card.span-4 {
    grid-column: span 4;
}
.ng-card.span-3 {
    grid-column: span 3;
}
.ng-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
}

/* Hover laser border effect */
.blue-laser-border {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--ng-blue-primary), transparent);
    transform: scaleX(0);
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}
.ng-card:hover .blue-laser-border {
    transform: scaleX(1);
}

/* Removed old standalone .ng-icon */
.ng-card h4 {
    font-size: 1.3em;
    font-weight: 700;
    margin-bottom: 12px;
    color: #ffffff;
}
.ng-card p {
    font-size: 0.95em;
    color: #ffffff; /* User requested white text here */
    line-height: 1.6;
    margin: 0;
}

/* --- Use Cases --- */
.va-ng-usecases {
    background: #ffffff;
    border: 1px solid rgba(0, 77, 230, 0.2);
    box-shadow: 0 15px 40px rgba(0, 77, 230, 0.08); /* Soft blue shadow for depth */
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 80px;
}
.ng-uc-header {
    text-align: center;
    margin-bottom: 40px;
}
.ng-uc-header h3 {
    font-size: 1.8em;
    font-weight: 700;
    color: var(--ng-blue-primary); /* Darker blue for visibility on light bg */
}

.ng-uc-flex {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}
.uc-item {
    flex: 1;
    min-width: 150px;
    text-align: center;
    padding: 20px;
    background: var(--ng-navy);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    transition: all 0.3s;
}
.uc-item:hover {
    border-color: var(--ng-blue-primary);
    background: var(--ng-blue-primary); /* Turns bright blue on hover to keep white text visible */
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 77, 230, 0.2); /* Added soft glow */
}
.uc-item:hover i {
    color: #ffffff; /* Turn icon white on hover to match */
}
.uc-item i {
    display: block;
    font-size: 1.8em;
    color: var(--ng-blue-primary);
    margin-bottom: 15px;
}
.uc-item strong {
    font-size: 0.95em;
    color: #ffffff;
    font-weight: 600;
}

/* --- Benefits Line --- */
.va-ng-benefits {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}
.ng-ben-item {
    flex: 1;
    padding: 0 20px;
}
.ben-num {
    font-size: 3em;
    font-weight: 800;
    color: var(--ng-blue-primary);
    opacity: 0.3; /* Increased opacity from 0.2 for better pop on white bg */
    line-height: 1;
    margin-bottom: 15px;
}
.ng-ben-item h5 {
    font-size: 1.1em;
    font-weight: 700;
    margin-bottom: 10px;
    color: var(--ng-navy); /* Dark text for light background */
}
.ng-ben-item p {
    font-size: 0.9em;
    color: #475569; /* Dark slate gray for light background */
    line-height: 1.6;
}
.ng-ben-line {
    width: 1px;
    height: 100px;
    background: rgba(0, 77, 230, 0.2);
    margin-top: 20px;
}

/* Responsive */
@media (max-width: 1024px) {
    .va-ng-hero { flex-direction: column; text-align: center; }
    .va-ng-hero-text { max-width: 100%; margin-bottom: 40px; }
    .va-ng-matrix { grid-template-columns: repeat(2, 1fr); }
    .ng-card, .ng-card.span-4, .ng-card.span-3 { grid-column: auto; }
}

@media (max-width: 768px) {
    .va-ng-matrix { grid-template-columns: 1fr; }
    .va-ng-benefits { flex-direction: column; gap: 30px; }
    .ng-ben-line { width: 100%; height: 1px; margin: 0; }
    .ng-ben-item { padding: 0; text-align: center; }
    .ben-num { margin-bottom: 5px; }
    .neural-node { width: 220px; height: 220px; }
    .ring-1 { width: 160px; height: 160px; }
    .ring-2 { width: 220px; height: 220px; }
}

/* Animations */
.ao-fade-up {
    opacity: 0; transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}
.ao-slide-right {
    opacity: 0; transform: translateX(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}
.ao-visible {
    opacity: 1 !important; transform: none !important;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ob = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if(e.isIntersecting) e.target.classList.add('ao-visible');
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.ao-fade-up, .ao-slide-right').forEach(el => ob.observe(el));
});
</script>
@endpush