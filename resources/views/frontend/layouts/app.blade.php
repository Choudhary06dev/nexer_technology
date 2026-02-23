<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title', 'Nexer Technology')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" />
    </noscript>
    @stack('styles')
    <style>
        /* Fix for fixed header covering anchor sections */
        html {
            scroll-padding-top: 28px;
            /* Offset for fixed header height */
        }

        section[id],
        div[id] {
            scroll-margin-top: 28px !important;
            /* Adjusted for better alignment */
        }

        .logo img {
            transition: filter 0.3s ease;
            max-height: 120px;
            /* Limit height but keep it large */
            display: block;
        }

        #header,
        .modern-header {
            height: auto !important;
            min-height: 3em;
            padding: 5px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed !important;
        }

        /* Logo: always show as original (no filter - PNG has white background) */
        #header .logo img,
        .modern-header .logo img {
            filter: none !important;
        }

        /* Nav Links: dark blue per user request */
        #header nav ul li a,
        .modern-header nav ul li a {
            color: #004de6 !important;
        }

        #header nav ul li a:hover,
        .modern-header nav ul li a:hover {
            color: #004de6 !important;
            opacity: 0.8;
        }

        /* Footer Compression */
        #footer {
            padding: 1.5em 0 0.5em 0 !important;
            /* Reduced top/bottom padding */
        }

        #footer .inner {
            padding: 0 2em !important;
            /* Narrower inner padding */
        }

        .footer-logo-row {
            margin-bottom: 15px !important;
            margin-top: -5px !important;
        }

        .footer-logo-row img {
            height: 45px !important;
            /* Smaller logo in footer */
        }

        .footer-grid {
            margin-bottom: 1em !important;
        }

        .footer-col h3 {
            font-size: 0.9em !important;
            /* Smaller headings */
            margin-bottom: 0.8em !important;
        }

        .footer-col p,
        .footer-col ul li {
            font-size: 0.8em !important;
            /* Smaller text */
            line-height: 1.4 !important;
        }

        .footer-col ul li {
            margin-bottom: 0.3em !important;
        }

        #footer .copyright-bar {
            padding-top: 0.5em !important;
            font-size: 0.75em !important;
        }
    </style>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        @include('frontend.partials.header')

        @yield('content')

        @include('frontend.partials.footer')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>