<!-- Header (status check) -->
<header id="header" class="alt modern-header">
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Nexer Technology Icon">
        <div class="logo-text">
            <strong>Nexer</strong>
            <span>Tech Solutions</span>
        </div>
    </a>

    <!-- Desktop Navigation -->
    <nav class="desktop-nav">
        <ul>
            <li> <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a> </li>
            <li> <a href="{{ url('/#about') }}"><i class="fa fa-info-circle"></i> About</a> </li>
            <!-- <li> <a href="{{ url('/#process') }}"><i class="fa fa-cogs"></i> Process</a> </li> -->
            <li> <a href="{{ url('/#blog') }}"><i class="fa fa-newspaper-o"></i> Blog</a> </li>
            <li> <a href="{{ url('/#team') }}"><i class="fa fa-users"></i> Team</a> </li>
            <li> <a href="{{ url('/#contact') }}"><i class="fa fa-envelope"></i> Contact Us</a> </li>
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
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const nav = document.querySelector('.desktop-nav');
    const menuIcon = mobileMenuBtn.querySelector('i');

    function toggleMenu() {
        nav.classList.toggle('active');
        if (nav.classList.contains('active')) {
            menuIcon.classList.remove('fa-bars');
            menuIcon.classList.add('fa-times');
        } else {
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');
        }
    }

    mobileMenuBtn.addEventListener('click', toggleMenu);

    // Auto-close menu when a link is clicked
    document.querySelectorAll('.desktop-nav a').forEach(link => {
        link.addEventListener('click', () => {
            if (nav && nav.classList.contains('active')) {
                toggleMenu();
            }
        });
    });
</script>