<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our History | Make A Way Foundation</title>
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

        /* Banner */
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

        /* 12-column grid */
        .grid-12 {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        /* Story card overlaps the banner, photo breaks out to the right */
        .story-wrap {
            margin-top: -110px;
            position: relative;
            z-index: 2;
            align-items: center;
        }
        .story-card {
            grid-column: 1 / 8;
            grid-row: 1;
            position: relative;
            z-index: 2;
            background: var(--card);
            border-left: 8px solid var(--gold);
            border-radius: 12px;
            padding: 40px;
            box-shadow: var(--shadow);
        }
        .story-card h2 {
            font-family: var(--font-display);
            color: var(--teal);
            font-size: 2rem;
            margin: 0 0 16px;
        }
        .story-card p { color: var(--ink-soft); margin: 0 0 14px; }
        .story-card p:last-child { margin-bottom: 0; }

        .story-photo {
            grid-column: 7 / 13;
            grid-row: 1;
            position: relative;
            margin-right: -80px;
            margin-top: 140px;
            isolation: isolate;
        }
        .story-photo img {
            display: block;
            width: 100%;
            height: 420px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: var(--shadow);
        }
        .story-photo::before {
            content: "";
            position: absolute;
            top: -28px;
            right: -28px;
            width: 55%;
            height: 60%;
            background: var(--gold);
            border-radius: 12px;
            z-index: -1;
        }

        /* Timeline */
        .timeline-section { margin-top: 120px; }
        .section-title {
            font-family: var(--font-display);
            color: var(--teal);
            text-align: center;
            font-size: clamp(2rem, 4vw, 2.6rem);
            margin: 0 0 56px;
        }
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }
        .timeline::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 4px;
            background: var(--gold);
            border-radius: 4px;
            transform: translateX(-50%);
        }
        .milestone {
            position: relative;
            width: 50%;
            padding: 0 48px 56px 0;
        }
        .milestone:nth-child(even) {
            margin-left: 50%;
            padding: 0 0 56px 48px;
        }
        .milestone::after {
            content: "";
            position: absolute;
            top: 30px;
            right: -13px;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: var(--coral);
            border: 5px solid var(--bg);
        }
        .milestone:nth-child(even)::after {
            right: auto;
            left: -13px;
        }
        .milestone-card {
            background: var(--card);
            border: 1px solid var(--line);
            border-top: 6px solid var(--teal);
            border-radius: 12px;
            padding: 28px;
            box-shadow: var(--shadow);
        }
        .milestone:nth-child(even) .milestone-card { border-top-color: var(--coral); }
        .milestone-label {
            display: inline-block;
            background: var(--teal);
            color: #fff;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 4px 14px;
            border-radius: 999px;
            margin-bottom: 12px;
        }
        .milestone-card h3 {
            font-family: var(--font-display);
            color: var(--teal);
            font-size: 1.4rem;
            margin: 0 0 8px;
        }
        .milestone-card p { color: var(--ink-soft); margin: 0; }

        /* Photo pair: large photo breaks left, small photo overlaps it */
        .moments { margin-top: 64px; }
        .photo-duo { align-items: start; }
        .duo-large {
            grid-column: 1 / 8;
            grid-row: 1;
            margin-left: -80px;
            position: relative;
            isolation: isolate;
        }
        .duo-large::before {
            content: "";
            position: absolute;
            top: -28px;
            left: -28px;
            width: 50%;
            height: 55%;
            background: var(--coral);
            border-radius: 12px;
            z-index: -1;
        }
        .duo-large img {
            display: block;
            width: 100%;
            height: 440px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: var(--shadow);
        }
        .duo-small {
            grid-column: 6 / 11;
            grid-row: 1;
            margin-top: 240px;
            position: relative;
            z-index: 2;
        }
        .duo-small img {
            display: block;
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 12px;
            border: 8px solid var(--bg);
            box-shadow: var(--shadow);
        }
        .duo-caption {
            grid-column: 9 / 13;
            grid-row: 1;
            align-self: start;
            position: relative;
            z-index: 3;
            background: var(--teal);
            color: #fff;
            border-radius: 12px;
            padding: 28px;
            box-shadow: var(--shadow);
        }
        .duo-caption h3 {
            font-family: var(--font-display);
            font-size: 1.5rem;
            margin: 0 0 8px;
        }
        .duo-caption p { margin: 0; }

        /* Slanted quote band */
        .quote-band {
            background: var(--coral);
            color: #fff;
            text-align: center;
            padding: 110px 24px 150px;
            margin-top: 120px;
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

        /* Phones and small screens */
        @media (max-width: 860px) {
            .story-card,
            .story-photo,
            .duo-large,
            .duo-small,
            .duo-caption {
                grid-column: 1 / -1;
                grid-row: auto;
                margin-left: 0;
                margin-right: 0;
                margin-top: 0;
            }
            .story-card { padding: 28px; }
            .story-photo img { height: 280px; }
            .story-photo::before { top: -14px; right: -14px; }

            .timeline-section { margin-top: 72px; }
            .timeline::before { left: 13px; transform: none; }
            .milestone,
            .milestone:nth-child(even) {
                width: 100%;
                margin-left: 0;
                padding: 0 0 40px 48px;
            }
            .milestone::after,
            .milestone:nth-child(even)::after {
                left: 0;
                right: auto;
            }

            .duo-large img { height: 280px; }
            .duo-large::before { top: -14px; left: -14px; }
            .duo-small { margin: -48px 0 0 40px; }
            .duo-small img { height: 220px; }
            .quote-band { margin-top: 72px; }
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
        <a href="/mission">Mission</a>
        <a href="/history" class="active">History</a>
        <a href="/what-we-offer">What We Offer</a>
        <a href="/get-involved">Get Involved</a>
    </nav>

    <section class="page-banner">
        <h1>Our History</h1>
        <p>How one family's journey became a way forward for students across our community.</p>
    </section>

    <!-- Story card overlapping the banner, photo breaking out -->
    <section class="container">
        <div class="grid-12 story-wrap">
            <div class="story-card">
                <h2>Where It Started</h2>
                <p>Make A Way Foundation began with a family who saw firsthand how hard a typical classroom can be for a child with autism and sensory needs.</p>
                <p>They saw how much a calm, sensory-friendly space could help, and wanted every student who needed one to have it.</p>
                <p>What started as one family's mission has grown into a community effort to bring sensory rooms to local schools.</p>
            </div>
            <div class="story-photo">
                <img src="{{ asset('images/history-photo.jpg') }}" alt="Make A Way Foundation story">
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="container timeline-section">
        <h2 class="section-title">Our Journey</h2>

        <div class="timeline">
            <div class="milestone">
                <div class="milestone-card">
                    <span class="milestone-label">The Beginning</span>
                    <h3>A Family's Why</h3>
                    <p>A family's experience with autism sparked the idea that students deserve spaces built for how they learn.</p>
                </div>
            </div>

            <div class="milestone">
                <div class="milestone-card">
                    <span class="milestone-label">First Step</span>
                    <h3>The First Sensory Room</h3>
                    <p>The first sensory room opened in a local school, giving students a place to reset and return to learning.</p>
                </div>
            </div>

            <div class="milestone">
                <div class="milestone-card">
                    <span class="milestone-label">Growing</span>
                    <h3>More Schools, More Students</h3>
                    <p>As schools saw the difference, more asked for sensory rooms, and the work expanded across the community.</p>
                </div>
            </div>

            <div class="milestone">
                <div class="milestone-card">
                    <span class="milestone-label">Official</span>
                    <h3>Becoming a 501(c)(3)</h3>
                    <p>The foundation became a registered nonprofit, allowing it to accept tax-deductible donations and reach more students.</p>
                </div>
            </div>

            <div class="milestone">
                <div class="milestone-card">
                    <span class="milestone-label">Today</span>
                    <h3>Looking Ahead</h3>
                    <p>With the help of volunteers, donors, and school partners, we're working to make a way for even more students.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo pair -->
    <section class="container moments">
        <h2 class="section-title">Moments Along the Way</h2>
        <div class="grid-12 photo-duo">
            <div class="duo-large">
                <img src="{{ asset('images/history-photo-2.jpg') }}" alt="A Make A Way Foundation moment">
            </div>
            <div class="duo-small">
                <img src="{{ asset('images/history-photo-3.jpg') }}" alt="Another Make A Way Foundation moment">
            </div>
            <div class="duo-caption">
                <h3>Built Together</h3>
                <p>Every room is the work of families, teachers, and volunteers who believe students deserve a calm place to learn.</p>
            </div>
        </div>
    </section>

    <!-- Slanted quote band -->
    <section class="quote-band">
        <blockquote>
            "When you make a way for one child, you make a way for every child who comes after."
        </blockquote>
    </section>

    <!-- Call to action -->
    <section class="container">
        <div class="cta">
            <h2>Be Part of What's Next</h2>
            <p>Every sensory room starts with people who care. Help us write the next chapter.</p>
            <a href="/get-involved" class="btn">Get Involved</a>
            <a href="/mission" class="btn btn-outline">Our Mission</a>
        </div>
    </section>

    <footer>
        © {{ date('Y') }} Make A Way Foundation · 501(c)(3) Nonprofit
    </footer>

</body>
</html>