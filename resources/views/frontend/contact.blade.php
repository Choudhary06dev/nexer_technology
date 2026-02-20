@extends('frontend.layouts.app')

@section('title', 'Contact Us - Nexer Tech Solutions')

@section('content')
<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Contact Us</h1>
            </header>
            <span class="image main"><img src="{{ asset('images/map.png') }}" alt="" /></span>
            <p>Have a project in mind or need help with a software solution? We're here to help! Get in touch with Nexer Tech Solution — our team is ready to answer your questions, discuss your ideas, and provide the support you need.</p>
        </div>
    </section>

</div>

<!-- Contact -->
<section id="contact">
    <div class="inner">
        <section>
            <header class="major">
                <h2>Contact us</h2>
            </header>

            <form method="post" action="#">
                @csrf
                <div class="fields">
                    <div class="field half">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field half">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" />
                    </div>
                    <div class="field">
                        <label for="message">Notes</label>
                        <textarea name="message" id="message" rows="6"></textarea>
                    </div>

                    <div class="field half text-right">
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
        <section class="split">
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-envelope"></span>
                    <h3>Email</h3>
                    <a href="mailto:manager@nexersol.com">manager@nexersol.com</a>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-phone"></span>
                    <h3>Phone</h3>
                    <span>+923084992485</span>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-home"></span>
                    <h3>Address</h3>
                    <span>915 High Q Tower<br> 1 Jail Rd, Gulberg V, Lahore</span>
                </div>
            </section>
        </section>
    </div>
</section>
@endsection
