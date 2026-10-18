<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Board | Make A Way Foundation</title>

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

        .nav a:hover {
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
                        url("{{ asset('images/scroll/MWF-20.jpg') }}");
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

        /* ===== Board ===== */
        .officers {
            background-color: white;
        }

        .members {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }

        .member {
            width: 230px;
            background-color: #faf6ee;
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
        }

        .board .member {
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .initials {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin: 0 auto 15px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Fraunces", Georgia, serif;
            font-size: 32px;
            font-weight: bold;
            color: white;
        }

        .initials.teal {
            background-color: #1f5c5c;
        }

        .initials.coral {
            background-color: #c4502f;
        }

        .initials.gold {
            background-color: #e2a33d;
            color: #23241f;
        }

        .member h3 {
            color: #1f5c5c;
            font-size: 22px;
            margin: 0 0 5px 0;
        }

        .member p {
            color: #d9613f;
            font-weight: bold;
            margin: 0;
        }

        /* ===== Join us ===== */
        .join {
            background-color: #e2a33d;
            text-align: center;
        }

        .join h2 {
            font-size: 40px;
            color: #123b3b;
            margin-top: 0;
        }

        .join p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto 25px auto;
        }

        .join .btn {
            background-color: #123b3b;
        }

        .join .btn:hover {
            background-color: #d9613f;
            color: white;
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
            .join h2 {
                font-size: 32px;
            }

            .footer-columns {
                flex-direction: column;
            }

            .member {
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
            <a href="/mission">Mission</a>
            <a href="/history">History</a>
            <a href="/what-we-offer">What We Offer</a>
            <a href="/get-involved">Get Involved</a>
            <a href="/donate" class="donate">Donate</a>
        </nav>
    </div>

    <!-- Banner -->
    <div class="banner">
        <h1>Our Board</h1>
        <p>Community members with a passion for helping people with special needs and their families.</p>
    </div>

    <!-- Officers -->
    <div class="section officers">
        <div class="container">
            <h2 class="section-title">Board Officers</h2>
            <p class="section-intro">Our board is made up of volunteers from Athens and Limestone County who guide the work of Make A Way Foundation.</p>

            <div class="members">
                <div class="member">
                    <div class="initials teal">SG</div>
                    <h3>Stacey Givens</h3>
                    <p>President &amp; Co-Founder</p>
                </div>

                <div class="member">
                    <div class="initials coral">JM</div>
                    <h3>James Moffatt</h3>
                    <p>Vice President / Legal</p>
                </div>

                <div class="member">
                    <div class="initials gold">JP</div>
                    <h3>Joy Patterson</h3>
                    <p>Treasurer</p>
                </div>

                <div class="member">
                    <div class="initials teal">SC</div>
                    <h3>Sharon Connealy</h3>
                    <p>Secretary</p>
                </div>

                <div class="member">
                    <div class="initials coral">HC</div>
                    <h3>Helen Carter</h3>
                    <p>Historian</p>
                </div>

                <div class="member">
                    <div class="initials gold">LB</div>
                    <h3>Lori Baker</h3>
                    <p>Public Relations</p>
                </div>

                <div class="member">
                    <div class="initials teal">MW</div>
                    <h3>Michelle Whitt</h3>
                    <p>Volunteer Coordinator</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Board members -->
    <div class="section board">
        <div class="container">
            <h2 class="section-title">Board Members</h2>
            <p class="section-intro">Thank you to every board member who gives their time to make a way for families in our community.</p>

            <div class="members">
                <div class="member">
                    <div class="initials coral">KG</div>
                    <h3>Kevin Givens</h3>
                </div>

                <div class="member">
                    <div class="initials gold">LR</div>
                    <h3>Leigh Roberts</h3>
                </div>

                <div class="member">
                    <div class="initials teal">WJ</div>
                    <h3>Wanda Johnson</h3>
                </div>

                <div class="member">
                    <div class="initials coral">MR</div>
                    <h3>Michelle Ramsden</h3>
                </div>

                <div class="member">
                    <div class="initials gold">HS</div>
                    <h3>Heidi Stinnett</h3>
                </div>

                <div class="member">
                    <div class="initials teal">AB</div>
                    <h3>Ashley Bell</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Join us -->
    <div class="section join">
        <div class="container">
            <h2>Want to Get Involved?</h2>
            <p>We're always looking for people who share our passion. Reach out to learn about volunteering or serving with us.</p>
            <a href="mailto:info@foundationmakeaway.org?subject=Board%20and%20Volunteering" class="btn">Contact Us</a>
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
                                <p><a href="/board">Our Board</a></p>
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

    <script>
        // Menu
        function toggleMenu() {
            document.getElementById("nav").classList.toggle("open");
        }
    </script>

</body>
</html>