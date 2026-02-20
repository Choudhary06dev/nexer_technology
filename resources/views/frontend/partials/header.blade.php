<!-- Header -->
<header id="header" class="alt">
    <a href="{{ url('/') }}" class="logo"><strong>Nexer</strong> <span>Tech Solutions</span></a>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>

<!-- Menu -->
<nav id="menu">
    <ul class="links">
        <li class="{{ Request::is('/') ? 'active' : '' }}"> <a href="{{ url('/') }}">Home </a> </li>
        <li> <a href="#">Blog</a> </li>
        <li class="{{ Request::is('about-us') ? 'active' : '' }}"> <a href="{{ route('about') }}">About Us</a> </li>
        <li class="{{ Request::is('authors') ? 'active' : '' }}"> <a href="{{ route('authors') }}">Authors</a> </li>
        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
</nav>
