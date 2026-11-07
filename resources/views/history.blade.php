<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="How Make A Way Foundation grew from one sensory room to serving schools and families across Athens and Limestone County.">
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
            margin-left: auto;
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
            background: linear-gradient(rgba(18, 59, 59, 0.3), rgba(18, 59, 59, 0.3)),
                        url("{{ asset('images/scroll/MWF-27.jpg') }}");
            background-color: #e6e6e6;
            background-size: cover, contain;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            text-align: center;
            padding: 130px 20px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
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

        /* ===== About us ===== */
        .story {
            background-color: white;
        }

        .story-row {
            display: flex;
            align-items: flex-start;
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
        <span class="topbar-reach" style="float: right; color: white; font-size: 14px; padding-top: 3px;">Serving Athens and Limestone County</span>
        <a href="https://www.facebook.com/FoundationMakeAWay" target="_blank" aria-label="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/makeaway.foundation/" target="_blank" aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
        </a>
    </div>

    <!-- Header -->
    <div class="main-header">
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
        <h1>Our History</h1>
        <p>How one family's love for their son grew into a foundation that serves our whole community.</p>
    </div>

    <!-- About us -->
    <div class="section story">
        <div class="container story-row">
            <img src="{{ asset('images/scroll/MWF-2.jpg') }}" alt="A family at a Make A Way Foundation event">
            <div>
                <h2>About Us</h2>
                <p>In 2011, Stacey and Kevin Givens learned that their 3 ½ year old son, Brooks, was on the Autism Spectrum. Taking recommendations from doctors, they enrolled Brooks in many therapies. Although he showed benefit from all therapies, Sensory Therapy had immediate results that helped him to better regulate himself throughout the day.</p>
                <p>Realizing that this would be critical for his school day success, Stacey set on a quest to install a Sensory Room at his targeted elementary school. With support from administration and financial contributions by family members, the first Sensory Room was built in the Athens City Schools. Brooks, along with other students, showed benefit from using the space and resulted in administration from other schools reaching out for assistance to build similar spaces. With the help of local civic organizations and private donors, Sensory Rooms have now been installed in all four of the elementary schools in Athens, the Intermediate School, Middle School, and High School.</p>
                <p>In 2015, Stacey and Kevin learned that their daughter has a hearing impairment called Enlarged Vestibular Aqueduct Syndrome. Another diagnosis further fueled their desire to bridge gaps for those with special needs.</p>
                <p>With the hope to extend the Sensory Room project to the Limestone County Schools and provide other services or equipment to special needs children, a 501(c)(3) called Make A Way Foundation was incorporated.</p>
                <p>Our Board is composed of compassionate individuals who freely give so much of their time to serving others, and who have a particular interest in helping those with special needs. Together, our goal is to Make A Way for these individuals to succeed!</p>
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

    @include('partials.cta')

    <!-- Footer -->
    <footer>
        <div class="footer-columns">
            <div>
                <h3>Make A Way Foundation</h3>
                <p>A registered 501(c)(3) nonprofit serving Athens and Limestone County</p>
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
