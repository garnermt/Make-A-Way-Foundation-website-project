<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate | Make A Way Foundation</title>

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
            text-align: right;
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
                        url("{{ asset('images/scroll/MWF-25.jpg') }}");
            background-color: #1f5c5c;
            background-size: cover;
            background-position: center 25%;
            background-attachment: fixed;
            color: white;
            text-align: center;
            padding: 220px 20px;
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

        /* ===== Your gift at work ===== */
        .impact {
            background-color: white;
        }

        .cards {
            display: flex;
            gap: 25px;
        }

        .card {
            flex: 1;
            background-color: #faf6ee;
            border-radius: 20px;
            overflow: hidden;
            text-align: center;
            padding-bottom: 25px;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: center 25%;
        }

        .card h3 {
            color: #1f5c5c;
            font-size: 24px;
            margin: 20px 0 10px 0;
        }

        .card p {
            padding: 0 20px;
            margin: 0;
            color: #4d4f47;
        }

        /* ===== Ways to give ===== */
        .ways {
            display: flex;
            gap: 25px;
        }

        .way {
            flex: 1;
            background-color: white;
            border-top: 6px solid #e2a33d;
            border-radius: 15px;
            padding: 30px 25px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .way i {
            font-size: 40px;
            color: #d9613f;
        }

        .way h3 {
            color: #1f5c5c;
            font-size: 26px;
            margin: 15px 0 10px 0;
        }

        .way p {
            color: #4d4f47;
        }

        .address {
            background-color: #faf6ee;
            border-radius: 10px;
            padding: 15px;
            font-weight: bold;
            color: #23241f;
        }

        .tax-note {
            text-align: center;
            color: #4d4f47;
            max-width: 700px;
            margin: 40px auto 0 auto;
            font-size: 15px;
        }

        /* ===== Other ways to help ===== */
        .other {
            background: linear-gradient(rgba(18, 59, 59, 0.8), rgba(18, 59, 59, 0.8)),
                        url("{{ asset('images/scroll/MWF-16.jpg') }}");
            background-color: #123b3b;
            background-size: cover;
            background-position: center 25%;
            background-attachment: fixed;
            color: white;
            text-align: center;
            padding: 110px 20px;
        }

        .other h2 {
            font-size: 40px;
            margin-top: 0;
        }

        .other p {
            font-size: 19px;
            max-width: 650px;
            margin: 0 auto 25px auto;
        }

        /* ===== Footer ===== */
        footer {
            background-color: #123b3b;
            color: white;
            padding: 50px 20px 20px 20px;
        }

        .footer-columns {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
        }

        footer h3 {
            color: #e2a33d;
        }

        footer a {
            color: white;
        }

        .footer-social a {
            font-size: 24px;
            margin-right: 15px;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid #2f5555;
            margin-top: 30px;
            padding-top: 15px;
            font-size: 14px;
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

            .section-title,
            .other h2 {
                font-size: 32px;
            }

            .cards,
            .ways,
            .footer-columns {
                flex-direction: column;
            }

            .other {
                padding: 70px 20px;
                background-attachment: scroll;
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
                </nav>
            </div>
        </div>
    </div>

    <!-- Banner -->
    <div class="banner">
        <h1>Support Make A Way</h1>
        <p>Your gift helps people with special needs and their families in Athens and Limestone County learn, play, and belong.</p>
        <a href="#ways-to-give" class="btn">Give Today</a>
    </div>

    <!-- Your gift at work -->
    <div class="section impact">
        <div class="container">
            <h2 class="section-title">Your Gift at Work</h2>
            <p class="section-intro">Every donation stays in our community and goes toward programs for children, teens, and adults with special needs.</p>

            <div class="cards">
                <div class="card">
                    <img src="{{ asset('images/home/impact-events.jpg') }}" alt="Families at a Make A Way event">
                    <h3>Inclusive Events</h3>
                    <p>Easter, swim nights, carnivals, fall festivals, and Santa Spotting.</p>
                </div>

                <div class="card">
                    <img src="{{ asset('images/scroll/MWF-9.jpg') }}" alt="A child getting a sensory-friendly haircut">
                    <h3>Free Services</h3>
                    <p>Sensory-friendly haircuts and movie days at no cost to families.</p>
                </div>

                <div class="card">
                    <img src="{{ asset('images/home/impact-rooms.jpg') }}" alt="Families enjoying a community event">
                    <h3>Programs &amp; Resources</h3>
                    <p>Adult socials, sports, STEM, calming spaces, and training for families.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ways to give -->
    <div class="section" id="ways-to-give">
        <div class="container">
            <h2 class="section-title">Ways to Give</h2>
            <p class="section-intro">Choose the way that works best for you. Every gift makes a difference.</p>

            <div class="ways">
                <div class="way">
                    <i class="fa-brands fa-paypal"></i>
                    <h3>Give Online</h3>
                    <p>Donate quickly and securely through PayPal using a card or your PayPal account.</p>
                    <a href="https://www.paypal.com/donate/?hosted_button_id=PASTE-ID-HERE" target="_blank" class="btn">Donate with PayPal</a>
                </div>

                <div class="way">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <h3>Mail a Check</h3>
                    <p>Make checks payable to <strong>Make A Way Foundation</strong> and mail to:</p>
                    <p class="address">PO Box 1768<br>Athens, AL 35612</p>
                    <p>Include your mailing address so we can send you a thank-you letter for your records.</p>
                </div>

                <div class="way">
                    <i class="fa-solid fa-handshake"></i>
                    <h3>Sponsor or Partner</h3>
                    <p>Churches, clubs, and businesses can sponsor an event or partner with us to reach more families.</p>
                    <a href="mailto:info@foundationmakeaway.org?subject=Sponsorship" class="btn">Contact Us</a>
                </div>
            </div>

            <p class="tax-note">Make A Way Foundation is a 501(c)(3) nonprofit organization. Donations may be tax-deductible as allowed by law.</p>
        </div>
    </div>

    <!-- Other ways to help -->
    <div class="other">
        <h2>Other Ways to Help</h2>
        <p>Not able to give right now? You can still make a difference by volunteering at an event or sharing our work with friends.</p>
        <a href="/get-involved" class="btn">Volunteer With Us</a>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-columns">
            <div>
                <h3>Make A Way Foundation</h3>
                <p>A 501(c)(3) nonprofit serving individuals with special needs and their families in Athens and Limestone County.</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/FoundationMakeAWay" target="_blank" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/makeaway.foundation/" target="_blank" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3>Pages</h3>
                <p><a href="/mission">Mission</a></p>
                <p><a href="/history">History</a></p>
                <p><a href="/what-we-offer">What We Offer</a></p>
                <p><a href="/get-involved">Get Involved</a></p>
                <p><a href="/board">Our Board</a></p>
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