<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mission | Make A Way Foundation</title>
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

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
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

        /* Banner */
        .banner {
            background-color: #1f5c5c;
            color: white;
            text-align: center;
            padding: 70px 20px;
        }

        .banner h1 {
            font-size: 3rem;
            margin: 0 0 10px;
        }

        .banner p {
            font-size: 1.15rem;
            margin: 0;
        }

        /* Mission statement */
        .statement {
            background-color: white;
            border-left: 8px solid #e2a33d;
            border-radius: 10px;
            padding: 36px;
            margin-top: 50px;
            font-family: "Fraunces", Georgia, serif;
            font-size: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .schools-tag {
            display: inline-block;
            background-color: #e2a33d;
            border-radius: 10px;
            padding: 16px 24px;
            margin-top: 20px;
            font-weight: bold;
        }

        .schools-tag span {
            font-family: "Fraunces", Georgia, serif;
            font-size: 2rem;
            margin-right: 8px;
        }

        /* Two columns side by side (used for video and photo) */
        .two-columns {
            display: flex;
            gap: 30px;
            align-items: center;
            margin-top: 60px;
        }

        .column {
            flex: 1;
        }

        /* Video */
        .video iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
        }

        /* Photo */
        .photo img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Text boxes next to the video and photo */
        .text-box {
            background-color: white;
            border-top: 6px solid #e2a33d;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .text-box h2 {
            color: #1f5c5c;
            margin-top: 0;
        }

        .text-box-teal {
            background-color: #1f5c5c;
            color: white;
            border-top: none;
        }

        .text-box-teal h2 {
            color: white;
        }

        /* Section titles */
        .section-title {
            text-align: center;
            color: #1f5c5c;
            font-size: 2.2rem;
            margin: 60px 0 30px;
        }

        /* Three cards side by side */
        .cards {
            display: flex;
            gap: 20px;
        }

        .card {
            flex: 1;
            background-color: white;
            border-top: 6px solid #e2a33d;
            border-radius: 10px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            color: #1f5c5c;
            margin-top: 0;
        }

        .card p {
            color: #4d4f47;
            margin-bottom: 0;
        }

        /* Quote */
        .quote {
            background-color: #d9613f;
            color: white;
            text-align: center;
            padding: 60px 20px;
            margin-top: 60px;
        }

        .quote p {
            font-family: "Fraunces", Georgia, serif;
            font-size: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Call to action */
        .cta {
            background-color: #123b3b;
            color: white;
            text-align: center;
            border-radius: 12px;
            padding: 40px 20px;
            margin: 60px 0;
        }

        .cta h2 {
            font-size: 2rem;
            margin: 0 0 10px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            background-color: #d9613f;
            color: white;
            padding: 12px 24px;
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

            .banner h1 {
                font-size: 2.2rem;
            }

            .statement {
                font-size: 1.2rem;
                padding: 24px;
            }

            .two-columns {
                flex-direction: column;
            }

            .column {
                width: 100%;
            }

            .video iframe {
                height: 220px;
            }

            .photo img {
                height: 250px;
            }

            .cards {
                flex-direction: column;
            }

            .quote p {
                font-size: 1.5rem;
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
        <a href="/">Home</a>
        <a href="/mission" class="active">Mission</a>
        <a href="/history">History</a>
        <a href="/what-we-offer">What We Offer</a>
        <a href="/get-involved">Get Involved</a>
    </nav>

    <!-- Banner -->
    <div class="banner">
        <h1>Our Mission</h1>
        <p>Making a way for every student to learn, feel safe, and thrive.</p>
    </div>

    <div class="container">

        <!-- Mission statement -->
        <div class="statement">
            Make A Way Foundation creates sensory rooms in local schools so students
            with autism and sensory needs have a calm, supportive place to learn and grow.
        </div>

        <div class="schools-tag">
            <span>7</span> schools served with sensory rooms
        </div>

        <!-- Video on the left, text on the right -->
        <div class="two-columns">
            <div class="column video">
                <iframe
                    src="https://www.youtube.com/embed/qDem6i7Xg6M"
                    title="Make A Way Foundation video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="column">
                <div class="text-box text-box-teal">
                    <h2>See the Difference</h2>
                    <p>A sensory room gives students a place to reset, so they can return to class calm, focused, and ready to learn.</p>
                </div>
            </div>
        </div>

        <!-- Text on the left, photo on the right -->
        <div class="two-columns">
            <div class="column">
                <div class="text-box">
                    <h2>A Calm Place to Learn</h2>
                    <p>Soft lighting, gentle textures, and quiet space give students room to breathe, so they can return to class ready to learn.</p>
                </div>
            </div>
            <div class="column photo">
                <img src="{{ asset('images/mission-photo.jpg') }}" alt="Students in a calm sensory room">
            </div>
        </div>

        <!-- What guides us -->
        <h2 class="section-title">What Guides Us</h2>

        <div class="cards">
            <div class="card">
                <h3>Sensory-Friendly Spaces</h3>
                <p>We design and furnish sensory rooms that help students regulate, refocus, and return to learning.</p>
            </div>

            <div class="card">
                <h3>Community Partnership</h3>
                <p>We work alongside schools, families, and local supporters to reach more students.</p>
            </div>

            <div class="card">
                <h3>Inclusion for All</h3>
                <p>Every child deserves a classroom experience where they feel understood and supported.</p>
            </div>
        </div>
    </div>

    <!-- Quote -->
    <div class="quote">
        <p>"Every child deserves a place where they feel understood." — Make A Way Foundation</p>
    </div>

    <!-- Call to action -->
    <div class="container">
        <div class="cta">
            <h2>Help Us Make a Way</h2>
            <p>Your time, donations, and partnership bring sensory rooms to more students in our community.</p>
            <a href="/get-involved" class="btn">Get Involved</a>
            <a href="/history" class="btn btn-outline">Read Our Story</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        © {{ date('Y') }} Make A Way Foundation · 501(c)(3) Nonprofit
    </footer>

</body>
</html>