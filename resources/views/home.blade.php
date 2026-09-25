<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make A Way Foundation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #faf6ee;
            --card: #ffffff;
            --ink: #23241f;
            --ink-soft: #4d4f47;
            --teal: #1f5c5c;
            --teal-deep: #123b3b;
            --gold: #e2a33d;
            --coral: #d9613f;
            --line: #e3ddcd;
            --font-display: "Fraunces", Georgia, serif;
            --font-body: "Public Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: var(--font-body);
            line-height: 1.6;
        }

        /* Top bar */
        .topbar {
            background: var(--teal-deep);
            color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 10px 24px;
            font-weight: 600;
        }
        .topbar a { color: #fff; text-decoration: none; margin-left: 20px; }

        /* Logo */
        .logo-bar {
            background: var(--card);
            text-align: center;
            padding: 20px 16px 4px;
        }
        .logo {
            height: 300px;
            width: auto;
        }

        /* Menu */
        nav {
            background: var(--card);
            border-bottom: 1px solid var(--line);
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 28px;
            padding: 16px;
        }
        nav a { color: var(--ink); text-decoration: none; font-weight: 600; }
        nav a:hover, nav a.active { color: var(--coral); }

        /* Full-screen photo banner */
        .fullscreen-hero {
            position: relative;
            height: 100vh;
            min-height: 500px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }
        .fullscreen-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(18, 59, 59, 0.55), rgba(18, 59, 59, 0.75));
        }
        .hero-content {
            position: relative;
            max-width: 720px;
            padding: 24px;
        }
        .hero-content h1 {
            font-family: var(--font-display);
            font-size: clamp(2.2rem, 6vw, 4rem);
            margin: 0 0 16px;
            line-height: 1.15;
        }
        .hero-content p {
            font-size: clamp(1.05rem, 2.5vw, 1.35rem);
            margin: 0 0 28px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            background: var(--coral);
            color: #fff;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            margin: 6px;
        }
        .btn:hover { background: var(--gold); color: var(--ink); }
        .btn-outline {
            background: transparent;
            border: 2px solid #fff;
        }
        .btn-outline:hover { background: #fff; color: var(--teal-deep); }

        /* Content below the banner */
        main { max-width: 1000px; margin: 0 auto; padding: 64px 24px; }

        .section-title {
            font-family: var(--font-display);
            color: var(--teal);
            text-align: center;
            font-size: 2.2rem;
            margin: 0 0 12px;
        }
        .section-intro {
            text-align: center;
            color: var(--ink-soft);
            max-width: 640px;
            margin: 0 auto 40px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }
        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-top: 5px solid var(--gold);
            border-radius: 8px;
            padding: 28px;
        }
        .card h3 { font-family: var(--font-display); color: var(--teal); margin-top: 0; }
        .card p { color: var(--ink-soft); }
        .card a { color: var(--coral); font-weight: 600; text-decoration: none; }

        footer {
            background: var(--teal-deep);
            color: #fff;
            text-align: center;
            padding: 24px;
        }
    </style>
</head>
<body>

    <div class="topbar">
        <span>📞 256-434-1768</span>
        <span>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
        </span>
    </div>

    <div class="logo-bar">
       <div class="logo-bar">
    <a href="/">
        <img src="{{ asset('images/logo.png') }}" alt="Make A Way Foundation logo" class="logo">
    </a>
</div>

    <nav>
        <a href="/" class="active">Home</a>
        <a href="/mission">Mission</a>
        <a href="/history">History</a>
        <a href="/what-we-offer">What We Offer</a>
        <a href="/get-involved">Get Involved</a>
    </nav>

    <section class="fullscreen-hero" style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="hero-content">
            <h1>Making a Way for Every Student</h1>
            <p>Sensory rooms that help students with autism and sensory needs learn, feel safe, and thrive.</p>
            <a href="/get-involved" class="btn">Get Involved</a>
            <a href="/mission" class="btn btn-outline">Our Mission</a>
        </div>
    </section>

    <main>
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
    </main>

    <footer>
        © {{ date('Y') }} Make A Way Foundation · 501(c)(3) Nonprofit
    </footer>

</body>
</html>