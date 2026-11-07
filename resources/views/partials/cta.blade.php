<!-- Call to action (shared by every page) -->
<style>
    .site-cta {
        background-color: #c4502f;
        color: white;
        text-align: center;
        padding: 70px 20px;
    }

    .site-cta-card {
        max-width: 800px;
        margin: 0 auto;
    }

    .site-cta h2 {
        font-family: "Fraunces", Georgia, serif;
        font-size: 40px;
        line-height: 1.2;
        color: white;
        margin: 0 0 15px 0;
    }

    .site-cta p {
        font-size: 19px;
        max-width: 600px;
        margin: 0 auto 30px auto;
    }

    .site-cta-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .site-cta-btn {
        display: inline-block;
        padding: 14px 32px;
        border-radius: 30px;
        font-size: 17px;
        font-weight: bold;
        text-decoration: none;
    }

    .site-cta-btn i {
        margin-right: 6px;
    }

    .site-cta-btn.primary {
        background-color: white;
        color: #c4502f;
    }

    .site-cta-btn.secondary {
        background-color: #123b3b;
        color: white;
    }

    .site-cta-btn:hover {
        background-color: #e2a33d;
        color: #23241f;
    }

    @media (max-width: 800px) {
        .site-cta {
            padding: 50px 20px;
        }

        .site-cta h2 {
            font-size: 30px;
        }

        .site-cta-buttons {
            flex-direction: column;
            align-items: center;
        }

        .site-cta-btn {
            width: 100%;
            max-width: 260px;
            box-sizing: border-box;
        }
    }
</style>

<div class="site-cta">
    <div class="site-cta-card">
        <h2>Help Us Make a Way</h2>
        <p>Your gift or your time helps children, teens, and adults with special needs in Athens and Limestone County.</p>
        <div class="site-cta-buttons">
            <a href="/donate" class="site-cta-btn primary"><i class="fa-solid fa-heart"></i> Donate</a>
            <a href="/get-involved" class="site-cta-btn secondary"><i class="fa-solid fa-hand-holding-heart"></i> Get Involved</a>
        </div>
    </div>
</div>