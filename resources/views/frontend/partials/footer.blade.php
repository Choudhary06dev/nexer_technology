<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <div class="footer-logo-row" style="margin-bottom: 25px !important; display: block !important;">
            <img src="{{ asset('images/logo.png') }}" alt="Nexer Technology" style="height: 60px !important; display: block !important;">
        </div>
        <div class="footer-grid">
            <!-- About Section -->
            <div class="footer-col">
                <h3>About Nexer</h3>
                <p>Nexer Technology is expert in providing scaleable and flexible customized ERP solutions and Data security solutions based on PKI and Cryptography that help businesses unlock their true potential with security and reliability.</p>
            </div>

            <!-- Company Section -->
            <div class="footer-col">
                <h3>Company</h3>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('authors') }}">Team</a></li>
                    <li><a href="{{ route('home') }}#testimonials">Customers</a></li>
                    <li><a href="{{ route('contact') }}">Jobs</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
            </div>

            <!-- Services Section -->
            <div class="footer-col">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Campaign</a></li>
                </ul>
            </div>

            <!-- Help & Support Section -->
            <div class="footer-col">
                <h3>Help & Support</h3>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="#">Live Chat</a></li>
                    <li><a href="#">Terms of Services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="copyright-bar">
            &copy; Copyright 2026 - Nexer Technology
            <a href="#" class="back-to-top" id="backToTop">
                <i class="fa fa-arrow-up"></i>
            </a>
        </div>
    </div>
</footer>

<script>
    // Back to Top functionality
    document.getElementById('backToTop').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>