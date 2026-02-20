<!-- Header (status check) -->
<header id="header" class="alt modern-header">
    <a href="{{ url('/') }}" class="logo"><strong>Nexer</strong> <span>Tech Solutions</span></a>
    
    <!-- Desktop Navigation -->
    <nav class="desktop-nav">
        <ul>
            <li class="{{ Request::is('/') ? 'active' : '' }}"> <a href="{{ url('/') }}">Home </a> </li>
            <li> <a href="#">Blog</a> </li>
            <li class="{{ Request::is('about-us') ? 'active' : '' }}"> <a href="{{ route('about') }}">About Us</a> </li>
            <li class="{{ Request::is('authors') ? 'active' : '' }}"> <a href="{{ route('authors') }}">Authors</a> </li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
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
