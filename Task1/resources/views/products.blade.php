<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products | Essence & Co.</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,500&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <a href="{{ route('home') }}" class="brand"> Essence & Co.</a>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('products') }}" class="active">Products</a>
            <a href="{{ route('contact') }}">Contact Us</a>
        </nav>
    </header>

    <main>
        <section class="container">
            <h1 class="section-title">Our Fragrances</h1>
            <p class="section-sub">Signature scents from our luxury collection</p>

            <div class="grid">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('img/pr1.jpg') }}" alt="Rose Noir perfume bottle">
                    </div>
                    <h3>Rose Noir</h3>
                    <p>A romantic floral scent with notes of rose, vanilla, and amber. 50ml Eau de Parfum.</p>
                    <span class="price">₱1,899</span>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('img/pr2.jpg') }}" alt="Ocean Breeze perfume bottle">
                    </div>
                    <h3>Ocean Breeze</h3>
                    <p>A fresh aquatic fragrance with citrus and sea salt. 100ml Eau de Toilette.</p>
                    <span class="price">₱1,499</span>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('img/pr3.jpeg') }}" alt="Midnight Oud perfume bottle">
                    </div>
                    <h3>Midnight Oud</h3>
                    <p>A bold woody scent with oud, sandalwood, and musk. 75ml Eau de Parfum.</p>
                    <span class="price">₱2,499</span>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Essence & Co. All rights reserved.</p>
    </footer>
</body>
</html>