<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Involved | Make A Way Foundation</title>

    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700&family=Public+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* ===== General ===== */
        body {
            margin: 0;
            font-family: "Public Sans", Arial, sans-serif;
            color: #23241f;
            background-color: #faf6ee;
            line-height: 1.6;
        }

        h1, h2, h3 {
            font-family: "Fraunces", Georgia, serif;
            line-height: 1.2;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 70px 0;
        }

        .section-title {
            text-align: center;
            color: #1f5c5c;
            font-size: 40px;
            margin-top: 0;
        }

        .section-intro {
            text-align: center;
            color: #4d4f47;
            max-width: 650px;
            margin: 0 auto 50px auto;
            font-size: 18px;
        }

        /* ===== Buttons ===== */
        .btn {
            display: inline-block;
            background-color: #d9613f;
            color: white;
            padding: 14px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            margin: 5px;
        }

        .btn:hover {
            background-color: #e2a33d;
            color: #23241f;
        }

        /* ===== Top bar ===== */
        .topbar {
            background-color: #123b3b;
            text-align: left;
            padding: 8px 20px;
        }

        .topbar a {
            color: white;
            font-size: 20px;
            margin-left: 15px;
        }

        /* ===== Header ===== */
        .main-header {
            background-color: #123b3b;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .main-header .logo {
            height: 80px;
            display: block;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .donate-btn {
            background-color: #d9613f;
            color: white;
            padding: 10px 22px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
        }

        .donate-btn:hover {
            background-color: #c4502f;
        }

        .menu {
            position: relative;
        }

        .hamburger {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            font-size: 22px;
            width: 50px;
            height: 46px;
            border-radius: 8px;
            cursor: pointer;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            width: 230px;
            background-color: #1f5c5c;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            padding: 10px 0;
        }

        .dropdown a {
            display: block;
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 12px 20px;
            border-bottom: none;
        }

        .dropdown a:hover {
            background-color: #123b3b;
            color: #e2a33d;
        }

        .dropdown.open {
            display: block;
        }

        @media (hover: hover) {
            .menu:hover .dropdown {
                display: block;
            }
        }

        @media (max-width: 800px) {
            .main-header .logo {
                height: 55px;
            }

            .donate-btn {
                padding: 8px 16px;
            }
        }

        /* ===== Page banner ===== */
        .banner {
            background: linear-gradient(rgba(18, 59, 59, 0.55), rgba(18, 59, 59, 0.55)),
                        url("{{ asset('images/scroll/MWF-18.jpg') }}");
            background-color: #1f5c5c;
            background-size: cover;
            background-position: center 25%;
            background-attachment: fixed;
            color: white;
            text-align: center;
            padding: 150px 20px;
        }

        .banner h1 {
            font-size: 52px;
            margin: 0 0 15px 0;
        }

        .banner p {
            font-size: 20px;
            max-width: 650px;
            margin: 0 auto 25px auto;
        }

        /* ===== Ways to help ===== */
        .ways-help {
            background-color: white;
        }

        .help-cards {
            display: flex;
            gap: 25px;
        }

        .help-card {
            flex: 1;
            background-color: #faf6ee;
            border-radius: 20px;
            padding: 30px 25px;
            text-align: center;
        }

        .help-card i {
            font-size: 40px;
            color: #d9613f;
        }

        .help-card h3 {
            color: #1f5c5c;
            font-size: 26px;
            margin: 15px 0 10px 0;
        }

        .help-card p {
            color: #4d4f47;
        }

        /* ===== Events ===== */
        .event-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 850px;
            margin: 0 auto;
        }

        .event-item {
            display: flex;
            gap: 25px;
            background-color: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .date-box {
            min-width: 90px;
            height: 90px;
            background-color: #1f5c5c;
            color: white;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .date-box .month {
            font-size: 15px;
            font-weight: bold;
            color: #e2a33d;
            text-transform: uppercase;
        }

        .date-box .day {
            font-family: "Fraunces", Georgia, serif;
            font-size: 34px;
            line-height: 1;
        }

        .event-item h3 {
            color: #1f5c5c;
            font-size: 24px;
            margin: 0 0 8px 0;
        }

        .event-info {
            color: #d9613f;
            font-weight: bold;
            margin: 0 0 8px 0;
        }

        .event-info i {
            margin-right: 5px;
        }

        .event-item p {
            color: #4d4f47;
            margin: 0;
        }

        .no-events {
            text-align: center;
            background-color: white;
            border-radius: 15px;
            padding: 40px 25px;
            max-width: 650px;
            margin: 0 auto;
            color: #4d4f47;
        }

        /* ===== Volunteer form ===== */
        .volunteer {
            background-color: #e2a33d;
        }

        .volunteer .section-title {
            color: #123b3b;
        }

        .volunteer .section-intro {
            color: #23241f;
        }

        .form-box {
            background-color: white;
            border-radius: 20px;
            padding: 35px;
            max-width: 650px;
            margin: 0 auto;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
        }

        .form-box label {
            display: block;
            font-weight: bold;
            color: #123b3b;
            margin-bottom: 6px;
        }

        .form-box input,
        .form-box select,
        .form-box textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            border: 2px solid #e3ddcd;
            border-radius: 10px;
            font-family: "Public Sans", Arial, sans-serif;
            font-size: 16px;
            margin-bottom: 18px;
        }

        .form-box input:focus,
        .form-box select:focus,
        .form-box textarea:focus {
            border-color: #1f5c5c;
            outline: none;
        }

        .form-box button {
            background-color: #123b3b;
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-box button:hover {
            background-color: #d9613f;
        }

        .error {
            color: #c4502f;
            font-size: 14px;
            margin: -12px 0 15px 0;
        }

        .success {
            background-color: #e6f2ef;
            color: #1f5c5c;
            border-radius: 10px;
            padding: 15px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hidden-field {
            display: none;
        }

        /* ===== Footer ===== */
        footer {
            background-color: #123b3b;
            color: white;
            padding: 50px 20px 20px 20px;
        }

        .footer-columns {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        footer h3 {
            color: #e2a33d;
            margin-top: 0;
        }

        footer p {
            margin: 0 0 10px 0;
        }

        footer a {
            color: white;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid #2f5555;
            margin-top: 30px;
            padding-top: 15px;
            font-size: 14px;
        }

        /* ===== Footer menu ===== */
        .footer-menu {
            position: relative;
            width: fit-content;
            margin: 0 auto;
        }

        .footer-hamburger {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            font-size: 22px;
            width: 50px;
            height: 46px;
            border-radius: 8px;
            cursor: pointer;
        }

        .footer-links {
            display: none;
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 220px;
            background-color: #1f5c5c;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            padding: 10px 0;
            z-index: 50;
        }

        .footer-links a {
            display: block;
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
        }

        .footer-links a:hover {
            background-color: #123b3b;
            color: #e2a33d;
        }

        .footer-links.open {
            display: block;
        }

        @media (hover: hover) {
            .footer-menu:hover .footer-links {
                display: block;
            }
        }

        @media (max-width: 800px) {
            .footer-columns {
                grid-template-columns: 1fr;
            }

            .footer-menu {
                width: 220px;
            }

            .footer-links {
                position: static;
                transform: none;
                width: 100%;
                margin-top: 10px;
            }
        }

        /* ===== Phones ===== */
        @media (max-width: 800px) {
            .banner {
                padding: 80px 20px;
                background-attachment: scroll;
            }

            .banner h1 {
                font-size: 36px;
            }

            .banner p {
                font-size: 18px;
            }

            .section-title {
                font-size: 32px;
            }

            .help-cards,
            .footer-columns {
                flex-direction: column;
            }

            .event-item {
                flex-direction: column;
                gap: 15px;
            }

            .form-box {
                padding: 25px 20px;
            }

            .btn {
                display: block;
                max-width: 260px;
                margin: 10px auto;
                text-align: center;
            }

            footer {
                text-align: center;
            }

            .footer-links {
                position: static;
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- Top bar -->
    <div class="topbar">
        <a href="https://www.facebook.com/FoundationMakeAWay" target="_blank" aria-label="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/makeaway.foundation/" target="_blank" aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
        </a>
    </div>

    <!-- Header -->
    <div class="main-header">
        <a href="/">
            <img src="{{ asset('images/scroll/MWF-27.jpg') }}" alt="Make A Way Foundation logo" class="logo">
        </a>

        <div class="header-right">
            <a href="/donate" class="donate-btn">Donate</a>

            <div class="menu">
                <button class="hamburger" aria-label="Menu" onclick="document.getElementById('dropdown').classList.toggle('open')">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <nav class="dropdown" id="dropdown">
                    <a href="/">Home</a>
                    <a href="/mission">Mission</a>
                    <a href="/history">History</a>
                    <a href="/what-we-offer">What We Offer</a>
                    <a href="/get-involved">Get Involved</a>
                    <a href="/board">Our Board</a>
                    <a href="/partners">Partners &amp; Supporters</a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Banner -->
    <div class="banner">
        <h1>Get Involved</h1>
        <p>Volunteer at an event, give, or partner with us to make a way for families in Athens and Limestone County.</p>
        <a href="#volunteer" class="btn">Volunteer With Us</a>
    </div>

    <!-- Ways to help -->
    <div class="section ways-help">
        <div class="container">
            <h2 class="section-title">Ways to Help</h2>
            <p class="section-intro">There's a place for everyone at Make A Way.</p>

            <div class="help-cards">
                <div class="help-card">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                    <h3>Volunteer</h3>
                    <p>Help set up, run activities, or greet families at one of our events.</p>
                    <a href="#volunteer" class="btn">Sign Up</a>
                </div>

                <div class="help-card">
                    <i class="fa-solid fa-heart"></i>
                    <h3>Donate</h3>
                    <p>Every gift stays in our community and supports programs for all ages.</p>
                    <a href="/donate" class="btn">Give Today</a>
                </div>

                <div class="help-card">
                    <i class="fa-solid fa-handshake"></i>
                    <h3>Partner</h3>
                    <p>Churches, clubs, and businesses can sponsor an event or program.</p>
                    <a href="mailto:info@foundationmakeaway.org?subject=Partnership" class="btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming events -->
    <div class="section">
        <div class="container">
            <h2 class="section-title">Upcoming Events</h2>
            <p class="section-intro">Come join us! Everyone is welcome.</p>

            @if ($events->count() > 0)
                <div class="event-list">
                    @foreach ($events as $event)
                        <div class="event-item">
                            <div class="date-box">
                                <span class="month">{{ $event->event_date->format('M') }}</span>
                                <span class="day">{{ $event->event_date->format('j') }}</span>
                            </div>
                            <div>
                                <h3>{{ $event->title }}</h3>
                                <p class="event-info">
                                    <i class="fa-regular fa-calendar"></i>{{ $event->event_date->format('l, F j, Y') }}
                                    @if ($event->event_time)
                                        &nbsp;·&nbsp; <i class="fa-regular fa-clock"></i>{{ $event->event_time }}
                                    @endif
                                </p>
                                @if ($event->location)
                                    <p class="event-info"><i class="fa-solid fa-location-dot"></i>{{ $event->location }}</p>
                                @endif
                                @if ($event->description)
                                    <p>{{ $event->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="no-events">
                    <p>New events are coming soon! Follow us on <a href="https://www.facebook.com/FoundationMakeAWay" target="_blank">Facebook</a> for the latest updates.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Volunteer form -->
    <div class="section volunteer" id="volunteer">
        <div class="container">
            <h2 class="section-title">Volunteer Sign-Up</h2>
            <p class="section-intro">Fill out the form and we'll reach out with details.</p>

            <div class="form-box">
                @if (session('success'))
                    <p class="success"><i class="fa-solid fa-circle-check"></i> {{ session('success') }}</p>
                @endif

                <form method="POST" action="/get-involved">
                    @csrf

                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="event_id">Which event would you like to help with?</label>
                    <select id="event_id" name="event_id">
                        <option value="">Any event</option>
                        @foreach ($events as $event)
                            <option value="{{ $event->id }}" @selected(old('event_id') == $event->id)>
                                {{ $event->title }} ({{ $event->event_date->format('M j') }})
                            </option>
                        @endforeach
                    </select>
                    @error('event_id')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="message">Anything else we should know?</label>
                    <textarea id="message" name="message" rows="4">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <div class="hidden-field">
                        <label for="website">Leave this empty</label>
                        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <button type="submit">Sign Me Up</button>
                </form>
            </div>
        </div>
    </div>

    @include('partials.cta')

    <!-- Footer -->
    <footer>
        <div class="footer-columns">
            <div>
                <h3>Make A Way Foundation</h3>
                <p>A registered 501(c)(3) non-profit</p>
            </div>

            <div>
                <div class="footer-menu">
                    <h3>Pages</h3>
                    <button class="footer-hamburger" aria-label="Pages menu" onclick="document.getElementById('footer-links').classList.toggle('open')">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                    <div class="footer-links" id="footer-links">
                        <a href="/">Home</a>
                        <a href="/mission">Mission</a>
                        <a href="/history">History</a>
                        <a href="/what-we-offer">What We Offer</a>
                        <a href="/get-involved">Get Involved</a>
                        <a href="/board">Our Board</a>
                        <a href="/partners">Partners &amp; Supporters</a>
                        <a href="/donate">Donate</a>
                    </div>
                </div>
            </div>

            <div>
                <h3>Contact Us</h3>
                <p><a href="mailto:info@foundationmakeaway.org">info@foundationmakeaway.org</a></p>
                <p>PO Box 1768<br>Athens, AL 35612</p>
            </div>
        </div>

        <p class="copyright">© {{ date('Y') }} Make A Way Foundation. All rights reserved.</p>
    </footer>

</body>
</html>