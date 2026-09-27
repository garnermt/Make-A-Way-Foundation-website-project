<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What We Offer | Make A Way Foundation</title>
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

        /* Intro card overlaps the banner */
        .intro-wrap {
            margin-top: -110px;
            position: relative;
            z-index: 2;
        }
        .intro {
            grid-column: 2 / 12;
            background: var(--card);
            border-left: 8px solid var(--gold);
            border-radius: 12px;
            padding: 40px;
            box-shadow: var(--shadow);
            font-family: var(--font-display);
            font-size: clamp(1.2rem, 2.4vw, 1.55rem);
            line-height: 1.45;
            text-align: center;
        }

        .section-title {
            font-family: var(--font-display);
            color: var(--teal);
            text-align: center;
            font-size: clamp(2rem, 4vw, 2.6rem);
            margin: 0 0 48px;
        }

        /* Mosaic of offerings */
        .offerings { margin-top: 120px; }
        .bento {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-auto-rows: minmax(190px, auto);
            gap: 24px;
        }
        .tile {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 28px;
            box-shadow: var(--shadow);
        }
        .tile h3 {
            font-family: var(--font-display);
            font-size: 1.45rem;
            margin: 0 0 8px;
            color: var(--teal);
        }
        .tile p { margin: 0; color: var(--ink-soft); }

        .tile-feature {
            grid-column: 1 / 8;
            grid-row: span 2;
            margin-left: -80px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 36px;
            background-size: cover;
            background-position: center;
            border: 0;
            color: #fff;
        }
        .tile-feature::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(transparent 30%, rgba(18, 59, 59, 0.9));
        }
        .tile-feature > div { position: relative; }
        .tile-feature h3 { color: #fff; font-size: 2rem; }
        .tile-feature p { color: #fff; max-width: 420px; }

        .tile-a { grid-column: 8 / 13; border-top: 6px solid var(--gold); }
        .tile-b { grid-column: 8 / 13; background: var(--teal); border: 0; }
        .tile-b h3, .tile-b p { color: #fff; }
        .tile-c {
            grid-column: 2 / 6;
            margin-top: -64px;
            position: relative;
            z-index: 2;
            background: var(--gold);
            border: 0;
        }
        .tile-c h3, .tile-c p { color: var(--ink); }
        .tile-d { grid-column: 6 / 13; border-top: 6px solid var(--coral); }

        /* Inside a sensory room: photo breaks right, list overlaps it */
        .inside { margin-top: 140px; align-items: center; }
        .inside-photo {
            grid-column: 6 / 13;
            grid-row: 1;
            margin-right: -80px;
            position: relative;
            isolation: isolate;
        }
        .inside-photo::before {
            content: "";
            position: absolute;
            top: -28px;
            right: -28px;
            width: 50%;
            height: 55%;
            background: var(--gold);
            border-radius: 12px;
            z-index: -1;
        }
        .inside-photo img {
            display: block;
            width: 100%;
            height: 520px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: var(--shadow);
        }
        .inside-list {
            grid-column: 1 / 7;
            grid-row: 1;
            position: relative;
            z-index: 2;
            background: var(--teal-deep);
            color: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: var(--shadow);
        }
        .inside-list h2 {
            font-family: var(--font-display);
            font-size: 2rem;
            margin: 0 0 24px;
        }
        .inside-list ol {
            list-style: none;
            counter-reset: feature;
            margin: 0;
            padding: 0;
        }
        .inside-list li {
            counter-increment: feature;
            display: flex;
            gap: 16px;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        .inside-list li:last-child { margin-bottom: 0; }
        .inside-list li::before {
            content: counter(feature);
            flex: 0 0 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--coral);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }
        .inside-list strong { display: block; font-size: 1.1rem; }
        .inside-list span { opacity: 0.85; }

        /* How it works: zig-zag steps */
        .how { margin-top: 140px; padding-bottom: 48px; }
        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }
        .step {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 28px;
            box-shadow: var(--shadow);
        }
        .step:nth-child(even) { transform: translateY(48px); }
        .step-number {
            font-family: var(--font-display);
            font-size: 3rem;
            line-height: 1;
            color: var(--coral);
            margin-bottom: 8px;
        }
        .step h3 {
            font-family: var(--font-display);
            color: var(--teal);
            margin: 0 0 8px;
        }
        .step p { color: var(--ink-soft); margin: 0; }

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
            .intro,
            .tile-feature,
            .tile-a,
            .tile-b,
            .tile-c,
            .tile-d,
            .inside-photo,
            .inside-list {
                grid-column: 1 / -1;
                grid-row: auto;
                margin-left: 0;
                margin-right: 0;
                margin-top: 0;
            }
            .intro { padding: 28px; }
            .offerings { margin-top: 72px; }
            .tile-feature { min-height: 320px; }
            .inside { margin-top: 72px; }
            .inside-photo img { height: 300px; }
            .inside-photo::before { top: -14px; right: -14px; }
            .inside-list { margin-top: -40px; margin-left: 16px; margin-right: 16px; }
            .how { margin-top: 72px; padding-bottom: 0; }
            .steps { grid-template-columns: 1fr; }
            .step:nth-child(even) { transform: none; }
            .quote-band { margin-top: 72px; }
            .logo { height: 160px; }
        }
    </style>
</head>
<body>

    <div class="topbar">
        <span>📞 256-434-1768</span>
        <span>
            <a href="https://www.facebook.com/foundationmakeaway" target="_blank" rel="noopener">Facebook</a>
            <a href="https://www.instagram.com/makeaway.foundation/" target="_blank" rel="noopener">Instagram</a>
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
        <a href="/history">History</a>
        <a href="/what-we-offer" class="active">What We Offer</a>
        <a href="/get-involved">Get Involved</a>
    </nav>

    <section class="page-banner">
        <h1>What We Offer</h1>
        <p>Calm, supportive spaces and resources for students, schools, and families.</p>
    </section>

    <!-- Intro card overlapping the banner -->
    <section class="container">
        <div class="grid-12 intro-wrap">
            <div class="intro">
                Every student learns differently. We give schools the spaces, tools, and support
                to help students with autism and sensory needs feel calm, safe, and ready to learn.
            </div>
        </div>
    </section>

    <!-- Mosaic of offerings -->
    <section class="container offerings">
        <h2 class="section-title">How We Help</h2>
        <div class="bento">
            <div class="tile tile-feature" style="background-image: url('{{ asset('images/offer-photo.jpg') }}');">
                <div>
                    <h3>Sensory Room Design &amp; Setup</h3>
                    <p>We plan and furnish sensory rooms built around each school's space and the students who use it.</p>
                </div>
            </div>
            <div class="tile tile-a">
                <h3>Calming Equipment</h3>
                <p>Soft seating, weighted items, fidget tools, and adjustable lighting that help students regulate.</p>
            </div>
            <div class="tile tile-b">
                <h3>Staff Support</h3>
                <p>Guidance for teachers and staff on how to use the room to support students day to day.</p>
            </div>
            <div class="tile tile-c">
                <h3>Family Resources</h3>
                <p>Information and encouragement for families navigating sensory needs.</p>
            </div>
            <div class="tile tile-d">
                <h3>Community Awareness</h3>
                <p>Events and outreach that build understanding of autism and sensory differences across our community.</p>
            </div>
        </div>
    </section>

    <!-- Inside a sensory room -->
    <section class="container">
        <div class="grid-12 inside">
            <div class="inside-photo">
                <img src="{{ asset('images/offer-photo-2.jpg') }}" alt="Inside a sensory room">
            </div>
            <div class="inside-list">
                <h2>Inside a Sensory Room</h2>
                <ol>
                    <li>
                        <div>
                            <strong>Soft, Adjustable Lighting</strong>
                            <span>Gentle light that can be dimmed to reduce overwhelm.</span>
                        </div>
                    </li>
                    <li>
                        <div>
                            <strong>Textures to Explore</strong>
                            <span>Tactile items that help students focus and self-soothe.</span>
                        </div>
                    </li>
                    <li>
                        <div>
                            <strong>Room to Move</strong>
                            <span>Space and equipment for movement that helps release energy.</span>
                        </div>
                    </li>
                    <li>
                        <div>
                            <strong>A Quiet Corner</strong>
                            <span>A calm place to reset before returning to class.</span>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="container how">
        <h2 class="section-title">How It Works</h2>
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Reach Out</h3>
                <p>A school, teacher, or family contacts us about a need.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Plan Together</h3>
                <p>We look at the space and the students' needs to shape the room.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Build the Room</h3>
                <p>Volunteers and partners help bring the sensory room to life.</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Keep Supporting</h3>
                <p>We check in and help the room grow as students' needs change.</p>
            </div>
        </div>
    </section>

    <!-- Slanted quote band -->
    <section class="quote-band">
        <blockquote>
            "A calm space isn't a break from learning. It's what makes learning possible."
        </blockquote>
    </section>

    <!-- Call to action -->
    <section class="container">
        <div class="cta">
            <h2>Bring a Sensory Room to Your School</h2>
            <p>Whether you're a teacher, parent, or community partner, we'd love to hear from you.</p>
            <a href="/get-involved" class="btn">Get Involved</a>
            <a href="/mission" class="btn btn-outline">Our Mission</a>
        </div>
    </section>

    <footer>
        © {{ date('Y') }} Make A Way Foundation · 501(c)(3) Nonprofit
    </footer>

</body>
</html>