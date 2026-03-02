@if(!isset($is_index))

@endif

@if(!isset($is_index))
@section('title', 'Our Process - Nexer Technology')
@section('content')
@endif

<!-- Our Process Section -->
<section id="process" class="process-section-premium">
    <div class="process-container">
        <header class="section-header-modern text-center ao-fade-up">
            <div class="header-line-center"></div>
            <span class="sub-label">How We Work</span>
            <h2>Our <span>Engineering</span> Process</h2>
            <p>From the first spark of an idea to the final product deployment, we follow a disciplined, agile methodology.</p>
        </header>

        <div class="process-steps-grid">
            <!-- Step 1 -->
            <div class="process-step ao-fade-up" style="transition-delay: 0.1s">
                <div class="step-icon-wrap">
                    <div class="step-number">01</div>
                    <i class="fa fa-lightbulb-o"></i>
                    <div class="pulse-ring"></div>
                </div>
                <h3>Discovery & Idea</h3>
                <p>We dive deep into your requirements and business goals to outline the perfect technical roadmap.</p>
                <div class="step-connector"></div>
            </div>

            <!-- Step 2 -->
            <div class="process-step ao-fade-up" style="transition-delay: 0.2s">
                <div class="step-icon-wrap">
                    <div class="step-number">02</div>
                    <i class="fa fa-pencil-square-o"></i>
                    <div class="pulse-ring"></div>
                </div>
                <h3>Strategic Design</h3>
                <p>Crafting intuitive UI/UX and solid architecture designs that prioritize scalability and user experience.</p>
                <div class="step-connector"></div>
            </div>

            <!-- Step 3 -->
            <div class="process-step ao-fade-up" style="transition-delay: 0.3s">
                <div class="step-icon-wrap">
                    <div class="step-number">03</div>
                    <i class="fa fa-code"></i>
                    <div class="pulse-ring"></div>
                </div>
                <h3>Agile Development</h3>
                <p>Our engineers build with precision, using the latest tech stacks and agile sprints for rapid delivery.</p>
                <div class="step-connector"></div>
            </div>

            <!-- Step 4 -->
            <div class="process-step ao-fade-up" style="transition-delay: 0.4s">
                <div class="step-icon-wrap">
                    <div class="step-number">04</div>
                    <i class="fa fa-rocket"></i>
                    <div class="pulse-ring"></div>
                </div>
                <h3>Result & Scale</h3>
                <p>Rigorous testing followed by seamless deployment and ongoing support to ensure maximum impact.</p>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Process Section Premium Styles */
    .process-section-premium {
        padding: 100px 0;
        background: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .process-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2em;
    }

    .section-header-modern {
        margin-bottom: 80px;
    }

    .header-line-center {
        width: 80px;
        height: 3px;
        background: #004de6;
        margin: 0 auto 20px;
    }

    .process-steps-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        position: relative;
    }

    .process-step {
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .step-icon-wrap {
        width: 120px;
        height: 120px;
        background: #f8fafc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        font-size: 2.5em;
        color: #004de6;
        position: relative;
        border: 1px solid #e2e8f0;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .process-step:hover .step-icon-wrap {
        background: #004de6;
        color: #ffffff;
        transform: scale(1.1);
        border-color: #004de6;
        box-shadow: 0 15px 35px rgba(0, 77, 230, 0.2);
    }

    .step-number {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 40px;
        height: 40px;
        background: #004de6;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.4em;
        font-weight: 800;
        border: 4px solid white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .pulse-ring {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px solid #004de6;
        opacity: 0;
        transition: all 0.4s;
    }

    .process-step:hover .pulse-ring {
        animation: stepPulse 1.5s infinite;
    }

    @keyframes stepPulse {
        0% {
            transform: scale(1);
            opacity: 0.5;
        }

        100% {
            transform: scale(1.4);
            opacity: 0;
        }
    }

    .process-step h3 {
        font-size: 1.4em !important;
        font-weight: 800 !important;
        color: #0f172a !important;
        margin-bottom: 15px !important;
        transition: color 0.3s;
    }

    .process-step p {
        font-size: 0.95em !important;
        line-height: 1.6 !important;
        color: #64748b !important;
        padding: 0 10px;
    }

    /* Connector Line */
    .step-connector {
        position: absolute;
        top: 60px;
        left: calc(50% + 60px);
        width: calc(100% - 120px + 30px);
        height: 2px;
        background: #e2e8f0;
        z-index: -1;
    }

    .step-connector::after {
        content: '';
        position: absolute;
        top: -4px;
        right: -5px;
        width: 10px;
        height: 10px;
        border-top: 2px solid #e2e8f0;
        border-right: 2px solid #e2e8f0;
        transform: rotate(45deg);
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .process-steps-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 60px 40px;
        }

        .step-connector {
            display: none;
        }
    }

    @media (max-width: 600px) {
        .process-steps-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@if(!isset($is_index))
@endsection
@endif