<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What We Offer | Make A Way Foundation</title>
    <meta name="description" content="Make A Way Foundation hosts family events, adult socials, sensory-friendly programs, sports, STEM opportunities, and more.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;0,700;1,600&family=Public+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer">
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            background-color: #faf6ee;
            color: #23241f;
            font-family: "Public Sans", Arial, sans-serif;
            line-height: 1.6;
            font-size: 1.05rem;
        }

        h1, h2, h3 {
            font-family: "Fraunces", Georgia, serif;
            line-height: 1.15;
        }

        a:focus-visible,
        button:focus-visible {
            outline: 3px solid #e2a33d;
            outline-offset: 3px;
        }

        /* ---------- Top bar: social icons ---------- */
        .topbar {
            background-color: #123b3b;
            display: flex;
            justify-content: flex-end;
            padding: 6px 20px;
        }

        .social { display: flex; gap: 8px; }

        .social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            color: white;
            font-size: 1.15rem;
            text-decoration: none;
        }

        .social a:hover { background-color: rgba(255, 255, 255, 0.18); }

        /* ---------- Header ---------- */
        .main-header {
            background-color: #123b3b;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 24px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo { height: 80px; width: auto; display: block; }

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
            font-weight: 700;
        }

        .donate-btn:hover { background-color: #c4502f; }

        .menu { position: relative; }

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
            font-weight: 700;
            padding: 12px 20px;
        }

        .dropdown a:hover,
        .dropdown a.active {
            background-color: #123b3b;
            color: #e2a33d;
        }

        .dropdown.open { display: block; }

        @media (hover: hover) {
            .menu:hover .dropdown { display: block; }
        }

        /* ---------- Parallax ---------- */
        .parallax {
            position: relative;
            clip-path: inset(0);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background-color: #123b3b;
        }

        .parallax-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .parallax::after {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(18, 59, 59, 0.6);
            z-index: 0;
        }

        .parallax-content {
            position: relative;
            z-index: 1;
            max-width: 760px;
            padding: 80px 24px;
        }

        .hero { min-height: 70vh; }
        .band { min-height: 60vh; }

        .hero h1 {
            font-size: clamp(2.1rem, 6vw, 3.6rem);
            margin: 0 0 16px;
        }

        .parallax h2 {
            font-size: clamp(1.9rem, 5vw, 3rem);
            margin: 0 0 14px;
        }

        .parallax p {
            font-size: clamp(1.1rem, 2.4vw, 1.3rem);
            margin: 0 0 24px;
        }

        .tags {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .tags li {
            border: 2px solid rgba(255, 255, 255, 0.85);
            border-radius: 999px;
            padding: 6px 16px;
            font-weight: 700;
        }

        /* ---------- Buttons ---------- */
        .btn {
            display: inline-block;
            background-color: #d9613f;
            color: white;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            margin: 6px;
        }

        .btn:hover { background-color: #e2a33d; color: #23241f; }

        .btn-outline { background-color: transparent; border: 2px solid white; }

        /* ---------- Content sections ---------- */
        .main {
            position: relative;
            background-color: #faf6ee;
            padding: 80px 20px;
        }

        .main.white { background-color: white; }

        .main-inner { max-width: 1100px; margin: 0 auto; }

        .section-title {
            text-align: center;
            color: #1f5c5c;
            font-size: clamp(1.8rem, 4vw, 2.4rem);
            margin: 0 0 12px;
        }

        .section-intro {
            text-align: center;
            color: #4d4f47;
            max-width: 680px;
            margin: 0 auto 40px;
        }

        .events {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .event {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .event img {
            display: block;
            width: 100%;
            aspect-ratio: 5 / 3;
            object-fit: cover;
            border-bottom: 5px solid #e2a33d;
        }

        .event-body {
            padding: 20px 24px 24px;
        }

        .event h3 {
            color: #1f5c5c;
            margin: 0 0 8px;
            font-size: 1.3rem;
        }

        .event p { margin: 0; color: #4d4f47; }

        .quote-cards {
            display: flex;
            gap: 20px;
            margin-top: 40px;
        }

        .quote-card {
            flex: 1;
            border-radius: 15px;
            padding: 30px 25px;
            color: white;
        }

        .quote-card.teal {
            background-color: #1f5c5c;
        }

        .quote-card.coral {
            background-color: #c4502f;
        }

        .quote-card.gold {
            background-color: #e2a33d;
            color: #23241f;
        }

        .quote-card i {
            font-size: 30px;
            opacity: 0.6;
        }

        .quote-card p {
            font-family: "Fraunces", Georgia, serif;
            font-size: 20px;
            line-height: 1.4;
            margin: 15px 0;
        }

        .quote-card span {
            font-weight: bold;
            font-size: 15px;
        }

        .services {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0 40px;
        }

        .service {
            display: flex;
            gap: 16px;
            padding: 22px 0;
            border-top: 1px solid #e3ddcd;
        }

        .service i {
            flex: none;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #123b3b;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .service h3 {
            color: #1f5c5c;
            margin: 0 0 6px;
            font-size: 1.25rem;
        }

        .service p { margin: 0; color: #4d4f47; }

        .free {
            display: inline-block;
            background-color: #e2a33d;
            color: #23241f;
            font-family: "Public Sans", Arial, sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 2px 10px;
            border-radius: 999px;
            margin-left: 6px;
            vertical-align: middle;
        }

        .flyer-row {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .flyer-row img {
            width: 40%;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        }

        .flyer-row h2 {
            color: #1f5c5c;
            font-size: clamp(1.8rem, 4vw, 2.4rem);
            margin: 10px 0 15px 0;
        }

        .flyer-row p {
            color: #4d4f47;
        }

        .flyer-row ul {
            color: #4d4f47;
            padding-left: 20px;
        }

        .flyer-row li {
            margin-bottom: 6px;
        }

        .flyer-row .free,
        .flyer-row .btn {
            margin-left: 0;
        }

        /* ---------- Footer ---------- */
        footer {
            position: relative;
            background-color: #123b3b;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .footer-nav {
            list-style: none;
            margin: 0 0 14px;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 6px 22px;
        }

        .footer-nav a { color: white; text-decoration: none; font-weight: 600; }
        .footer-nav a:hover { text-decoration: underline; }

        .copyright { margin: 0; font-size: 0.9rem; opacity: 0.85; }

        /* ---------- Tablets ---------- */
        @media (max-width: 900px) {
            .events { grid-template-columns: 1fr 1fr; }
        }

        /* ---------- Phones ---------- */
        @media (max-width: 760px) {
            .topbar { padding: 4px 12px; }
            .main-header { padding: 8px 16px; }
            .logo { height: 55px; }
            .donate-btn { padding: 8px 16px; }

            .hero { min-height: 65vh; }
            .band { min-height: 55vh; }
            .parallax-content { padding: 60px 20px; }

            .btn { display: block; margin: 10px auto; max-width: 280px; }

            .main { padding: 56px 18px; }

            .events,
            .services { grid-template-columns: 1fr; }

            .quote-cards { flex-direction: column; }

            .flyer-row { flex-direction: column; gap: 25px; }

            .flyer-row img { width: 100%; }
        }
    </style>
</head>
<body>

    <!-- Top bar -->
    <div class="topbar">
        <span class="social">
            <a href="https://www.facebook.com/foundationmakeaway" target="_blank" rel="noopener" aria-label="Make A Way Foundation on Facebook">
                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/makeaway.foundation/" target="_blank" rel="noopener" aria-label="Make A Way Foundation on Instagram">
                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
        </span>
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
                    <a href="/what-we-offer" class="active">What We Offer</a>
                    <a href="/get-involved">Get Involved</a>
                    <a href="/board">Our Board</a>
                </nav>
            </div>
        </div>
    </div>

    <main>

        <!-- Hero -->
        <section class="parallax hero">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/scroll/MWF-13.jpg') }}');"></div>
            <div class="parallax-content">
                <h1>Inclusive Events for Every Season</h1>
                <p>Make A Way hosts family events, adult socials, sensory-friendly programs, sports, STEM opportunities, and more.</p>
                <a href="#family-events" class="btn">See Our Events</a>
                <a href="/get-involved" class="btn btn-outline">Get Involved</a>
            </div>
        </section>

        <!-- Family events -->
        <section class="main" id="family-events">
            <div class="main-inner">
                <h2 class="section-title">Family Events</h2>
                <p class="section-intro">Throughout the year, we host events where families can relax, have fun, and be themselves, with activities planned so every child can take part.</p>

                <div class="events">
                    <div class="event">
                        <img src="{{ asset('images/home/impact-events.jpg') }}" alt="Easter bunny with families">
                        <div class="event-body">
                            <h3>Eggceptional Easter</h3>
                            <p>A spring celebration with an egg hunt designed so children of all abilities can join in.</p>
                        </div>
                    </div>
                    <div class="event">
                        <img src="{{ asset('images/home/impact-rooms.jpg') }}" alt="Hayride at the fall festival">
                        <div class="event-body">
                            <h3>Autumn Adventure</h3>
                            <p>A fall festival with crafts, games, and seasonal fun for the whole family.</p>
                        </div>
                    </div>
                    <div class="event">
                        <img src="{{ asset('images/scroll/MWF-24.jpg') }}" alt="Families at the carnival">
                        <div class="event-body">
                            <h3>Night at the Carnival</h3>
                            <p>Carnival games, treats, and activities at a pace that works for everyone.</p>
                        </div>
                    </div>
                    <div class="event">
                        <img src="{{ asset('images/scroll/MWF-21.jpg') }}" alt="Child visiting Santa">
                        <div class="event-body">
                            <h3>Santa Spotting</h3>
                            <p>A calm, welcoming visit with Santa, without the long lines and crowds.</p>
                        </div>
                    </div>
                    <div class="event">
                        <img src="{{ asset('images/home/help.jpg') }}" alt="Kids swimming at the pool">
                        <div class="event-body">
                            <h3>Inclusive Pool Nights</h3>
                            <p>Evening swim time where families with special needs can enjoy the pool together.</p>
                        </div>
                    </div>
                    <div class="event">
                        <img src="{{ asset('images/scroll/MWF-22.jpg') }}" alt="Sensory-friendly movie day">
                        <div class="event-body">
                            <h3>Sensory-Friendly Movie Days</h3>
                            <p>Movies with softer sound and lights up, where moving around and talking are welcome.</p>
                        </div>
                    </div>
                </div>

                <!-- Parent quotes -->
                <div class="quote-cards">
                    <div class="quote-card teal">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>"My daughter has been through so much lately... I haven't seen her having fun like that in a while!"</p>
                        <span>— Fall Festival Parent</span>
                    </div>

                    <div class="quote-card coral">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>"Thank you for making haircuts so much less stressful for our sweet girl."</p>
                        <span>— Sensory Haircuts Parent</span>
                    </div>

                    <div class="quote-card gold">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>"Best Santa, best volunteers, best activities — best ever!"</p>
                        <span>— Christmas Event Parent</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Adult socials -->
        <section class="parallax band">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/scroll/MWF-8.jpg') }}');"></div>
            <div class="parallax-content">
                <h2>Adult Socials</h2>
                <p>Our adult socials are a place to have fun, meet new people, and build meaningful friendships.</p>
                <ul class="tags">
                    <li>Crafts</li>
                    <li>Karaoke</li>
                    <li>Dancing</li>
                    <li>Food</li>
                    <li>Friendship</li>
                </ul>
            </div>
        </section>

        <!-- STEM, sports & services -->
        <section class="main white">
            <div class="main-inner">
                <h2 class="section-title">STEM, Sports &amp; Services</h2>
                <p class="section-intro">Programs and resources that support people with special needs and their families every day.</p>

                <div class="services">
                    <div class="service">
                        <i class="fa-solid fa-scissors" aria-hidden="true"></i>
                        <div>
                            <h3>Sensory-Friendly Haircuts <span class="free">Free</span></h3>
                            <p>A calmer, more comfortable haircut experience at no cost to families.</p>
                        </div>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-car" aria-hidden="true"></i>
                        <div>
                            <h3>Yellow Dot Program</h3>
                            <p>Helps first responders quickly know that a person in a vehicle may have special needs.</p>
                        </div>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-chalkboard-user" aria-hidden="true"></i>
                        <div>
                            <h3>IEP &amp; Advocacy Training</h3>
                            <p>Training that helps parents understand IEPs and speak up for their child at school.</p>
                        </div>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-flask" aria-hidden="true"></i>
                        <div>
                            <h3>STEM Camp</h3>
                            <p>Hands-on science, technology, engineering, and math activities built for every learner.</p>
                        </div>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-basketball" aria-hidden="true"></i>
                        <div>
                            <h3>Adaptive Sports &amp; Indoor Play</h3>
                            <p>Sports and active indoor play adapted so people of all abilities can join the game.</p>
                        </div>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-van-shuttle" aria-hidden="true"></i>
                        <div>
                            <h3>Mobile Sensory Unit</h3>
                            <p>A calming sensory space that travels to events and locations around the community.</p>
                        </div>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-book-open" aria-hidden="true"></i>
                        <div>
                            <h3>Library Resources</h3>
                            <p>Books and written resources donated to our local public library for families and teachers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sensory-friendly haircuts -->
        <section class="main" id="haircuts">
            <div class="main-inner flyer-row">
                <img src="{{ asset('images/scroll/MWF-9.jpg') }}" alt="A child getting a sensory-friendly haircut">
                <div>
                    <span class="free">Free</span>
                    <h2>Sensory-Friendly Haircuts</h2>
                    <p>A haircut can be overwhelming for kids with sensory needs. Our sensory-friendly haircuts give families a calmer, more comfortable experience, at no cost.</p>
                    <ul>
                        <li>Patient stylists who take their time</li>
                        <li>A quieter, low-stress setting</li>
                        <li>Free for families</li>
                    </ul>
                    <a href="mailto:info@foundationmakeaway.org?subject=Sensory-Friendly%20Haircuts" class="btn">Ask About Haircuts</a>
                </div>
            </div>
        </section>

        <!-- Call to action -->
        <section class="parallax band">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/scroll/MWF-19.jpg') }}'); background-position: center 20%;"></div>
            <div class="parallax-content">
                <h2>Help keep these programs going.</h2>
                <p>Volunteers and donations make every event and service possible.</p>
                <a href="/donate" class="btn">Donate</a>
                <a href="/get-involved" class="btn btn-outline">Volunteer</a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <ul class="footer-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/mission">Mission</a></li>
            <li><a href="/history">History</a></li>
            <li><a href="/what-we-offer">What We Offer</a></li>
            <li><a href="/get-involved">Get Involved</a></li>
            <li><a href="/board">Our Board</a></li>
        </ul>
        <p class="copyright">© {{ date('Y') }} Make A Way Foundation · 501(c)(3) Nonprofit</p>
    </footer>

</body>
</html>