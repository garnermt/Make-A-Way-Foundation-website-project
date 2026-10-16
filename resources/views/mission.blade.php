<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mission | Make A Way Foundation</title>

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

        /* ===== Page banner ===== */
        .banner {
            background: linear-gradient(rgba(18, 59, 59, 0.55), rgba(18, 59, 59, 0.55)),
                        url("{{ asset('images/scroll/MWF-11.jpg') }}");
            background-color: #1f5c5c;
            background-size: cover;
            background-position: center 25%;
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

        /* ===== Mission statement ===== */
        .mission-statement {
            background-color: white;
            text-align: center;
        }

        .mission-statement .big-quote {
            font-family: "Fraunces", Georgia, serif;
            font-size: 30px;
            color: #1f5c5c;
            max-width: 850px;
            margin: 0 auto 25px auto;
        }

        .mission-statement p {
            max-width: 700px;
            margin: 0 auto 15px auto;
            color: #4d4f47;
            font-size: 18px;
        }

        /* ===== Event rows ===== */
        .row {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 70px;
        }

        .row.flip {
            flex-direction: row-reverse;
        }

        .row img {
            width: 50%;
            height: 340px;
            object-fit: cover;
            object-position: center 25%;
            border-radius: 20px;
        }

        .row h3 {
            color: #1f5c5c;
            font-size: 30px;
            margin-top: 0;
        }

        .row p {
            color: #4d4f47;
        }

        .row .tag {
            display: inline-block;
            background-color: #e2a33d;
            color: #23241f;
            font-weight: bold;
            font-size: 14px;
            padding: 4px 12px;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        /* ===== Why it matters ===== */
        .matters {
            background-color: white;
        }

        .points {
            display: flex;
            gap: 25px;
        }

        .point {
            flex: 1;
            text-align: center;
            background-color: #faf6ee;
            border-radius: 20px;
            padding: 30px 25px;
        }

        .point i {
            font-size: 40px;
            color: #d9613f;
        }

        .point h3 {
            color: #1f5c5c;
            font-size: 24px;
            margin: 15px 0 10px 0;
        }

        .point p {
            color: #4d4f47;
            margin: 0;
        }

        /* ===== Scripture band ===== */
        .verse {
            background: linear-gradient(rgba(18, 59, 59, 0.75), rgba(18, 59, 59, 0.75)),
                        url("{{ asset('images/scroll/MWF-16.jpg') }}");
            background-color: #123b3b;
            background-size: cover;
            background-position: center 25%;
            background-attachment: fixed;
            color: white;
            text-align: center;
            padding: 110px 20px;
        }

        .verse p {
            font-family: "Fraunces", Georgia, serif;
            font-size: 32px;
            max-width: 800px;
            margin: 0 auto 15px auto;
        }

        .verse span {
            font-weight: bold;
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
            .cta h2 {
                font-size: 32px;
            }

            .mission-statement .big-quote {
                font-size: 24px;
            }

            .row,
            .row.flip,
            .points,
            .footer-columns {
                flex-direction: column;
            }

            .row {
                gap: 20px;
                margin-bottom: 50px;
            }

            .row img {
                width: 100%;
                height: 240px;
            }

            .row h3 {
                font-size: 26px;
            }

            .verse {
                padding: 70px 20px;
                background-attachment: scroll;
            }

            .verse p {
                font-size: 24px;
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
    <div class="header">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Make A Way Foundation logo" class="logo">
        </a>

        <button class="menu-button" onclick="toggleMenu()">Menu</button>

        <nav class="nav" id="nav">
            <a href="/">Home</a>
            <a href="/mission" class="active">Mission</a>
            <a href="/history">History</a>
            <a href="/what-we-offer">What We Offer</a>
            <a href="/get-involved">Get Involved</a>
            <a href="/get-involved" class="donate">Donate</a>
        </nav>
    </div>

    <!-- Banner -->
    <div class="banner">
        <h1>Our Mission</h1>
        <p>Creating places where people with special needs and their families can learn, play, and belong.</p>
    </div>

    <!-- Mission statement -->
    <div class="section mission-statement">
        <div class="container">
            <p class="big-quote">"To provide resources that help groups of two or more individuals with special needs in a learning or recreational environment."</p>
            <p>Make A Way Foundation is a 501(c)(3) nonprofit founded in 2019 and serving Athens and Limestone County.</p>
            <p>We work with schools, churches, and community partners to create events and experiences where everyone is welcome, just as they are.</p>
        </div>
    </div>

    <!-- How our events help -->
    <div class="section">
        <div class="container">
            <h2 class="section-title">How Our Events Help</h2>
            <p class="section-intro">Every event is planned so people of all abilities can join in. Here's what that means for the families we serve.</p>

            <div class="row">
                <img src="{{ asset('images/scroll/MWF-1.jpg') }}" alt="Families at a Make A Way community event">
                <div>
                    <span class="tag">Family Events</span>
                    <h3>Fun the whole family can share</h3>
                    <p>Our Easter egg hunt, carnival night, fall festival, and swim nights are built with sensory needs in mind, with quieter spaces, patient volunteers, and no pressure.</p>
                    <p>Families get to enjoy a day out together, and meet other families who understand what they're going through.</p>
                </div>
            </div>

            <div class="row flip">
                <img src="{{ asset('images/scroll/MWF-4.jpg') }}" alt="A child enjoying a sensory-friendly activity">
                <div>
                    <span class="tag">Sensory-Friendly</span>
                    <h3>Everyday experiences, made calmer</h3>
                    <p>Things many families skip, like a haircut, a movie, or a visit with Santa, can be overwhelming. We make them calmer with softer sound and lights, shorter waits, and extra time.</p>
                    <p>Our sensory-friendly haircuts are free for families.</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('images/scroll/MWF-8.jpg') }}" alt="Adults at a Make A Way social event">
                <div>
                    <span class="tag">Adult Socials</span>
                    <h3>Friendships that last</h3>
                    <p>Support shouldn't stop after graduation. Our adult socials bring people together for crafts, karaoke, dancing, and food.</p>
                    <p>It's a regular place to see friends, try something new, and feel part of the community.</p>
                </div>
            </div>

            <div class="row flip">
                <img src="{{ asset('images/scroll/MWF-10.jpg') }}" alt="Kids playing at an adaptive sports event">
                <div>
                    <span class="tag">Sports &amp; STEM</span>
                    <h3>Building skills and confidence</h3>
                    <p>Adaptive sports and STEM activities give kids the chance to be part of a team, try hands-on projects, and discover what they're good at.</p>
                    <p>Activities are adjusted so every participant can take part at their own pace.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why it matters -->
    <div class="section matters">
        <div class="container">
            <h2 class="section-title">Why It Matters</h2>
            <p class="section-intro">Our events do more than fill a calendar. They help build a stronger community.</p>

            <div class="points">
                <div class="point">
                    <i class="fa-solid fa-heart"></i>
                    <h3>Belonging</h3>
                    <p>People with special needs are welcomed and celebrated, not just included.</p>
                </div>

                <div class="point">
                    <i class="fa-solid fa-people-group"></i>
                    <h3>Connection</h3>
                    <p>Families meet each other, share advice, and build lasting support networks.</p>
                </div>

                <div class="point">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                    <h3>Community</h3>
                    <p>Schools, churches, and local businesses come together to make a way for everyone.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripture -->
    <div class="verse">
        <p>"I will praise thee; for I am fearfully and wonderfully made."</p>
        <span>Psalm 139:14</span>
    </div>

    <!-- Call to action -->
    <div class="section cta">
        <div class="container">
            <h2>Join Us at an Event</h2>
            <p>Whether you come to an event, volunteer, or donate, you help make a way for families in Athens and Limestone County.</p>
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

            <div>
                <h3>Pages</h3>
                <p><a href="/mission">Mission</a></p>
                <p><a href="/history">History</a></p>
                <p><a href="/what-we-offer">What We Offer</a></p>
                <p><a href="/get-involved">Get Involved</a></p>
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
        // Menu
        function toggleMenu() {
            document.getElementById("nav").classList.toggle("open");
        }
    </script>

</body>
</html>