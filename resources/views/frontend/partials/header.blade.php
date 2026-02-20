<!-- Header (status check) -->
<header id="header" class="alt modern-header">
    <a href="{{ url('/') }}" class="logo"><strong>Nexer</strong> <span>Tech Solutions</span></a>

    <!-- Desktop Navigation -->
    <nav class="desktop-nav">
        <ul>
            <li> <a href="{{ route('home') }}">Home </a> </li>
            <li> <a href="{{ route('blog') }}">Blog</a> </li>
            <li> <a href="{{ route('about') }}">About Us</a> </li>
            <li> <a href="{{ route('authors') }}">Authors</a> </li>
            <li> <a href="{{ route('contact') }}">Contact Us</a> </li>
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