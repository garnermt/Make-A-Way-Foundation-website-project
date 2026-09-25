<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mission | Make A Way Foundation</title>
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
            --shadow: 0 20px 40px rgba(18, 59, 59, 0.15);
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
            overflow-x: hidden;
        }

        .container { max-width: 1100px; margin: 0 auto; padding: 0 24px; }

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
        .logo { height: 300px; width: auto; max-width: 100%; }

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

        /* Banner (extra bottom space so the statement can overlap it) */
        .page-banner {
            background: var(--teal);
            color: #fff;
            text-align: center;
            padding: 80px 24px 160px;
        }
        .page-banner h1 {
            font-family: var(--font-display);
            font-size: clamp(2.4rem, 6vw, 4rem);
            margin: 0 0 12px;
        }
        .page-banner p { max-width: 640px; margin: 0 auto; font-size: 1.15rem; }

        /* 12-column grid used by the grid-breaking sections */
        .grid-12 {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        /* Statement overlaps the banner */
        .statement-wrap {
            margin-top: -110px;
            position: relative;
            z-index: 2;
        }
        .statement {
            grid-column: 1 / 10;
            background: var(--card);
            border-left: 8px solid var(--gold);
            border-radius: 12px;
            padding: 40px;
            box-shadow: var(--shadow);
            font-family: var(--font-display);
            font-size: clamp(1.25rem, 2.6vw, 1.7rem);
            line-height: 1.45;
        }
        .statement-tag {
            grid-column: 10 / 13;
            align-self: end;
            background: var(--gold);
            color: var(--ink);
            border-radius: 12px;
            padding: 24px;
            font-weight: 600;
            transform: translateY(48px);
            box-shadow: var(--shadow);
        }
        .statement-tag strong {
            display: block;
            font-family: var(--font-display);
            font-size: 2.4rem;
            line-height: 1;
            margin-bottom: 6px;
        }

        /* Video section: video breaks out to the right, text card overlaps it */
        .video-section {
            margin-top: 140px;
            align-items: center;
        }
        .video-frame {
            grid-column: 5 / 13;
            grid-row: 1;
            position: relative;
            margin-right: -80px;
        }
        .video-frame::before {
            content: "";
            position: absolute;
            top: -28px;
            left: -28px;
            width: 60%;
            height: 70%;
            background: var(--gold);
            border-radius: 12px;
        }
        .video-embed {
            position: relative;
            aspect-ratio: 16 / 9;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background: var(--teal-deep);
        }
        .video-embed iframe {
            width: 100%;
            height: 100%;
            border: 0;
            display: block;
        }
        .video-text {
            grid-column: 1 / 6;
            grid-row: 1;
            position: relative;
            z-index: 2;
            background: var(--teal);
            color: #fff;
            border-radius: 12px;
            padding: 36px;
            transform: translateY(90px);
            box-shadow: var(--shadow);
        }
        .video-text h2 {
            font-family: var(--font-display);
            font-size: 1.9rem;
            margin: 0 0 12px;
        }
        .video-text p { margin: 0; }

        /* Staggered value cards */
        .values { margin-top: 180px; padding-bottom: 96px; }
        .section-title {
            font-family: var(--font-display);
            color: var(--teal);
            font-size: clamp(2rem, 4vw, 2.6rem);
            margin: 0 0 40px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-top: 6px solid var(--gold);
            border-radius: 12px;
            padding: 28px;
            box-shadow: var(--shadow);
        }
        .card:nth-child(2) { transform: translateY(48px); border-top-color: var(--coral); }
        .card:nth-child(3) { transform: translateY(96px); border-top-color: var(--teal); }
        .card h3 { font-family: var(--font-display); color: var(--teal); margin-top: 0; }
        .card p { color: var(--ink-soft); margin-bottom: 0; }

        /* Slanted full-width quote band */
        .quote-band {
            background: var(--coral);
            color: #fff;
            text-align: center;
            padding: 110px 24px 150px;
            margin-top: 80px;
            clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%);
        }
        .quote-band blockquote {
            font-family: var(--font-display);
            font-size: clamp(1.6rem, 3.6vw, 2.5rem);
            line-height: 1.3;
            max-width: 820px;
            margin: 0 auto;
        }

        /* Call to action overlaps the quote band */
        .cta {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: -90px auto 0;
            background: var(--teal-deep);
            color: #fff;
            text-align: center;
            border-radius: 16px;
            padding: 48px 24px;
            box-shadow: var(--shadow);
        }
        .cta h2 { font-family: var(--font-display); font-size: 2rem; margin: 0 0 12px; }
        .cta p { max-width: 560px; margin: 0 auto 24px; }

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
        .btn-outline { background: transparent; border: 2px solid #fff; }
        .btn-outline:hover { background: #fff; color: var(--teal-deep); }

        footer {
            background: var(--teal-deep);
            color: #fff;
            text-align: center;
            padding: 24px;
            margin-top: 80px;
        }

        /* Phones and small screens: stack everything */
        @media (max-width: 860px) {
            .statement,
            .statement-tag,
            .video-frame,
            .video-text {
                grid-column: 1 / -1;
                grid-row: auto;
                transform: none;
                margin-right: 0;
            }
            .statement { padding: 28px; }
            .video-section { margin-top: 64px; }
            .video-frame::before { top: -14px; left: -14px; }
            .video-text { margin-top: -24px; }
            .values { margin-top: 64px; padding-bottom: 0; }
            .cards { grid-template-columns: 1fr; }
            .card:nth-child(2),
            .card:nth-child(3) { transform: none; }
            .logo { height: 160px; }
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
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Make A Way Foundation logo" class="logo">
        </a>
    </div>

    <nav>
        <a href="/">Home</a>
        <a href="/mission" class="active">Mission</a>
        <a href="/history">History</a>
        <a href="/what-we-offer">What We Offer</a>
        <a href="/get-involved">Get Involved</a>
    </nav>

    <section class="page-banner">
        <h1>Our Mission</h1>
        <p>Making a way for every student to learn, feel safe, and thrive.</p>
    </section>

    <!-- Statement overlapping the banner -->
    <section class="container">
        <div class="grid-12 statement-wrap">
            <div class="statement">
                Make A Way Foundation creates sensory rooms in local schools so students
                with autism and sensory needs have a calm, supportive place to learn and grow.
            </div>
            <div class="statement-tag">
                <strong>7</strong>
                schools served with sensory rooms
            </div>
        </div>
    </section>

    <!-- Video breaking out of the grid -->
    <section class="container">
        <div class="grid-12 video-section">
            <div class="video-frame">
                <div class="video-embed">
                    <iframe
                        src="https://www.youtube.com/embed/qDem6i7Xg6M"
                        title="Make A Way Foundation video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="video-text">
                <h2>See the Difference</h2>
                <p>A sensory room gives students a place to reset, so they can return to class calm, focused, and ready to learn.</p>
            </div>
        </div>
    </section>

    <!-- Staggered value cards -->
    <section class="container values">
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
    </section>

    <!-- Slanted full-width quote -->
    <section class="quote-band">
        <blockquote>
            "Every child deserves a place where they feel understood."
            — Make A Way Foundation
        </blockquote>
    </section>

    <!-- Call to action overlapping the quote band -->
    <section class="container">
        <div class="cta">
            <h2>Help Us Make a Way</h2>
            <p>Your time, donations, and partnership bring sensory rooms to more students in our community.</p>
            <a href="/get-involved" class="btn">Get Involved</a>
            <a href="/history" class="btn btn-outline">Read Our Story</a>
        </div>
    </section>

    <footer>
        © {{ date('Y') }} Make A Way Foundation · 501(c)(3) Nonprofit
    </footer>

</body>
</html>