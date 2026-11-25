<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Essence & Co.</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <a href="{{ route('home') }}" class="brand">✦ Essence & Co.</a>
        <nav>
            <a href="{{ route('home') }}" class="active">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact Us</a>
        </nav>
    </header>

    <main>
        <section class="container">
    <h2 class="section-title">Why Choose Essence & Co.?</h2>
    <div class="features">
        <div class="feature">
            <div class="icon">✔</div>
            <h3>100% Authentic</h3>
            <p>Every bottle is genuine and sourced from trusted suppliers.</p>
        </div>
        <div class="feature">
            <div class="icon">🎁</div>
            <h3>Gift Ready</h3>
            <p>Beautiful packaging for birthdays, anniversaries, and holidays.</p>
        </div>
        <div class="feature">
            <div class="icon">🚚</div>
            <h3>Fast Delivery</h3>
            <p>Quick and safe shipping straight to your door.</p>
        </div>
    </div>
</section>
        <section class="hero">
            <div class="hero-text">
                <h1>Essence & Co.</h1>
                <p class="tagline">Wear your story. Leave a lasting impression.</p>
                <p>Discover a curated collection of luxury and affordable fragrances for
                   every personality, mood, and occasion.</p>
                <a href="{{ route('products') }}" class="btn">Shop Now</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Essence & Co. All rights reserved.</p>
    </footer>
</body>
</html>