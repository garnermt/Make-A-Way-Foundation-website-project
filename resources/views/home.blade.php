<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make A Way Foundation</title>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background-color: #faf6ee;
            color: #23241f;
            font-family: "Public Sans", Arial, sans-serif;
            line-height: 1.6;
        }

        h1, h2, h3 {
            font-family: "Fraunces", Georgia, serif;
        }

        /* Top bar */
        .topbar {
            background-color: #123b3b;
            color: white;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            font-weight: bold;
        }

        .topbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        /* Logo */
        .logo-bar {
            background-color: white;
            text-align: center;
            padding: 20px;
        }

        .logo {
            height: 300px;
        }

        /* Menu */
        nav {
            background-color: white;
            border-bottom: 1px solid #e3ddcd;
            text-align: center;
            padding: 16px;
        }

        nav a {
            color: #23241f;
            text-decoration: none;
            font-weight: bold;
            margin: 0 14px;
        }

        nav a:hover {
            color: #d9613f;
        }

        nav a.active {
            color: #d9613f;
        }

        /* Big photo banner */
        .hero {
            position: relative;
            height: 600px;
            background-size: cover;
            background-position: center;
        }

        /* Dark tint on top of the photo so the text is easy to read */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(18, 59, 59, 0.65);
        }

        .hero-text {
            position: relative;
            color: white;
            text-align: center;
            max-width: 700px;
            margin: 0 auto;
            padding-top: 180px;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            margin: 0 0 16px;
        }

        .hero-text p {
            font-size: 1.3rem;
            margin: 0 0 28px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            background-color: #d9613f;
            color: white;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
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

        /* Main section */
        .main {
            max-width: 1000px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .section-title {
            text-align: center;
            color: #1f5c5c;
            font-size: 2.2rem;
            margin: 0 0 12px;
        }

        .section-intro {
            text-align: center;
            color: #4d4f47;
            margin: 0 0 40px;
        }

        /* Three cards side by side */
        .cards {
            display: flex;
            gap: 20px;
        }

        .card {
            flex: 1;
            background-color: white;
            border-top: 5px solid #e2a33d;
            border-radius: 8px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            color: #1f5c5c;
            margin-top: 0;
        }

        .card p {
            color: #4d4f47;
        }

        .card a {
            color: #d9613f;
            font-weight: bold;
            text-decoration: none;
        }

        /* Footer */
        footer {
            background-color: #123b3b;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Phones */
        @media (max-width: 800px) {
            .logo {
                height: 160px;
            }

            .hero {
                height: 500px;
            }

            .hero-text {
                padding-top: 120px;
            }

            .hero-text h1 {
                font-size: 2.2rem;
            }

            .hero-text p {
                font-size: 1.1rem;
            }

            .cards {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <!-- Top bar with phone number and social links -->
    <div class="topbar">
        <span>📞 256-434-1768</span>
        <span>
            <a href="https://www.facebook.com/foundationmakeaway" target="_blank" rel="noopener">Facebook</a>
            <a href="https://www.instagram.com/makeaway.foundation/" target="_blank" rel="noopener">Instagram</a>
        </span>
    </div>

    <!-- Logo -->
    <div class="logo-bar">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Make A Way Foundation logo" class="logo">
        </a>
    </div>

    <!-- Menu -->
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/mission">Mission</a>
        <a href="/history">History</a>
        <a href="/what-we-offer">What We Offer</a>
        <a href="/get-involved">Get Involved</a>
    </nav>

    <!-- Big photo banner -->
    <div class="hero" style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Making a Way for Every Student</h1>
            <p>Sensory rooms that help students with autism and sensory needs learn, feel safe, and thrive.</p>
            <a href="/get-involved" class="btn">Get Involved</a>
            <a href="/mission" class="btn btn-outline">Our Mission</a>
        </div>
    </div>

    <!-- How we help -->
    <div class="main">
        <h2 class="section-title">How We Help</h2>
        <p class="section-intro">
            What started with one sensory room has grown to serve students in seven schools.
        </p>

        <div class="cards">
            <div class="card">
                <h3>Our Mission</h3>
                <p>Creating calm, supportive spaces where every student can learn and grow.</p>
                <a href="/mission">Learn more →</a>
            </div>

            <div class="card">
                <h3>Our History</h3>
                <p>From one family's experience to a 501(c)(3) serving schools across our community.</p>
                <a href="/history">Read our story →</a>
            </div>

            <div class="card">
                <h3>Get Involved</h3>
                <p>Volunteer, donate, or partner with us to bring sensory rooms to more schools.</p>
                <a href="/get-involved">Join us →</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        © {{ date('Y') }} Make A Way Foundation · 501(c)(3) Nonprofit
    </footer>

</body>
</html>