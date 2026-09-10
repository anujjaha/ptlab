<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Why Community Matters | BrahminParivar | lets Connect and Create Strong Bonding</title>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet">

<style>

:root {
    --orange: #ff5a1f;
    --orange2: #ff7a00;
    --saffron: #ffb000;
    --yellow: #ffd600;
    --pink: #ff3d81;
    --purple: #7c3aed;
    --blue: #2563eb;

    --dark: #171717;
    --text: #5f6368;

    --white: #ffffff;
    --soft: #fff7ed;

    --border: #ececec;

    --shadow:
        0 8px 25px rgba(0,0,0,.07);

    --shadow-hover:
        0 14px 35px rgba(255,90,31,.18);
}


/* =========================================
   BASE
========================================= */

* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    margin: 0;
    padding-bottom: 66px;

    background: #fff;

    color: var(--text);

    font-family:
        Inter,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        sans-serif;
}

a {
    text-decoration: none;
}


/* =========================================
   HERO
========================================= */

.hero {
    position: relative;

    overflow: hidden;

    padding: 50px 15px 44px;

    text-align: center;

    background:

        radial-gradient(
            circle at 8% 15%,
            rgba(255,90,31,.18),
            transparent 25%
        ),

        radial-gradient(
            circle at 92% 10%,
            rgba(255,214,0,.22),
            transparent 25%
        ),

        radial-gradient(
            circle at 50% 100%,
            rgba(124,58,237,.08),
            transparent 30%
        ),

        #fff;
}


.hero::before {

    content: "";

    position: absolute;

    width: 250px;
    height: 250px;

    right: -130px;
    bottom: -130px;

    border-radius: 50%;

    background:
        linear-gradient(
            135deg,
            rgba(255,90,31,.08),
            rgba(255,214,0,.08)
        );
}


.hero-badge {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 7px 15px;

    border-radius: 30px;

    background:
        linear-gradient(
            135deg,
            #fff1e7,
            #fff8d9
        );

    border: 1px solid #ffd8bd;

    color: #e7470b;

    font-size: 11px;

    font-weight: 850;

    letter-spacing: .7px;

    text-transform: uppercase;
}


.hero h1 {

    position: relative;

    max-width: 900px;

    margin: 17px auto 13px;

    color: var(--dark);

    font-size:
        clamp(32px, 5vw, 58px);

    line-height: 1.06;

    font-weight: 900;

    letter-spacing: -2px;
}


.hero h1 span {

    background:

        linear-gradient(
            90deg,
            #ff3d00,
            #ff7a00,
            #ffb000
        );

    -webkit-background-clip: text;

    background-clip: text;

    color: transparent;
}


.hero-text {

    max-width: 730px;

    margin: auto;

    color: #626262;

    font-size: 15px;

    line-height: 1.75;
}


.hero-buttons {

    display: flex;

    justify-content: center;

    gap: 9px;

    flex-wrap: wrap;

    margin-top: 22px;
}


.btn-main {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 11px 20px;

    border-radius: 30px;

    color: #fff;

    background:
        linear-gradient(
            135deg,
            #ff3d00,
            #ff7a00
        );

    font-size: 13px;

    font-weight: 800;

    box-shadow:
        0 8px 20px rgba(255,90,31,.22);

    transition: .2s;
}


.btn-main:hover {

    color: #fff;

    transform: translateY(-2px);

    box-shadow:
        0 12px 27px rgba(255,90,31,.3);
}


.btn-light {

    display: inline-flex;

    align-items: center;

    padding: 10px 18px;

    border-radius: 30px;

    color: #333;

    background: #fff;

    border: 1px solid #e5e5e5;

    font-size: 13px;

    font-weight: 750;
}


/* =========================================
   WHY COMMUNITY
========================================= */

.why-section {

    padding: 48px 15px 52px;

    background:
        linear-gradient(
            180deg,
            #fff7ed 0%,
            #ffffff 100%
        );
}


.section-label {

    color: #ef4d10;

    font-size: 11px;

    font-weight: 900;

    text-transform: uppercase;

    letter-spacing: 1.2px;

    text-align: center;
}


.section-title {

    max-width: 800px;

    margin: 7px auto 12px;

    text-align: center;

    color: var(--dark);

    font-size:
        clamp(26px, 4vw, 40px);

    line-height: 1.15;

    font-weight: 900;
}


.section-title span {

    color: var(--orange);
}


.section-description {

    max-width: 720px;

    margin: auto;

    text-align: center;

    font-size: 14px;

    line-height: 1.8;

    color: var(--text);
}


/* =========================================
   WHY CARDS - HORIZONTAL
========================================= */

.why-grid {

    margin-top: 30px;
}


.why-card {

    position: relative;

    display: flex;

    align-items: flex-start;

    gap: 15px;

    height: 100%;

    padding: 18px;

    border-radius: 17px;

    background: #fff;

    border: 1px solid var(--border);

    box-shadow: var(--shadow);

    overflow: hidden;

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        border-color .25s ease;
}


.why-card::before {

    content: "";

    position: absolute;

    left: 0;
    top: 0;

    width: 4px;
    height: 100%;

    background:
        linear-gradient(
            180deg,
            #ff3d00,
            #ffb000
        );

    opacity: 0;

    transition: .25s;
}


.why-card:hover {

    transform: translateY(-4px);

    border-color: #ffc18e;

    box-shadow: var(--shadow-hover);
}


.why-card:hover::before {

    opacity: 1;
}


.why-icon {

    flex: 0 0 49px;

    width: 49px;
    height: 49px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 14px;

    color: #fff;

    background:
        linear-gradient(
            135deg,
            #ff3d00,
            #ff9500
        );

    font-size: 21px;

    box-shadow:
        0 7px 17px rgba(255,90,31,.2);

    transition: .25s;
}


.why-card:nth-child(2)
.why-icon {

    background:
        linear-gradient(
            135deg,
            #ff3d81,
            #ff7a00
        );
}


.why-card:nth-child(3)
.why-icon {

    background:
        linear-gradient(
            135deg,
            #7c3aed,
            #2563eb
        );
}


.why-card:nth-child(4)
.why-icon {

    background:
        linear-gradient(
            135deg,
            #00a884,
            #16a34a
        );
}


.why-card:nth-child(5)
.why-icon {

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #06b6d4
        );
}


.why-card:nth-child(6)
.why-icon {

    background:
        linear-gradient(
            135deg,
            #dc2626,
            #f97316
        );
}


.why-content {

    min-width: 0;
}


.why-card h3 {

    margin: 1px 0 5px;

    color: var(--dark);

    font-size: 16px;

    line-height: 1.3;

    font-weight: 850;
}


.why-card p {

    margin: 0;

    color: var(--text);

    font-size: 12.5px;

    line-height: 1.65;
}


/* =========================================
   HEART MESSAGE
========================================= */

.heart-section {

    padding: 45px 15px;

    text-align: center;

    background:
        linear-gradient(
            135deg,
            #fff0eb,
            #fff9e6
        );
}


.heart-icon {

    width: 55px;
    height: 55px;

    display: flex;

    align-items: center;
    justify-content: center;

    margin: auto;

    border-radius: 50%;

    color: #fff;

    background:
        linear-gradient(
            135deg,
            #ff1744,
            #ff6d00
        );

    font-size: 23px;

    box-shadow:
        0 8px 24px rgba(255,23,68,.2);

    animation:
        heartPulse 2.3s infinite;
}


@keyframes heartPulse {

    0%,100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.07);
    }
}


.heart-section h2 {

    max-width: 850px;

    margin: 15px auto 12px;

    color: var(--dark);

    font-size:
        clamp(23px, 4vw, 36px);

    line-height: 1.3;

    font-weight: 900;
}


.heart-section h2 span {

    color: #ef3f0b;
}


.heart-section p {

    max-width: 750px;

    margin: auto;

    font-size: 14px;

    line-height: 1.8;
}


.quote {

    margin-top: 14px;

    color: #e7470b;

    font-size: 13px;

    font-weight: 850;
}


/* =========================================
   FEATURES
========================================= */

.features-section {

    padding: 50px 15px;

    background: #fff;
}


.feature-heading {

    margin-bottom: 27px;

    text-align: center;
}


.feature-heading h2 {

    margin: 7px 0;

    color: var(--dark);

    font-size:
        clamp(26px, 4vw, 38px);

    font-weight: 900;
}


.feature-heading p {

    max-width: 650px;

    margin: auto;

    font-size: 13px;

    color: var(--text);
}


/* =========================================
   FEATURE CARD
========================================= */

.feature-card {

    position: relative;

    display: flex;

    align-items: flex-start;

    gap: 14px;

    min-height: 105px;

    padding: 17px;

    overflow: hidden;

    border-radius: 17px;

    background: #fff;

    border: 1px solid #e9e9e9;

    box-shadow:
        0 6px 20px rgba(0,0,0,.05);

    cursor: pointer;

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        border-color .25s ease;
}


.feature-card:hover {

    transform: translateY(-4px);

    border-color: #ffb16e;

    box-shadow:
        0 14px 32px rgba(255,90,31,.13);
}


.feature-card.active {

    border-color: #ff6a1a;

    box-shadow:
        0 0 0 3px rgba(255,106,26,.1),
        0 15px 35px rgba(255,90,31,.16);

    background:
        linear-gradient(
            135deg,
            #fff,
            #fff8ef
        );
}


.feature-icon {

    flex: 0 0 46px;

    width: 46px;
    height: 46px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 13px;

    color: #ff5a00;

    background:
        linear-gradient(
            135deg,
            #fff1df,
            #fff8cc
        );

    font-size: 20px;

    transition: .25s;
}


.feature-card.active
.feature-icon {

    color: #fff;

    background:
        linear-gradient(
            135deg,
            #ff3d00,
            #ffb000
        );

    transform: scale(1.08);

    box-shadow:
        0 7px 18px rgba(255,90,31,.25);
}


.feature-content {

    flex: 1;
}


.feature-content h3 {

    margin: 1px 0 5px;

    color: var(--dark);

    font-size: 15px;

    line-height: 1.3;

    font-weight: 850;
}


.feature-content p {

    margin: 0;

    color: var(--text);

    font-size: 12px;

    line-height: 1.55;
}


.feature-extra {

    max-height: 0;

    overflow: hidden;

    opacity: 0;

    margin-top: 0;

    color: #e7470b;

    font-size: 11px;

    line-height: 1.55;

    transition:
        max-height .35s ease,
        opacity .25s ease,
        margin .25s ease;
}


.feature-card.active
.feature-extra {

    max-height: 100px;

    opacity: 1;

    margin-top: 8px;
}


.feature-read {

    display: inline-flex;

    align-items: center;

    gap: 4px;

    margin-top: 7px;

    color: #f45113;

    font-size: 10px;

    font-weight: 850;
}


.feature-card.active
.feature-read {

    color: #c2410c;
}


/* =========================================
   VALUES
========================================= */

.values-section {

    padding: 45px 15px;

    background: #fff7ed;
}


.value-card {

    height: 100%;

    padding: 18px 10px;

    text-align: center;

    background: #fff;

    border: 1px solid #f0dfca;

    border-radius: 15px;

    transition: .2s;
}


.value-card:hover {

    transform: translateY(-4px);

    box-shadow:
        0 12px 28px rgba(255,90,31,.12);
}


.value-card i {

    color: #ff6900;

    font-size: 21px;
}


.value-card h4 {

    margin: 7px 0 2px;

    color: var(--dark);

    font-size: 13px;

    font-weight: 850;
}


.value-card p {

    margin: 0;

    color: #777;

    font-size: 10px;
}


/* =========================================
   CTA
========================================= */

.cta-section {

    padding: 42px 15px 50px;
}


.cta {

    position: relative;

    overflow: hidden;

    padding: 42px 20px;

    text-align: center;

    color: #fff;

    border-radius: 21px;

    background:
        linear-gradient(
            135deg,
            #e11d48,
            #ff4d00,
            #ff9d00
        );

    box-shadow:
        0 16px 40px rgba(255,90,31,.2);
}


.cta h2 {

    margin: 10px 0;

    color: #fff;

    font-size:
        clamp(26px, 4vw, 38px);

    font-weight: 900;
}


.cta p {

    max-width: 680px;

    margin: auto auto 21px;

    color: rgba(255,255,255,.9);

    font-size: 13px;

    line-height: 1.7;
}


.join-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 11px 22px;

    border-radius: 30px;

    color: #e7470b;

    background: #fff;

    font-size: 13px;

    font-weight: 850;

    transition: .2s;
}


.join-button:hover {

    color: #c2410c;

    transform: translateY(-2px);

    box-shadow:
        0 8px 25px rgba(0,0,0,.12);
}


.disclaimer {

    max-width: 700px;

    margin: 16px auto 0;

    padding-top: 12px;

    border-top:
        1px solid rgba(255,255,255,.2);

    color: rgba(255,255,255,.65);

    font-size: 9.5px;

    line-height: 1.5;
}

/* =========================
   FIXED BOTTOM MARQUEE
========================= */

.stats-marquee {
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;

    height: 68px;

    z-index: 9999;

    overflow: hidden;

    background: #397f0d;
    border-top: 3px solid #ff6b1a;

    display: flex;
    align-items: center;

    box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.15);
}

.stats-track {
    display: flex;
    flex-shrink: 0;

    width: max-content;

    will-change: transform;

    animation: statsMarquee 200s linear infinite;
}

.stat-item {
    flex: 0 0 auto;

    min-width: 150px;

    padding: 0 30px;

    text-align: center;

    border-right: 1px solid rgba(255, 255, 255, 0.18);

    white-space: nowrap;
}

.stat-item strong {
    display: block;

    color: #fff;

    font-size: 20px;
    line-height: 1.1;
    font-weight: 800;
}

.stat-item span {
    display: block;

    margin-top: 5px;

    color: rgba(255,255,255,.7);

    font-size: 11px;
    font-weight: 600;
}


/* Continuous movement */
@keyframes statsMarquee {
    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(-50%);
    }
}


/* Mobile */
@media (max-width: 576px) {

    .stats-marquee {
        height: 60px;
    }

    .stat-item {
        min-width: 125px;
        padding: 0 20px;
    }

    .stat-item strong {
        font-size: 18px;
    }

    .stat-item span {
        font-size: 10px;
    }

    .stats-track {
        animation-duration: 22s;
    }
}



/* =========================================
   MOBILE
========================================= */

@media (max-width: 767px) {

    body {
        padding-bottom: 57px;
    }


    .hero {

        padding: 38px 15px 34px;
    }


    .hero h1 {

        font-size: 31px;

        letter-spacing: -1px;
    }


    .hero-text {

        font-size: 13px;
    }


    .why-section,
    .features-section {

        padding: 38px 15px;
    }


    .why-card {

        padding: 15px;

        gap: 12px;
    }


    .why-icon {

        flex-basis: 43px;

        width: 43px;
        height: 43px;

        font-size: 18px;
    }


    .why-card h3 {

        font-size: 15px;
    }


    .why-card p {

        font-size: 11.5px;
    }


    .feature-card {

        min-height: 92px;

        padding: 14px;
    }


    .feature-icon {

        flex-basis: 42px;

        width: 42px;
        height: 42px;

        font-size: 18px;
    }


    .feature-content h3 {

        font-size: 14px;
    }


    .feature-content p {

        font-size: 11px;
    }


    .heart-section {

        padding: 37px 15px;
    }


    .heart-section h2 {

        font-size: 23px;
    }


    .cta-section {

        padding: 32px 12px 40px;
    }


    .cta {

        padding: 34px 17px;

        border-radius: 17px;
    }


    .bottom-stats {

        height: 57px;
    }


    .bottom-item {

        min-width: 145px;

        padding: 0 15px;
    }


    .bottom-number {

        font-size: 13px;
    }


    .bottom-label {

        font-size: 7px;
    }

}

</style>
</head>


<body>


<!-- =====================================================
     HERO
====================================================== -->

<section class="hero">

    <div class="container">

        <div class="hero-badge">

            <i class="bi bi-people-fill"></i>

            Nagar Brahmin Community

        </div>


        <h1>

            Why Do We Need a
            <br>

            <span>Strong Community?</span>

        </h1>


        <p class="hero-text">

            We may live in different cities, follow different professions
            and live different lives — but our roots, values and relationships
            can still bring us together.

        </p>


        <div class="hero-buttons">

            <a href="#why-community"
               class="btn-main">

                <i class="bi bi-arrow-down-circle"></i>

                Why Community?

            </a>


            <a href="#features"
               class="btn-light">

                Explore Community

            </a>

        </div>

    </div>

</section>



<!-- =====================================================
     WHY COMMUNITY
====================================================== -->

<section class="why-section"
         id="why-community">

    <div class="container">

        <div class="section-label">

            WHY COMMUNITY MATTERS

        </div>


        <h2 class="section-title">

            A directory tells us
            <span>who we are.</span>

            <br>

            A community helps us
            <span>stand together.</span>

        </h2>


        <p class="section-description">

            As families move across cities, states and countries,
            relationships can become distant. A strong community
            keeps our connections alive, preserves our heritage,
            creates opportunities and gives every generation
            a place to belong.

        </p>


        <div class="row g-3 why-grid">


            <div class="col-lg-4 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <div class="why-content">

                        <h3>
                            Know Our People
                        </h3>

                        <p>
                            Our community is spread across cities
                            and countries. Knowing one another creates
                            relationships that can last generations.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>

                    <div class="why-content">

                        <h3>
                            No One Should Feel Alone
                        </h3>

                        <p>
                            During difficult moments, simply knowing
                            that people care can make a meaningful
                            difference.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-bank2"></i>
                    </div>

                    <div class="why-content">

                        <h3>
                            Preserve Our Heritage
                        </h3>

                        <p>
                            Traditions, rituals, stories and values
                            should move from one generation to the next.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>

                    <div class="why-content">

                        <h3>
                            Create Opportunities
                        </h3>

                        <p>
                            Connections can help people discover jobs,
                            businesses, training and professional
                            opportunities.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <div class="why-content">

                        <h3>
                            Support Our Young Generation
                        </h3>

                        <p>
                            Students and young professionals can benefit
                            from guidance, mentorship and encouragement.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>

                    <div class="why-content">

                        <h3>
                            Stand Together
                        </h3>

                        <p>
                            When a genuine need arises, members can
                            voluntarily come forward to help.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     HEART MESSAGE
====================================================== -->

<section class="heart-section">

    <div class="container">

        <div class="heart-icon">

            <i class="bi bi-heart-fill"></i>

        </div>


        <h2>

            Tomorrow, our children may live
            <span>far away from our hometowns.</span>

            <br>

            But they should never feel far away
            <span>from their community.</span>

        </h2>


        <p>

            BrahminParivar is an effort to keep our families connected —
            across cities, countries and generations.

            <br><br>

            To celebrate together.
            To remember together.
            To learn together.
            To grow together.
            And when someone needs us,
            <strong>to stand together.</strong>

        </p>


        <div class="quote">

            “Community is not just about knowing who we are.
            It is about being there for one another.”

        </div>

    </div>

</section>



<!-- =====================================================
     FEATURES
====================================================== -->

<section class="features-section"
         id="features">

    <div class="container">

        <div class="feature-heading">

            <div class="section-label">

                HOW OUR COMMUNITY CAN HELP

            </div>


            <h2>

                From Connection
                <br>
                <span style="color:#ff5a1f;">
                    To Meaningful Action.
                </span>

            </h2>


            <p>

                Tap a card to see more.

            </p>

        </div>


        <div class="row g-3">


            <!-- CARD 1 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-cake2-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Birthday Wishes
                        </h3>

                        <p>
                            Celebrate members and make them feel remembered.
                        </p>

                        <div class="feature-extra">
                            A simple birthday wish can create belonging
                            and remind someone that their community remembers them.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 2 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Community Support
                        </h3>

                        <p>
                            Know when someone genuinely needs support.
                        </p>

                        <div class="feature-extra">
                            Members may voluntarily offer guidance,
                            connections, resources or encouragement.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 3 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-emoji-smile-upside-down-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Difficult Times
                        </h3>

                        <p>
                            Stand together when life becomes difficult.
                        </p>

                        <div class="feature-extra">
                            Medical emergencies, family incidents,
                            marriages and other important moments may
                            bring members together voluntarily.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 4 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-lamp-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Pooja & Culture
                        </h3>

                        <p>
                            Preserve rituals and cultural knowledge.
                        </p>

                        <div class="feature-extra">
                            Share pooja rituals, traditions,
                            festivals and their meaning with
                            future generations.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 5 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-award-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Recognize Good Work
                        </h3>

                        <p>
                            Celebrate people making a positive difference.
                        </p>

                        <div class="feature-extra">
                            Appreciate members who contribute to society,
                            help others or create meaningful impact.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 6 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Jobs & Training
                        </h3>

                        <p>
                            Share career and professional opportunities.
                        </p>

                        <div class="feature-extra">
                            Job openings, training, skills,
                            professional contacts and career guidance
                            can reach the right people.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 7 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-megaphone-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Community Updates
                        </h3>

                        <p>
                            Keep members informed and connected.
                        </p>

                        <div class="feature-extra">
                            News, activities, initiatives and important
                            announcements can reach the community.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 8 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-calendar-event-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Events & Gatherings
                        </h3>

                        <p>
                            Meet people and strengthen relationships.
                        </p>

                        <div class="feature-extra">
                            Cultural, social and educational gatherings
                            create memories and new relationships.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 9 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Education Support
                        </h3>

                        <p>
                            Help students learn, grow and find guidance.
                        </p>

                        <div class="feature-extra">
                            Mentorship, educational resources,
                            guidance and opportunities can help
                            students build a better future.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 10 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Member Networking
                        </h3>

                        <p>
                            Connect through profession and experience.
                        </p>

                        <div class="feature-extra">
                            Students, professionals, entrepreneurs
                            and experienced members can learn from
                            one another.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 11 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Knowledge Sharing
                        </h3>

                        <p>
                            Share experience and practical guidance.
                        </p>

                        <div class="feature-extra">
                            The experience of one generation can become
                            valuable guidance for the next.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>



            <!-- CARD 12 -->

            <div class="col-lg-4 col-md-6">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-hand-thumbs-up-fill"></i>
                    </div>

                    <div class="feature-content">

                        <h3>
                            Volunteer & Social Work
                        </h3>

                        <p>
                            Turn community spirit into positive action.
                        </p>

                        <div class="feature-extra">
                            Encourage voluntary initiatives that
                            create meaningful social impact.
                        </div>

                        <div class="feature-read">
                            Tap to read
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     VALUES
====================================================== -->

<section class="values-section">

    <div class="container">

        <div class="feature-heading">

            <div class="section-label">
                OUR FOUNDATION
            </div>

            <h2>
                What Holds Us Together?
            </h2>

        </div>


        <div class="row g-2">


            <div class="col-6 col-lg">

                <div class="value-card">

                    <i class="bi bi-people-fill"></i>

                    <h4>Unity</h4>

                    <p>Stay connected</p>

                </div>

            </div>


            <div class="col-6 col-lg">

                <div class="value-card">

                    <i class="bi bi-bank2"></i>

                    <h4>Heritage</h4>

                    <p>Preserve our roots</p>

                </div>

            </div>


            <div class="col-6 col-lg">

                <div class="value-card">

                    <i class="bi bi-heart-fill"></i>

                    <h4>Care</h4>

                    <p>Help one another</p>

                </div>

            </div>


            <div class="col-6 col-lg">

                <div class="value-card">

                    <i class="bi bi-award-fill"></i>

                    <h4>Respect</h4>

                    <p>Celebrate contribution</p>

                </div>

            </div>


            <div class="col-6 col-lg">

                <div class="value-card">

                    <i class="bi bi-graph-up-arrow"></i>

                    <h4>Growth</h4>

                    <p>Grow together</p>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     CTA
====================================================== -->

<section class="cta-section">

    <div class="container">

        <div class="cta">

            <div class="hero-badge"
                 style="
                    color:#fff;
                    background:rgba(255,255,255,.14);
                    border-color:rgba(255,255,255,.25);
                 ">

                <i class="bi bi-heart-fill"></i>

                Our Community, Our Pride

            </div>


            <h2>

                Your Family Is Part of This Story.

            </h2>


            <p>

                Somewhere in our community is a family you haven't
                met yet, someone who can guide you, someone who needs
                encouragement, or someone whose story deserves to
                be celebrated.

                <br><br>

                <strong>
                    Let's make sure we don't remain strangers.
                </strong>

            </p>


            <a href="https://wa.me/918000060541?text=connet-me"
               class="join-button">

                <i class="bi bi-person-plus-fill"></i>

                Join BrahminParivar

            </a>


            <div class="disclaimer">

                Community support is voluntary and depends on member
                participation, available resources and circumstances.
                BrahminParivar does not guarantee financial, medical,
                employment or other assistance.

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     FIXED BOTTOM NUMBERS
====================================================== -->
<div class="stats-marquee">
    <div class="stats-track" id="statsTrack">

        <div class="stat-item">
            <strong>50+</strong>
            <span>Members</span>
        </div>

        <div class="stat-item">
            <strong>10+</strong>
            <span>Families</span>
        </div>

        <div class="stat-item">
            <strong>5+</strong>
            <span>Area</span>
        </div>

        <div class="stat-item">
            <strong>1+</strong>
            <span>Businesses</span>
        </div>
        <div class="stat-item">
            <strong>10+</strong>
            <span>NRI Members</span>
        </div>
    </div>
</div>


<!-- =====================================================
     CARD INTERACTION
====================================================== -->

<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {

        const cards =
            document.querySelectorAll(
                ".feature-card"
            );


        cards.forEach(function (card) {

            card.addEventListener(
                "click",
                function () {

                    cards.forEach(function (item) {

                        if (item !== card) {

                            item.classList.remove(
                                "active"
                            );

                        }

                    });


                    card.classList.toggle(
                        "active"
                    );

                }
            );

        });

    }
);


(function () {

    const marquee = document.querySelector('.stats-marquee');
    const track = document.querySelector('#statsTrack');

    if (!marquee || !track) return;

    const originalItems = Array.from(track.children);

    function buildMarquee() {

        // Reset
        track.innerHTML = '';

        // Add original set
        originalItems.forEach(item => {
            track.appendChild(item.cloneNode(true));
        });

        /*
         * Keep adding complete sets until
         * the track is at least 2x wider than
         * the visible screen.
         */
        let safety = 0;

        while (
            track.scrollWidth < marquee.offsetWidth * 2 &&
            safety < 10
        ) {

            originalItems.forEach(item => {
                track.appendChild(item.cloneNode(true));
            });

            safety++;
        }

        /*
         * Duplicate the complete track.
         *
         * This guarantees that -50% lands
         * exactly on an identical copy.
         */
        const currentItems = Array.from(track.children);

        currentItems.forEach(item => {
            track.appendChild(item.cloneNode(true));
        });

        /*
         * Restart animation cleanly
         */
        track.style.animation = 'none';

        void track.offsetWidth;

        track.style.animation = '';
    }


    // Initial build
    if (document.fonts && document.fonts.ready) {

        document.fonts.ready.then(function () {

            requestAnimationFrame(buildMarquee);

        });

    } else {

        window.addEventListener('load', buildMarquee);

    }


    // Rebuild when screen size changes
    let resizeTimer;

    window.addEventListener('resize', function () {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function () {
            buildMarquee();
        }, 2000);

    });

})();
</script>


</body>
</html>