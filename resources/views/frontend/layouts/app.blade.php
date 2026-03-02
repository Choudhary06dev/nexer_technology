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
            overflow-x: hidden !important;
            overflow-y: auto !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        body {
            scroll-padding-top: 80px;
            /* Offset for fixed header height */
            margin: 0 !important;
            padding: 0 !important;
            width: 100%;
            /* overflow-x: hidden !important; */
            background-color: #1a1a1a !important;
            position: relative;
        }

        #wrapper {
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            /* Default background */
            margin-bottom: 0 !important;
            padding-bottom: 0 !important;
            width: 100%;
            max-width: 100%;
        }

        #wrapper>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
        }

        /* Yielded content should grow but not force footer away */
        #main,
        .main-content,
        section[id],
        section {
            flex-grow: 1;
            padding-bottom: 0 !important;
            margin-bottom: 0 !important;
        }

        #main>section:last-child {
            padding-bottom: 0 !important;
            margin-bottom: 0 !important;
        }

        section[id],
        div[id] {
            scroll-margin-top: 80px !important;
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

        /* Logo Flex Styles */
        #header .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-left: 20px;
            white-space: nowrap;
        }

        #header .logo img {
            height: 38px;
            width: auto;
            margin-right: 10px;
        }

        #header .logo .logo-text {
            display: flex;
            align-items: baseline;
            gap: 4px;
        }

        #header .logo strong {
            color: #004de6;
            font-weight: 800;
            font-size: 1.15em;
        }

        #header .logo span {
            color: #000000;
            font-weight: 700;
            font-size: 0.85em;
            opacity: 0.9;
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

        /* Mobile Menu Styles */
        .mobile-menu-btn {
            display: none;
            cursor: pointer;
            font-size: 1.5em;
            color: #004de6;
            margin-right: 20px;
        }

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            z-index: 1000;
        }

        #header .logo {
            margin-left: 20px;
        }

        @media (max-width: 980px) {
            .mobile-menu-btn {
                display: block !important;
                position: relative;
                z-index: 10001;
            }

            #header nav.desktop-nav {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: white;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                display: none !important;
                /* hidden by default on mobile */
                flex-direction: column;
                padding: 10px 0;
            }

            #header nav.desktop-nav.active {
                display: flex !important;
            }

            #header nav ul {
                flex-direction: column;
                gap: 0;
                padding: 0;
                margin: 0;
                list-style: none;
            }

            #header nav ul li {
                width: 100%;
                text-align: center;
                margin: 0;
                padding: 0;
            }

            #header nav ul li a,
            .modern-header nav ul li a {
                display: block;
                padding: 15px;
                border-bottom: 1px solid #f1f5f9;
            }

            #header nav ul li:last-child a {
                border-bottom: none;
            }
        }

        @media (max-width: 480px) {
            #header .logo {
                margin-left: 10px;
            }

            #header .logo img {
                height: 28px;
                margin-right: 8px;
            }

            #header .logo .logo-text {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                gap: 0;
            }

            #header .logo strong {
                font-size: 0.85em;
                line-height: 1.1;
                display: block;
                white-space: nowrap;
            }

            #header .logo span {
                font-size: 0.55em;
                line-height: 1.1;
                display: block;
                white-space: nowrap;
            }

            .mobile-menu-btn {
                margin-right: 10px;
                font-size: 1.25em;
            }

            @media (max-width: 380px) {
                #header .logo img {
                    height: 26px;
                }

                #header .logo strong {
                    font-size: 0.85em;
                }

                #header .logo span {
                    font-size: 0.55em;
                }
            }

            @media (max-width: 320px) {
                #header .logo img {
                    height: 22px;
                    margin-right: 4px;
                }

                #header .logo strong {
                    font-size: 0.75em;
                }

                #header .logo span {
                    font-size: 0.5em;
                }
            }

            #wrapper {
                padding-top: 0 !important;
            }

            body {
                scroll-padding-top: 60px; /* Reduced offset for mobile */
            }

            section[id],
            div[id],
            .about-intro-modern {
                scroll-margin-top: 60px !important;
            }
        }

        /* Footer Compression */
        #footer {
            padding: 2.5em 0 0 !important;
            /* Increased top padding to move logo down */
            margin-bottom: 0 !important;
            flex-shrink: 0;
            margin-top: 3em !important;
            /* Added space above footer */
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
            padding-top: 1.5em !important;
            padding-bottom: 1em !important;
            margin-bottom: 0 !important;
            font-size: 0.75em !important;
            border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
        }

        /* Ensure nothing overflows its container */
        img,
        iframe,
        video,
        .box {
            max-width: 100% !important;
            height: auto;
        }

        /* Prevent phantom space from any source */
        #wrapper::after,
        body::after,
        #footer::after {
            display: none !important;
            content: none !important;
            height: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        #footer {
            background-color: #1a1a1a !important;
        }

        @media (max-width: 736px) {
            .footer-grid {
                display: grid !important;
                grid-template-columns: 1fr 1fr !important;
                gap: 2em 1em !important;
            }

            .footer-col {
                flex: none !important;
                margin: 0 !important;
                min-width: 0 !important;
                width: 100% !important;
            }

            .footer-col:first-child,
            .footer-col:last-child {
                grid-column: span 2;
                max-width: 100% !important;
            }
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