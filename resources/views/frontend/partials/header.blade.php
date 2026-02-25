<!-- Header (status check) -->
<header id="header" class="alt modern-header">
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Nexer Technology Icon" style="height: 38px; width: auto; vertical-align: middle; margin-right: 10px;">
        <strong style="color: #004de6; font-weight: 800; font-size: 1em; vertical-align: middle;">Nexer</strong>
        <span style="color: #000000; font-weight: 700; font-size: 0.85em; vertical-align: middle; opacity: 0.9;">Tech Solutions</span>
    </a>

    <!-- Desktop Navigation -->
    <nav class="desktop-nav">
        <ul>
            <li> <a href="{{ url('/') }}">Home</a> </li>
            <li> <a href="{{ url('/#about') }}">About</a> </li>
            <!-- <li> <a href="{{ url('/#process') }}">Process</a> </li> -->
            <li> <a href="{{ url('/#blog') }}">Blog</a> </li>
            <li> <a href="{{ url('/#team') }}">Team</a> </li>
            <li> <a href="{{ url('/#contact') }}">Contact Us</a> </li>
        </ul>
    </nav>
    <!-- Mobile Menu Button -->
    <div class="mobile-menu-btn" id="mobileMenuBtn">
        <i class="fa fa-bars"></i>
    </div>

</header>

<script>
    // Add scrolled class to header on scroll
    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Mobile Menu Toggle
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const nav = document.querySelector('.desktop-nav');
        nav.classList.toggle('active');
        const icon = this.querySelector('i');
        if (nav.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
</script>