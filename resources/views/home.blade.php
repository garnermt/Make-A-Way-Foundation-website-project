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

        /* ===== Photo bands ===== */
        .photo-band {
            height: 400px;
            background-size: cover;
            background-position: center 20%;
            background-attachment: fixed;
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
            background-size: cover;
            background-position: center 25%;
            color: white;
            border-radius: 10px;
            width: 110px;
            min-width: 110px;
            min-height: 120px;
            text-align: center;
            padding: 12px 5px;
            font-size: 13px;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
        }

        .season i {
            display: block;
            font-size: 22px;
            color: #e2a33d;
            margin-bottom: 4px;
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

            .photo-band {
                height: 250px;
                background-attachment: scroll;
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
            <a href="/donate" class="btn btn-outline">Support the Mission</a>
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

    <div class="photo-band" role="img" aria-label="Make A Way event photo" style="background-image: url('{{ asset('images/scroll/MWF-12.jpg') }}');"></div>

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
        <p>Your support creates accessible opportunities for children, families, and adults with special needs.</p>
        <p>Whether you donate, volunteer, or partner with us, you become part of creating a community where everyone belongs in Athens and Limestone County.</p>
        <br>
        <a href="/get-involved" class="btn">Support Make A Way →</a>
    </div>

    <!-- Testimonials -->
    <div class="section testimonials">
        <div class="container">
            <div class="slide">
                <p>"My daughter has been through so much lately... I haven't seen her having fun like that in a while!"</p>
                <span class="name">— Fall Festival Parent</span>
            </div>

            <div class="slide">
                <p>"Thank you for making haircuts so much less stressful for our sweet girl."</p>
                <span class="name">— Sensory Haircuts Parent</span>
            </div>

            <div class="slide">
                <p>"Best Santa, best volunteers, best activities — best ever!"</p>
                <span class="name">— Christmas Event Parent</span>
            </div>

            <br>
            <button class="arrow" onclick="changeSlide(-1)" aria-label="Previous">&#10094;</button>
            <button class="arrow" onclick="changeSlide(1)" aria-label="Next">&#10095;</button>
        </div>
    </div>

    <div class="photo-band" role="img" aria-label="Make A Way event photo" style="background-image: url('{{ asset('images/scroll/MWF-15.jpg') }}');"></div>

    <!-- Upcoming Events -->
    <div class="section">
        <div class="container">
            <h2 class="section-title">Upcoming Events</h2>
            <p class="section-intro">Inclusive, sensory-friendly fun all year long. Everyone is welcome.</p>

            <div class="events">
                <div class="event">
                    <div class="season" style="background-image: linear-gradient(rgba(18, 59, 59, 0.45), rgba(18, 59, 59, 0.75)), url('{{ asset('images/home/impact-events.jpg') }}');"><i class="fa-solid fa-egg"></i>Spring</div>
                    <div>
                        <h3>Eggceptional Easter</h3>
                        <p>An egg hunt and spring fun designed so every child can join in.</p>
                    </div>
                </div>

                <div class="event">
                    <div class="season" style="background-image: linear-gradient(rgba(18, 59, 59, 0.45), rgba(18, 59, 59, 0.75)), url('{{ asset('images/home/help.jpg') }}');"><i class="fa-solid fa-person-swimming"></i>Summer</div>
                    <div>
                        <h3>Inclusive Swim Nights</h3>
                        <p>Evening pool time where families with special needs can swim together.</p>
                    </div>
                </div>

                <div class="event">
                    <div class="season" style="background-image: linear-gradient(rgba(18, 59, 59, 0.45), rgba(18, 59, 59, 0.75)), url('{{ asset('images/scroll/MWF-24.jpg') }}');"><i class="fa-solid fa-ticket"></i>Late Summer</div>
                    <div>
                        <h3>Night at the Carnival</h3>
                        <p>Carnival games, treats, and activities at a pace that works for everyone.</p>
                    </div>
                </div>

                <div class="event">
                    <div class="season" style="background-image: linear-gradient(rgba(18, 59, 59, 0.45), rgba(18, 59, 59, 0.75)), url('{{ asset('images/home/impact-rooms.jpg') }}');"><i class="fa-solid fa-leaf"></i>Fall</div>
                    <div>
                        <h3>Autumn Adventure</h3>
                        <p>A fall festival with crafts, games, and a hayride for the whole family.</p>
                    </div>
                </div>

                <div class="event">
                    <div class="season" style="background-image: linear-gradient(rgba(18, 59, 59, 0.45), rgba(18, 59, 59, 0.75)), url('{{ asset('images/scroll/MWF-21.jpg') }}');"><i class="fa-solid fa-gifts"></i>December</div>
                    <div>
                        <h3>Santa Spotting</h3>
                        <p>A calm, welcoming visit with Santa without the long lines.</p>
                    </div>
                </div>

                <div class="event">
                    <div class="season" style="background-image: linear-gradient(rgba(18, 59, 59, 0.45), rgba(18, 59, 59, 0.75)), url('{{ asset('images/scroll/MWF-22.jpg') }}');"><i class="fa-solid fa-film"></i>Year-Round</div>
                    <div>
                        <h3>Sensory-Friendly Movie Days</h3>
                        <p>Softer sound, lights up, and moving around is always welcome.</p>
                    </div>
                </div>

                <div class="event">
                    <div class="season" style="background-image: linear-gradient(rgba(18, 59, 59, 0.45), rgba(18, 59, 59, 0.75)), url('{{ asset('images/scroll/MWF-23.jpg') }}');"><i class="fa-solid fa-basketball"></i>Year-Round</div>
                    <div>
                        <h3>Adaptive Sports</h3>
                        <p>Sports adapted so people of all abilities can get in the game.</p>
                    </div>
                </div>

                <div class="event">
                    <div class="season" style="background-image: linear-gradient(rgba(18, 59, 59, 0.45), rgba(18, 59, 59, 0.75)), url('{{ asset('images/scroll/MWF-9.jpg') }}');"><i class="fa-solid fa-scissors"></i>Year-Round</div>
                    <div>
                        <h3>Sensory-Friendly Haircuts</h3>
                        <p>Free haircuts in a calm, patient setting, at no cost to families.</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center;">
                <a href="/what-we-offer" class="btn">View All Events →</a>
            </div>
        </div>
    </div>

    <!-- Photo strip -->
    <div class="photo-strip">
        <div class="photo-track">
            <img src="{{ asset('images/scroll/MWF-1.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-2.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-3.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-4.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-5.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-6.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-7.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-8.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-9.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-10.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-11.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-12.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-13.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-14.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-15.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-16.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-17.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-18.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-19.jpg') }}" alt="Make A Way event photo">
            <img src="{{ asset('images/scroll/MWF-20.jpg') }}" alt="Make A Way event photo">

            <img src="{{ asset('images/scroll/MWF-1.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-2.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-3.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-4.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-5.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-6.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-7.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-8.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-9.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-10.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-11.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-12.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-13.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-14.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-15.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-16.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-17.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-18.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-19.jpg') }}" alt="">
            <img src="{{ asset('images/scroll/MWF-20.jpg') }}" alt="">
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

    <script>
        // Hero slideshow
        let heroIndex = 0;
        let heroPhotos = document.getElementsByClassName("hero-photo");

        setInterval(function () {
            heroPhotos[heroIndex].classList.remove("show");

            heroIndex = heroIndex + 1;
            if (heroIndex >= heroPhotos.length) {
                heroIndex = 0;
            }

            heroPhotos[heroIndex].classList.add("show");
        }, 5000);

        // Testimonial slider
        let slideIndex = 0;
        let slides = document.getElementsByClassName("slide");

        function showSlide() {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex].style.display = "block";
        }

        function changeSlide(step) {
            slideIndex = slideIndex + step;

            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            }

            showSlide();
        }

        showSlide();
        setInterval(function () {
            changeSlide(1);
        }, 6000);
    </script>

</body>
</html>