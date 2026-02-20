<!-- Header (status check) -->
<header id="header" class="alt modern-header">
    <a href="{{ url('/') }}" class="logo"><strong>Nexer</strong> <span>Tech Solutions</span></a>

    <!-- Desktop Navigation -->
    <nav class="desktop-nav">
        <ul>
            <li> <a href="{{ url('/#banner') }}">Home </a> </li>
            <li> <a href="{{ url('/#blog') }}">Blog</a> </li>
            <li> <a href="{{ url('/#about') }}">About Us</a> </li>
            <li> <a href="{{ url('/#team') }}">Authors</a> </li>
            <li> <a href="{{ url('/#contact') }}">Contact Us</a> </li>
        </ul>
    </nav>

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
</script>