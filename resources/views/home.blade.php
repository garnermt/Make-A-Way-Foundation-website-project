<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make A Way Foundation</title>

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
            max-width: 600px;
            margin: 0 auto 40px auto;
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

        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
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
        .header {
            background-color: white;
            border-bottom: 1px solid #e3ddcd;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .logo {
            height: 80px;
        }

        .nav a {
            color: #23241f;
            text-decoration: none;
            font-weight: bold;
            margin: 0 10px;
        }

        .nav a:hover,
        .nav a.active {
            color: #d9613f;
        }

        .nav .donate {
            background-color: #d9613f;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
        }

        .menu-button {
            display: none;
            background-color: white;
            border: 2px solid #123b3b;
            padding: 8px 14px;
            font-weight: bold;
            border-radius: 5px;
        }

        /* ===== Hero ===== */
        .hero {
            position: relative;
            overflow: hidden;
            background-color: #1f5c5c;
            color: white;
            padding: 150px 20px;
        }

        .hero-photo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center 25%;
            background-attachment: fixed;
            opacity: 0;
            transition: opacity 1.5s;
        }

        .hero-photo.show {
            opacity: 1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(18, 59, 59, 0.4);
        }

        .hero .container {
            position: relative;
        }

        .hero h1 {
            font-size: 54px;
            max-width: 650px;
            margin-top: 0;
        }

        .hero p {
            font-size: 20px;
            max-width: 550px;
            margin-bottom: 30px;
        }

        /* ===== Who We Are ===== */
        .who {
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .who img {
            width: 50%;
            border-radius: 20px;
        }

        .who h2 {
            color: #1f5c5c;
            font-size: 40px;
            margin-top: 0;
        }

        .who li {
            margin-bottom: 10px;
        }

        .who .fa-check {
            color: #1f5c5c;
            margin-right: 8px;
        }

        .link {
            color: #c4502f;
            font-weight: bold;
            text-decoration: none;
        }

        /* ===== Impact ===== */
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

        .card .icon {
            font-size: 36px;
            color: #d9613f;
            margin-top: 15px;
        }

        .card h3 {
            color: #1f5c5c;
            font-size: 24px;
            margin: 10px 0;
        }

        .card p {
            padding: 0 20px;
            margin: 0;
            color: #4d4f47;
        }

        /* ===== How You Can Help ===== */
        .help {
            background: linear-gradient(rgba(18, 59, 59, 0.8), rgba(18, 59, 59, 0.8)),
                        url("{{ asset('images/home/help.jpg') }}");
            background-color: #123b3b;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            text-align: center;
            padding: 120px 20px;
        }

        .help h2 {
            font-size: 44px;
            margin-top: 0;
        }

        .help p {
            font-size: 19px;
            max-width: 700px;
            margin: 0 auto 15px auto;
        }

        /* ===== Testimonials ===== */
        .testimonials {
            background-color: #e2a33d;
            text-align: center;
        }

        .slide {
            display: none;
            max-width: 800px;
            margin: 0 auto;
        }

        .slide p {
            font-family: "Fraunces", Georgia, serif;
            font-size: 30px;
            margin-top: 0;
        }

        .slide .name {
            font-family: "Public Sans", Arial, sans-serif;
            font-size: 18px;
            font-weight: bold;
            color: #123b3b;
        }

        .arrow {
            background-color: transparent;
            border: 2px solid #123b3b;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            font-size: 18px;
            cursor: pointer;
            margin: 0 5px;
        }

        .arrow:hover {
            background-color: #123b3b;
            color: white;
        }

        /* ===== Events ===== */
        .events {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-bottom: 40px;
        }

        .event {
            width: 300px;
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            display: flex;
            gap: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .season {
            background-color: #1f5c5c;
            color: white;
            border-radius: 10px;
            width: 90px;
            min-width: 90px;
            text-align: center;
            padding: 12px 5px;
            font-size: 13px;
            font-weight: bold;
        }

        .season i {
            display: block;
            font-size: 24px;
            color: #e2a33d;
            margin-bottom: 6px;
        }

        .event h3 {
            color: #1f5c5c;
            margin: 0 0 5px 0;
        }

        .event p {
            margin: 0;
            color: #4d4f47;
        }

        /* ===== Photo strip ===== */
        .photo-strip {
            overflow: hidden;
            background-color: white;
            padding: 25px 0;
        }

        .photo-track {
            display: flex;
            gap: 15px;
            width: max-content;
            animation: scroll 90s linear infinite;
        }

        .photo-track img {
            height: 200px;
            border-radius: 15px;
        }

        .photo-strip:hover .photo-track {
            animation-play-state: paused;
        }

        @keyframes scroll {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
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
            .logo {
                height: 55px;
            }

            .menu-button {
                display: block;
            }

            .nav {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: white;
                padding: 10px 20px;
            }

            .nav.open {
                display: block;
            }

            .nav a {
                display: block;
                padding: 12px 0;
                margin: 0;
                border-bottom: 1px solid #eeeeee;
            }

            .nav .donate {
                text-align: center;
                margin-top: 10px;
            }

            .hero {
                padding: 90px 20px;
                text-align: center;
            }

            .hero-photo {
                background-attachment: scroll;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .btn {
                display: block;
                max-width: 260px;
                margin: 10px auto;
                text-align: center;
            }

            .section-title,
            .who h2,
            .help h2 {
                font-size: 32px;
            }

            .who,
            .cards,
            .footer-columns {
                flex-direction: column;
            }

            .who img {
                width: 100%;
            }

            .help {
                background-attachment: scroll;
                padding: 80px 20px;
            }

            .slide p {
                font-size: 22px;
            }

            .event {
                width: 100%;
            }

            .photo-track img {
                height: 140px;
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
    <div class="header">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Make A Way Foundation logo" class="logo">
        </a>

        <button class="menu-button" onclick="toggleMenu()">Menu</button>

        <nav class="nav" id="nav">
            <a href="/" class="active">Home</a>
            <a href="/mission">Mission</a>
            <a href="/history">History</a>
            <a href="/what-we-offer">What We Offer</a>
            <a href="/get-involved">Get Involved</a>
            <a href="/get-involved" class="donate">Donate</a>
        </nav>
    </div>

    <!-- Hero -->
    <div class="hero">
        <div class="hero-photo show" style="background-image: url('{{ asset('images/home/impact-families.jpg') }}');"></div>
        <div class="hero-photo" style="background-image: url('{{ asset('images/home/help.jpg') }}');"></div>
        <div class="hero-photo" style="background-image: url('{{ asset('images/home/impact-rooms.jpg') }}');"></div>
        <div class="hero-photo" style="background-image: url('{{ asset('images/home/hero.jpg') }}'); background-position: center top;"></div>
        <div class="hero-photo" style="background-image: url('{{ asset('images/home/impact-events.jpg') }}');"></div>
        <div class="hero-photo" style="background-image: url('{{ asset('images/home/who-we-are.jpg') }}'); background-position: center top;"></div>
        <div class="hero-overlay"></div>

        <div class="container">
            <h1>Opening doors for special needs individuals and their families</h1>
            <p>Empowering individuals with special needs through inclusion, community programs, sensory resources, and year-round support.</p>
            <a href="#who-we-are" class="btn">Learn More</a>
            <a href="/get-involved" class="btn btn-outline">Support the Mission</a>
        </div>
    </div>

    <!-- Who We Are -->
    <div class="section" id="who-we-are">
        <div class="container who">
            <img src="{{ asset('images/home/who-we-are.jpg') }}" alt="Families at a Make A Way Foundation event">
            <div>
                <h2>Who We Are</h2>
                <p>Make A Way Foundation is a 501(c)(3) nonprofit serving Athens and Limestone County.</p>
                <p>We partner with schools, churches, and community organizations to create inclusive environments for individuals with special needs.</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i>Sensory rooms in all 21 Athens &amp; Limestone County schools (31 total spaces)</li>
                    <li><i class="fa-solid fa-check"></i>Community programs, family events, adult socials, and STEM &amp; sports initiatives</li>
                    <li><i class="fa-solid fa-check"></i>Training, advocacy, and sensory-friendly services, including free haircuts</li>
                </ul>
                <a href="/mission" class="link">About Us →</a>
            </div>
        </div>
    </div>

    <!-- Our Impact -->
    <div class="section impact">
        <div class="container">
            <h2 class="section-title">Our Impact</h2>
            <p class="section-intro">Every room, event, and resource helps people with special needs learn, play, and belong.</p>

            <div class="cards">
                <div class="card">
                    <img src="{{ asset('images/home/impact-rooms.jpg') }}" alt="A school sensory room">
                    <div class="icon"><i class="fa-solid fa-school"></i></div>
                    <h3>31 Sensory Rooms</h3>
                    <p>Supporting K–12 students with calming and regulation tools.</p>
                </div>

                <div class="card">
                    <img src="{{ asset('images/home/impact-events.jpg') }}" alt="Families at an inclusive community event">
                    <div class="icon"><i class="fa-solid fa-calendar-check"></i></div>
                    <h3>Dozens of Inclusive Events</h3>
                    <p>Pool nights, Easter events, carnivals, fall festivals, and more.</p>
                </div>

                <div class="card">
                    <img src="{{ asset('images/home/impact-families.jpg') }}" alt="Parents and children together">
                    <div class="icon"><i class="fa-solid fa-people-roof"></i></div>
                    <h3>Support for Families</h3>
                    <p>Parent fellowship, resources, training, and sensory-friendly services.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- How You Can Help -->
    <div class="help">
        <h2>How You Can Help</h2>