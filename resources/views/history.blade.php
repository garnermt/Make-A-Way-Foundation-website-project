<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our History | Make A Way Foundation</title>

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
                        url("{{ asset('images/scroll/MWF-14.jpg') }}");
            background-color: #1f5c5c;
            background-size: cover;
            background-position: center 10%;
            background-attachment: fixed;
            color: white;
            text-align: center;
            padding: 130px 20px;
        }

        .banner h1 {
            font-size: 52px;
            margin: 0 0 15px 0;
        }

        .banner p {
            font-size: 20px;
            max-width: 650px;
            margin: 0 auto;
        }

        /* ===== Our story ===== */
        .story {
            background-color: white;
        }

        .story-row {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .story-row img {
            width: 45%;
            height: 400px;
            object-fit: cover;
            object-position: center 25%;
            border-radius: 20px;
        }

        .story-row h2 {
            color: #1f5c5c;
            font-size: 40px;
            margin-top: 0;
        }

        .story-row p {
            color: #4d4f47;
            font-size: 17px;
        }

        /* ===== Timeline ===== */
        .timeline {
            max-width: 750px;
            margin: 0 auto;
            border-left: 4px solid #e2a33d;
            padding-left: 35px;
        }

        .step {
            position: relative;
            margin-bottom: 40px;
        }

        .step::before {
            content: "";
            position: absolute;
            left: -47px;
            top: 6px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #d9613f;
            border: 4px solid #faf6ee;
        }

        .step .when {
            font-weight: bold;
            color: #d9613f;
            font-size: 15px;
        }

        .step h3 {
            color: #1f5c5c;
            font-size: 26px;
            margin: 5px 0 8px 0;
        }

        .step p {
            color: #4d4f47;
            margin: 0;
        }

        /* ===== Photo band ===== */
        .photo-band {
            height: 400px;
            background-size: cover;
            background-position: center 20%;
            background-attachment: fixed;
        }

        /* ===== Today ===== */
        .today {
            background-color: white;
        }

        .programs {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .program {
            width: 300px;
            background-color: #faf6ee;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
        }

        .program i {
            font-size: 34px;
            color: #d9613f;
        }

        .program h3 {
            color: #1f5c5c;
            margin: 12px 0 8px 0;
        }

        .program p {
            color: #4d4f47;
            margin: 0;
        }

        /* ===== Call to action ===== */
        .cta {
            background-color: #e2a33d;
            text-align: center;
        }

        .cta h2 {
            font-size: 40px;
            color: #123b3b;
            margin-top: 0;
        }

        .cta p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto 25px auto;
        }

        .cta .btn-dark {
            background-color: #123b3b;
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

        /* ===== Footer menu ===== */
        .footer-menu {
            position: relative;
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
            top: 100%;
            left: 0;
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
            .story-row h2,
            .cta h2 {
                font-size: 32px;
            }

            .story-row,
            .footer-columns {
                flex-direction: column;
            }

            .story-row {
                gap: 25px;
            }

            .story-row img {
                width: 100%;
                height: 260px;
            }

            .timeline {
                padding-left: 25px;
            }

            .step::before {
                left: -37px;
            }

            .step h3 {
                font-size: 22px;
            }

            .photo-band {
                height: 250px;
                background-attachment: scroll;
            }

            .program {
                width: 100%;
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
                </nav>
            </div>
        </div>
    </div>

    <!-- Banner -->
    <div class="banner">
        <h1>Our History</h1>
        <p>How one family's love for their son grew into a foundation that serves our whole community.</p>
    </div>

    <!-- Our story -->
    <div class="section story">
        <div class="container story-row">
            <img src="{{ asset('images/scroll/MWF-2.jpg') }}" alt="A family at a Make A Way Foundation event">
            <div>
                <h2>Our Story</h2>
                <p>Make A Way Foundation was started by Kevin and Stacey Givens. Before it was ever a nonprofit, they spent years raising money on their own to help children with autism, including their own son.</p>
                <p>They saw how much a little support could change a child's day. Other families noticed too, and the community began to get involved.</p>
                <p>What started as one family helping where they could has grown into a foundation that brings people together through events, programs, and support all year long.</p>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div class="section">
        <div class="container">
            <h2 class="section-title">How We Grew</h2>
            <p class="section-intro">A few of the milestones along the way.</p>

            <div class="timeline">
                <div class="step">
                    <span class="when">The Beginning</span>
                    <h3>A family steps up</h3>
                    <p>Kevin and Stacey Givens raise money on their own to support children with autism in Athens.</p>
                </div>

                <div class="step">
                    <span class="when">First Steps</span>
                    <h3>Help at school</h3>
                    <p>The first calming space opens at Brookhill Elementary, where their son was a student. Other students start using it too.</p>
                </div>

                <div class="step">
                    <span class="when">2019</span>
                    <h3>Make A Way Foundation is founded</h3>
                    <p>With support from local donors and civic clubs, the foundation becomes an official 501(c)(3) nonprofit.</p>
                </div>

                <div class="step">
                    <span class="when">Growing</span>
                    <h3>Events for the whole community</h3>
                    <p>The foundation begins hosting sensory-friendly events like fall festivals, Touch-a-Truck, and holiday celebrations, plus free sensory-friendly haircuts.</p>
                </div>

                <div class="step">
                    <span class="when">2023</span>
                    <h3>United Way partner agency</h3>
                    <p>Make A Way becomes a partner agency of the United Way of Athens-Limestone County.</p>
                </div>

                <div class="step">
                    <span class="when">Today</span>
                    <h3>Serving all of Athens and Limestone County</h3>
                    <p>Family events, adult socials, sports, STEM, training for families, and calming spaces in all 21 local schools.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Photo band -->
    <div class="photo-band" role="img" aria-label="Make A Way event photo" style="background-image: url('{{ asset('images/scroll/MWF-17.jpg') }}');"></div>

    <!-- Today -->
    <div class="section today">
        <div class="container">
            <h2 class="section-title">Where We Are Today</h2>
            <p class="section-intro">Our work keeps growing with the needs of the families we serve.</p>

            <div class="programs">
                <div class="program">
                    <i class="fa-solid fa-calendar-days"></i>
                    <h3>Family Events</h3>
                    <p>Easter, carnival night, fall festival, swim nights, and Santa Spotting.</p>
                </div>

                <div class="program">
                    <i class="fa-solid fa-people-group"></i>
                    <h3>Adult Socials</h3>
                    <p>Crafts, karaoke, dancing, food, and friendship.</p>
                </div>

                <div class="program">
                    <i class="fa-solid fa-basketball"></i>
                    <h3>Sports &amp; STEM</h3>
                    <p>Adaptive sports and hands-on learning for every ability.</p>
                </div>

                <div class="program">
                    <i class="fa-solid fa-scissors"></i>
                    <h3>Sensory-Friendly Services</h3>
                    <p>Free haircuts and calmer movie days and holiday visits.</p>
                </div>

                <div class="program">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <h3>Training &amp; Advocacy</h3>
                    <p>Resources and training for parents, teachers, and caregivers.</p>
                </div>

                <div class="program">
                    <i class="fa-solid fa-school"></i>
                    <h3>Calming Spaces</h3>
                    <p>Sensory rooms in all 21 Athens and Limestone County schools.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to action -->
    <div class="section cta">
        <div class="container">
            <h2>Be Part of What's Next</h2>
            <p>Every volunteer, donor, and partner helps us make a way for more families in Athens and Limestone County.</p>
            <a href="/what-we-offer" class="btn btn-dark">See Our Events</a>
            <a href="/get-involved" class="btn">Get Involved</a>
        </div>
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
                    <a href="/donate">Donate</a>
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