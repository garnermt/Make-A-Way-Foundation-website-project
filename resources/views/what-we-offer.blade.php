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
        .site-header {
            position: sticky;
            top: 0;
            z-index: 100;
            background-color: white;
            border-bottom: 1px solid #e3ddcd;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 24px;
        }

        .logo { height: 90px; width: auto; display: block; }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 4px;
        }

        nav a {
            display: block;
            color: #23241f;
            text-decoration: none;
            font-weight: 700;
            padding: 10px 14px;
        }

        nav a:hover,
        nav a.active { color: #c4502f; }

        .menu-btn {
            display: none;
            background: none;
            border: 2px solid #123b3b;
            color: #123b3b;
            font: 700 1rem "Public Sans", Arial, sans-serif;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        /* ---------- Parallax (photo stays still, page scrolls over it) ---------- */
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

        /* Adult socials tags */
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

        /* Family event cards */
        .events {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .event {
            background-color: white;
            border-top: 5px solid #e2a33d;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .event h3 {
            color: #1f5c5c;
            margin: 0 0 8px;
            font-size: 1.3rem;
        }

        .event p { margin: 0; color: #4d4f47; }

        /* Photo gallery (teal squares show until photos are added) */
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 40px;
        }

        .gallery div {
            aspect-ratio: 4 / 3;
            border-radius: 8px;
            background-color: #1f5c5c;
            background-size: cover;
            background-position: center;
        }

        /* Services list */
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
            .site-header { padding: 8px 16px; }
            .logo { height: 60px; }
            .menu-btn { display: block; }

            nav ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                flex-direction: column;
                background-color: white;
                border-bottom: 1px solid #e3ddcd;
                padding: 8px 16px 16px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            }

            nav ul.open { display: flex; }

            nav a { padding: 14px 8px; border-bottom: 1px solid #f0ebe0; }

            .hero { min-height: 65vh; }
            .band { min-height: 55vh; }
            .parallax-content { padding: 60px 20px; }

            .btn { display: block; margin: 10px auto; max-width: 280px; }

            .main { padding: 56px 18px; }

            .events,
            .services { grid-template-columns: 1fr; }

            .gallery { grid-template-columns: 1fr 1fr; gap: 8px; }
        }
    </style>
</head>
<body>

    <!-- Top bar with social media icons -->
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

    <!-- Logo + menu -->
    <header class="site-header">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Make A Way Foundation home" class="logo">
        </a>
        <nav aria-label="Main menu">
            <button class="menu-btn" aria-expanded="false" aria-controls="menu">Menu</button>
            <ul id="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/mission">Mission</a></li>
                <li><a href="/history">History</a></li>
                <li><a href="/what-we-offer" class="active" aria-current="page">What We Offer</a></li>
                <li><a href="/get-involved">Get Involved</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <!-- Hero -->
        <!-- Photo: public/images/events-hero.jpg -->
        <section class="parallax hero">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/events-hero.jpg') }}');"></div>
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
                <!-- REPLACE: intro copy from PDF page 13 -->
                <p class="section-intro">Throughout the year, we host events where families can relax, have fun, and be themselves, with activities planned so every child can take part.</p>

                <!-- REPLACE: each description with copy from PDF page 13 -->
                <div class="events">
                    <div class="event">
                        <h3>Eggceptional Easter</h3>
                        <p>A spring celebration with an egg hunt designed so children of all abilities can join in.</p>
                    </div>
                    <div class="event">
                        <h3>Autumn Adventure</h3>
                        <p>A fall festival with crafts, games, and seasonal fun for the whole family.</p>
                    </div>
                    <div class="event">
                        <h3>Night at the Carnival</h3>
                        <p>Carnival games, treats, and activities at a pace that works for everyone.</p>
                    </div>
                    <div class="event">
                        <h3>Santa Spotting</h3>
                        <p>A calm, welcoming visit with Santa, without the long lines and crowds.</p>
                    </div>
                    <div class="event">
                        <h3>Inclusive Pool Nights</h3>
                        <p>Evening swim time where families with special needs can enjoy the pool together.</p>
                    </div>
                    <div class="event">
                        <h3>Sensory-Friendly Movie Days</h3>
                        <p>Movies with softer sound and lights up, where moving around and talking are welcome.</p>
                    </div>
                </div>

                <!-- Photo gallery from PDF page 14: save photos as event-1.jpg to event-6.jpg in public/images -->
                <div class="gallery">
                    <div role="img" aria-label="Family event photo 1" style="background-image: url('{{ asset('images/event-1.jpg') }}');"></div>
                    <div role="img" aria-label="Family event photo 2" style="background-image: url('{{ asset('images/event-2.jpg') }}');"></div>
                    <div role="img" aria-label="Family event photo 3" style="background-image: url('{{ asset('images/event-3.jpg') }}');"></div>
                    <div role="img" aria-label="Family event photo 4" style="background-image: url('{{ asset('images/event-4.jpg') }}');"></div>
                    <div role="img" aria-label="Family event photo 5" style="background-image: url('{{ asset('images/event-5.jpg') }}');"></div>
                    <div role="img" aria-label="Family event photo 6" style="background-image: url('{{ asset('images/event-6.jpg') }}');"></div>
                </div>
            </div>
        </section>

        <!-- Adult socials (parallax) -->
        <!-- Photo: public/images/adult-socials.jpg -->
        <section class="parallax band">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/adult-socials.jpg') }}');"></div>
            <div class="parallax-content">
                <h2>Adult Socials</h2>
                <!-- REPLACE: copy from PDF pages 15–16 -->
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
                <!-- REPLACE: descriptions with copy from PDF pages 16–23 -->
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

        <!-- Call to action (parallax) -->
        <!-- Photo: public/images/events.jpg -->
        <section class="parallax band">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/events.jpg') }}');"></div>
            <div class="parallax-content">
                <h2>Help keep these programs going.</h2>
                <p>Volunteers and donations make every event and service possible.</p>
                <a href="/get-involved" class="btn">Donate</a>
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
        </ul>
        <p class="copyright">© {{ date('Y') }} Make A Way Foundation · 501(c)(3) Nonprofit</p>
    </footer>

    <script>
        // Phone menu: open and close
        const menuBtn = document.querySelector('.menu-btn');
        const menu = document.getElementById('menu');
        menuBtn.addEventListener('click', function () {
            const isOpen = menu.classList.toggle('open');
            menuBtn.setAttribute('aria-expanded', isOpen);
            menuBtn.textContent = isOpen ? 'Close' : 'Menu';
        });
    </script>

</body>
</html>