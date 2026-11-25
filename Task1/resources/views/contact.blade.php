<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | Essence & Co.</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <a href="{{ route('home') }}" class="brand"> Essence & Co.</a>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}" class="active">Contact Us</a>
        </nav>
    </header>

    <main>
        <section class="container two-col">
            <div>
                <h1>Contact Us</h1>
                <p><strong>Address:</strong> 123 Fragrance Avenue, Butuan City, Philippines</p>
                <p><strong>Phone:</strong> 0912 345 6789</p>
                <p><strong>Email:</strong> hello@essenceandco.com</p>
                <p><strong>Facebook:</strong> facebook.com/essenceandco</p>
                <p><strong>Instagram:</strong> @essenceandco</p>
            </div>

            <form action="#" method="POST" onsubmit="return false;">
                <label for="name">Customer Name</label>
                <input type="text" id="name" placeholder="Your name">

                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="you@example.com">

                <label for="message">Message</label>
                <textarea id="message" rows="5" placeholder="Your message"></textarea>

                <button type="submit" class="btn">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Essence & Co. All rights reserved.</p>
    </footer>
</body>
</html>