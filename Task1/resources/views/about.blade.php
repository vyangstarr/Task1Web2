<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | Essence & Co.</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <a href="{{ route('home') }}" class="brand">✦ Essence & Co.</a>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}" class="active">About Us</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact Us</a>
        </nav>
    </header>

    <main>
        <section class="container two-col">
            <img src="https://picsum.photos/seed/perfumeshop/600/450" alt="Essence & Co. store">
            <div>
                <h1>Essence & Co.</h1>

                <h2>Our Story</h2>
                <p>Essence & Co. started in 2024 from a simple love of fragrance. What began as
                   a small online shop for imported perfumes has grown into a trusted
                   destination for scent lovers.</p>

                <h2>Vision</h2>
                <p>To be the most trusted perfume brand, helping everyone find their signature scent.</p>

                <h2>Mission</h2>
                <p>To offer authentic, high-quality fragrances at fair prices, with friendly and
                   knowledgeable service for every customer.</p>

                <h2>Our Goals</h2>
                <ul>
                    <li>Offer only 100% authentic perfumes.</li>
                    <li>Expand our collection to 50 fragrances within two years.</li>
                    <li>Open a physical boutique in the city center.</li>
                </ul>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Essence & Co. All rights reserved.</p>
    </footer>
</body>
</html>