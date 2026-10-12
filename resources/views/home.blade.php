<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make A Way Foundation</title>
    <meta name="description" content="Make A Way Foundation supports children, teens, and adults with special needs and their families across North Alabama.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;0,700;1,600&family=Public+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome: provides the Facebook and Instagram icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #faf6ee;
            color: #23241f;
            font-family: "Public Sans", Arial, sans-serif;
            line-height: 1.6;
            font-size: 1.05rem;
        }

        img {
            max-width: 100%;
            height: auto;
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

        .social {
            display: flex;
            gap: 8px;
        }

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

        .social a:hover {
            background-color: rgba(255, 255, 255, 0.18);
        }

        /* ---------- Header: logo + menu (stays at the top) ---------- */
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

        .logo {
            height: 90px;
            width: auto;
            display: block;
        }

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
        nav a.active {
            color: #c4502f;
        }

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

        /* ---------- Parallax sections ----------
           The photo stays still while the page scrolls over it.
           clip-path + position: fixed makes this work on iPhones too
           (the usual background-attachment: fixed does not). */
        .parallax {
            position: relative;
            clip-path: inset(0);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background-color: #123b3b; /* shows if a photo is missing */
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

        /* Dark tint so the text is easy to read */
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
            max-width: 720px;
            padding: 80px 24px;
        }

        .hero {
            min-height: calc(100vh - 150px);
        }

        .band {
            min-height: 65vh;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 6vw, 3.8rem);
            margin: 0 0 16px;
        }

        .parallax h2 {
            font-size: clamp(1.9rem, 5vw, 3rem);
            margin: 0 0 14px;
        }

        .parallax p {
            font-size: clamp(1.1rem, 2.4vw, 1.3rem);
            margin: 0 0 28px;
        }

        /* Scripture quote */
        blockquote {
            margin: 0;
        }

        blockquote p {
            font-family: "Fraunces", Georgia, serif;
            font-style: italic;
            font-size: clamp(1.5rem, 4vw, 2.3rem) !important;
            line-height: 1.3;
            margin: 0 0 18px !important;
        }

        blockquote cite {
            font-style: normal;
            font-weight: 700;
            letter-spacing: 0.02em;
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

        .btn:hover {
            background-color: #e2a33d;
            color: #23241f;
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
        }

        /* ---------- Plain content sections (scroll over the photos) ---------- */
        .main {
            position: relative;
            background-color: #faf6ee;
            padding: 80px 20px;
        }

        .main-inner {
            max-width: 1100px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            color: #1f5c5c;
            font-size: clamp(1.8rem, 4vw, 2.4rem);
            margin: 0 0 12px;
        }

        .section-intro {
            text-align: center;
            color: #4d4f47;
            max-width: 660px;
            margin: 0 auto 40px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background-color: white;
            border-top: 5px solid #e2a33d;
            border-radius: 8px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            color: #1f5c5c;
            margin-top: 0;
        }

        .card p {
            color: #4d4f47;
        }

        .card a {
            color: #c4502f;
            font-weight: 700;
            text-decoration: none;
        }

        .programs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0 40px;
        }

        .program {
            padding: 20px 0;
            border-top: 1px solid #e3ddcd;
        }

        .program h3 {
            color: #1f5c5c;
            margin: 0 0 6px;
            font-size: 1.3rem;
        }

        .program p {
            margin: 0;
            color: #4d4f47;
        }

        .center {
            text-align: center;
            margin-top: 36px;
        }

        /* Contact section */
        .contact {
            background-color: white;
            text-align: center;
        }

        .contact-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 16px 48px;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 24px;
        }

        .contact-list a {
            color: #1f5c5c;
            text-decoration: none;
        }

        .contact-list i {
            color: #d9613f;
            margin-right: 8px;
        }

        .contact .social {
            justify-content: center;
        }

        .contact .social a {
            background-color: #123b3b;
            width: 48px;
            height: 48px;
            font-size: 1.3rem;
        }

        .contact .social a:hover {
            background-color: #d9613f;
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

        .footer-nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .footer-nav a:hover {
            text-decoration: underline;
        }

        .copyright {
            margin: 0;
            font-size: 0.9rem;
            opacity: 0.85;
        }

        /* ---------- Tablets ---------- */
        @media (max-width: 900px) {
            .cards {
                grid-template-columns: 1fr;
            }
        }

        /* ---------- Phones ---------- */
        @media (max-width: 760px) {
            .topbar {
                padding: 4px 12px;
            }

            .site-header {
                padding: 8px 16px;
            }

            .logo {
                height: 60px;
            }

            .menu-btn {
                display: block;
            }

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

            nav ul.open {
                display: flex;
            }

            nav a {
                padding: 14px 8px;
                border-bottom: 1px solid #f0ebe0;
            }

            .hero {
                min-height: 80vh;
            }

            .band {
                min-height: 55vh;
            }

            .parallax-content {
                padding: 60px 20px;
            }

            .btn {
                display: block;
                margin: 10px auto;
                max-width: 280px;
            }

            .main {
                padding: 56px 18px;
            }

            .programs {
                grid-template-columns: 1fr;
            }

            .contact-list {
                flex-direction: column;
                gap: 12px;
                font-size: 1.1rem;
            }
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
                <li><a href="/" class="active" aria-current="page">Home</a></li>
                <li><a href="/mission">Mission</a></li>
                <li><a href="/history">History</a></li>
                <li><a href="/what-we-offer">What We Offer</a></li>
                <li><a href="/get-involved">Get Involved</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <!-- Parallax 1: Hero (photo stays still while the page scrolls) -->
        <section class="parallax hero">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
            <div class="parallax-content">
                <h1>Making a Way for Everyone</h1>
                <p>We open doors for children, teens, and adults with special needs and support the families who love them.</p>
                <a href="/get-involved" class="btn">Get Involved</a>
                <a href="/mission" class="btn btn-outline">Our Mission</a>
            </div>
        </section>

        <!-- Our mission -->
        <section class="main">
            <div class="main-inner">
                <h2 class="section-title">Our Mission</h2>
                <p class="section-intro">
                    Founded in 2019, Make A Way Foundation is a 501(c)(3) nonprofit. We work with school systems and churches across North Alabama to open doors for children, teens, and adults with special needs.
                </p>

                <div class="cards">
                    <div class="card">
                        <h3>Our Mission</h3>
                        <p>Providing resources for groups of two or more people with special needs in learning and recreational settings.</p>
                        <a href="/mission">Learn more →</a>
                    </div>
                    <div class="card">
                        <h3>Our History</h3>
                        <p>From one family's experience to a nonprofit serving our whole community.</p>
                        <a href="/history">Read our story →</a>
                    </div>
                    <div class="card">
                        <h3>Get Involved</h3>
                        <p>Volunteer, donate, or partner with us to reach more people and families.</p>
                        <a href="/get-involved">Join us →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parallax 2: Scripture -->
        <!-- Add a photo named community.jpg to public/images (shows teal until then) -->
        <section class="parallax band">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/community.jpg') }}');"></div>
            <div class="parallax-content">
                <blockquote>
                    <p>"I will praise thee; for I am fearfully and wonderfully made: marvellous are thy works; and that my soul knoweth right well."</p>
                    <cite>Psalm 139:14</cite>
                </blockquote>
            </div>
        </section>

        <!-- What we do -->
        <section class="main">
            <div class="main-inner">
                <h2 class="section-title">What We Do</h2>
                <p class="section-intro">Our programs support people with special needs at school, at home, and out in the community.</p>

                <div class="programs">
                    <div class="program">
                        <h3>Community events</h3>
                        <p>Fall festivals, holiday celebrations, and Touch-a-Truck days designed so everyone can join in.</p>
                    </div>
                    <div class="program">
                        <h3>Support for families</h3>
                        <p>Training, resources, and a community of people who understand what you're going through.</p>
                    </div>
                    <div class="program">
                        <h3>Sensory-friendly haircuts</h3>
                        <p>A calmer, more comfortable haircut experience at no cost to families.</p>
                    </div>
                    <div class="program">
                        <h3>Calming spaces</h3>
                        <p>Sensory rooms in local schools and churches where students can take a break and reset.</p>
                    </div>
                    <div class="program">
                        <h3>Help for schools and teachers</h3>
                        <p>Training and written resources for special education staff and our local library.</p>
                    </div>
                    <div class="program">
                        <h3>Community partnerships</h3>
                        <p>We work with churches, civic clubs, and the United Way to reach more people.</p>
                    </div>
                </div>

                <p class="center"><a href="/what-we-offer" class="btn">See Everything We Offer</a></p>
            </div>
        </section>

        <!-- Parallax 3: Call to action -->
        <!-- Add a photo named events.jpg to public/images (shows teal until then) -->
        <section class="parallax band">
            <div class="parallax-bg" style="background-image: url('{{ asset('images/events.jpg') }}');"></div>
            <div class="parallax-content">
                <h2>Help us make a way.</h2>
                <p>Your time and donations bring new programs and events to people with special needs in our community.</p>
                <a href="/get-involved" class="btn">Donate</a>
                <a href="/get-involved" class="btn btn-outline">Volunteer</a>
            </div>
        </section>

        <!-- Contact -->
        <section class="main contact">
            <div class="main-inner">
                <h2 class="section-title">We would love to hear from you.</h2>
                <p class="section-intro">Questions, ideas, or want to partner with us? Reach out anytime.</p>

                <div class="contact-list">
                    <a href="tel:+12564341762"><i class="fa-solid fa-phone" aria-hidden="true"></i>256-434-1762</a>
                    <a href="mailto:info@foundationmakeaway.org"><i class="fa-solid fa-envelope" aria-hidden="true"></i>info@foundationmakeaway.org</a>
                </div>

                <div class="social">
                    <a href="https://www.facebook.com/foundationmakeaway" target="_blank" rel="noopener" aria-label="Make A Way Foundation on Facebook">
                        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/makeaway.foundation/" target="_blank" rel="noopener" aria-label="Make A Way Foundation on Instagram">
                        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
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