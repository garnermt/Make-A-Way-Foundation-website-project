<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Make-A-Way Foundation</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700&family=Public+Sans:wght@400;600;700&display=swap" rel="stylesheet">
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

  body { margin: 0; }

  .maw-page * { box-sizing: border-box; }

  .maw-page {
    max-width: 1120px;
    margin: 0 auto;
    background: var(--bg);
    color: var(--ink);
    font-family: var(--font-body);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
  }

  .maw-page img { max-width: 100%; }
  .maw-page a { color: inherit; }

  @media (prefers-reduced-motion: reduce) {
    .maw-page * { animation: none !important; transition: none !important; }
  }

  .maw-page a:focus-visible {
    outline: 3px solid var(--coral);
    outline-offset: 3px;
  }

  .maw-page .top-bar {
    background: var(--teal-deep);
    color: #f1ece0;
    font-size: 0.85rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    padding: 8px 20px;
  }

  .maw-page .top-bar span { font-weight: 600; white-space: nowrap; }
  .maw-page .top-bar div { display: flex; gap: 18px; flex-wrap: wrap; }
  .maw-page .top-bar a { text-decoration: none; color: #f1ece0; opacity: 0.85; }
  .maw-page .top-bar a:hover { opacity: 1; text-decoration: underline; }

  .maw-page header {
    background: var(--bg);
    display: flex;
    justify-content: center;
    padding: 18px 20px;
    border-bottom: 1px solid var(--line);
  }

  .maw-page header img { height: 300px; width: auto; }

  @media (max-width: 1000px) {
    .maw-page header img { height: 150px; }
  }

  .maw-page .nav-toggle-checkbox { display: none; }

  .maw-page .nav-toggle-label {
    display: none;
    cursor: pointer;
    background: none;
    border: 2px solid var(--teal);
    border-radius: 8px;
    padding: 8px 10px;
    margin: 10px auto;
    width: max-content;
  }

  .maw-page .nav-toggle-label span,
  .maw-page .nav-toggle-label span::before,
  .maw-page .nav-toggle-label span::after {
    display: block;
    width: 20px;
    height: 2px;
    background: var(--teal-deep);
    position: relative;
  }
  .maw-page .nav-toggle-label span::before { content: ""; position: absolute; top: -6px; width: 20px; height: 2px; background: var(--teal-deep); }
  .maw-page .nav-toggle-label span::after { content: ""; position: absolute; top: 6px; width: 20px; height: 2px; background: var(--teal-deep); }

  .maw-page nav {
    background: var(--bg);
    border-bottom: 1px solid var(--line);
    position: sticky;
    top: 0;
    z-index: 50;
    display: flex;
    justify-content: center;
  }

  .maw-page nav a {
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    color: var(--ink);
    padding: 16px 18px;
    border-bottom: 2px solid transparent;
    transition: border-color 0.2s ease, color 0.2s ease;
  }

  .maw-page nav a:hover { color: var(--teal); border-color: var(--gold); }

  @media (max-width: 700px) {
    .maw-page .nav-toggle-label { display: block; }
    .maw-page nav {
      display: none;
      flex-direction: column;
      align-items: stretch;
      text-align: center;
    }
    .maw-page .nav-toggle-checkbox:checked ~ nav { display: flex; }
    .maw-page nav a { padding: 14px 20px; border-bottom: 1px solid var(--line); }
  }

  .maw-page .hero {
    position: relative;
    overflow: hidden;
    text-align: center;
    padding: clamp(56px, 9vw, 100px) 24px;
    background:
      radial-gradient(ellipse 60% 80% at 50% 100%, rgba(226, 163, 61, 0.25), transparent 70%),
      linear-gradient(180deg, var(--teal-deep), var(--teal));
    color: #fdf9f0;
  }

  .maw-page .hero::before {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    width: min(360px, 70%);
    height: 90%;
    transform: translateX(-50%);
    background: linear-gradient(180deg, rgba(246, 217, 138, 0.18), transparent 75%);
    border-radius: 50% 50% 0 0 / 30% 30% 0 0;
    pointer-events: none;
  }

  .maw-page .hero h1 {
    position: relative;
    font-family: var(--font-display);
    font-weight: 700;
    font-size: clamp(2.2rem, 6vw, 3.6rem);
    margin: 0 0 16px;
    color: #fff;
    line-height: 1.1;
  }

  .maw-page .hero p {
    position: relative;
    font-size: clamp(1rem, 2.2vw, 1.2rem);
    color: #dcebe6;
    max-width: 46ch;
    margin: 0 auto;
  }

  .maw-page .featured {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    padding: clamp(28px, 5vw, 40px) 20px;
  }

  @media (max-width: 700px) {
    .maw-page .featured { grid-template-columns: 1fr; }
  }

  .maw-page .featured a {
    display: block;
    background: var(--card);
    border: 1px solid var(--line);
    border-radius: 14px;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    font-weight: 700;
    color: var(--teal-deep);
    transition: box-shadow 0.2s ease, transform 0.2s ease, border-color 0.2s ease;
  }

  .maw-page .featured a:hover {
    transform: translateY(-3px);
    box-shadow: 0 16px 30px -18px rgba(18, 59, 59, 0.35);
    border-color: var(--gold);
  }

  .maw-page main {
    padding: clamp(16px, 4vw, 24px) 20px clamp(48px, 8vw, 72px);
    max-width: 760px;
    margin: 0 auto;
    text-align: center;
  }

  .maw-page main h2 {
    font-family: var(--font-display);
    font-weight: 600;
    font-size: clamp(1.6rem, 4vw, 2.1rem);
    color: var(--teal-deep);
    margin: 48px 0 14px;
    scroll-margin-top: 70px;
  }

  .maw-page main h2:first-child { margin-top: 8px; }

  .maw-page main p {
    color: var(--ink-soft);
    font-size: clamp(1rem, 2vw, 1.05rem);
    margin: 0;
  }

  .maw-page .video-wrap {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 9;
    margin: 24px 0;
    border-radius: 14px;
    overflow: hidden;
  }

  .maw-page .video-wrap iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
  }

  .maw-page footer {
    text-align: center;
    padding: 28px 20px;
    color: var(--ink-soft);
    font-size: 0.9rem;
    border-top: 1px solid var(--line);
  }

  .maw-page footer p { margin: 6px 0; }
  .maw-page footer a { text-decoration: none; font-weight: 600; color: var(--teal); }
  .maw-page footer a:hover { text-decoration: underline; }
</style>
</head>
<body>

<div class="maw-page">
    <div class="top-bar">
        <span>📞 256-434-1768</span>
        <div>
            <a href="FACEBOOK-LINK-HERE" target="_blank">Facebook</a>
            <a href="INSTAGRAM-LINK-HERE" target="_blank">Instagram</a>
        </div>
    </div>

    <header>
        <img src="https://mgarner6-lucfq.wordpress.com/wp-content/uploads/2026/08/logo.png" alt="Make-A-Way Foundation Logo">
    </header>

    <input type="checkbox" id="nav-toggle" class="nav-toggle-checkbox">
    <label for="nav-toggle" class="nav-toggle-label"><span></span></label>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="#board">Board</a>
    </nav>

    <div class="hero" id="home">
        <h1>Opening Doors.</h1>
        <p>For individuals with special needs and their families in Athens and Limestone County.</p>
    </div>

    <div class="featured">
        <a href="#history">Our History</a>
        <a href="#about">Our Mission</a>
        <a href="#offer">What We Offer</a>
        <a href="#contact">Get Involved</a>
    </div>

    <main>
        <h2 id="about">About Foundation</h2>
        <p>Make A Way Foundation is a 501(c)(3) nonprofit serving Athens and Limestone County. We partner with schools, churches, and community organizations to create inclusive environments for individuals with special needs.</p>

        <div class="video-wrap">
            <!-- Paste your video iframe here -->
        </div>

        <h2 id="offer">What We Offer</h2>
        <p>Describe your services, products, or content here.</p>

        <h2 id="contact">Contact Us</h2>
        <p>
            Email: <a href="mailto:info@foundationmakeaway.org">info@foundationmakeaway.org</a><br>
            Phone: <a href="tel:+12564341762">(256) 434-1762</a><br>
            PO Box 1768<br>
            Athens, AL 35612
        </p>
    </main>

    <footer>
        <p>© 2026 Make-A-Way Foundation. All rights reserved.</p>
        <p><a href="FACEBOOK-LINK-HERE" target="_blank">Facebook</a> | <a href="INSTAGRAM-LINK-HERE" target="_blank">Instagram</a></p>
    </footer>
</div>

</body>
</html>
