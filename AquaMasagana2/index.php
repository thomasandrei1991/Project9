<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqua Masagana Water Station</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            margin: 0;
            background: #f4f9ff;
            color: #333;
        }
        header {
            background: #0a6cff;
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .hero {
            padding: 80px 40px;
            text-align: center;
            background: linear-gradient(to right, #0a6cff, #3fa9f5);
            color: white;
        }
        .hero h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 18px;
        }
        section {
            padding: 60px 40px;
            max-width: 1000px;
            margin: auto;
        }
        h2 {
            color: #0a6cff;
            margin-bottom: 20px;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            background: #0a6cff;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

<header>
    <h2>Aqua Masagana</h2>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero" id="home">
    <h1>Clean & Safe Drinking Water</h1>
    <p>Your trusted water refilling station for homes and businesses</p>
</section>

<section id="about">
    <h2>About Us</h2>
    <p>
        Aqua Masagana Water Station is dedicated to providing clean, safe, and affordable
        drinking water. Using modern purification technology, we ensure every drop meets
        high quality and sanitation standards.
    </p>
</section>

<section id="services">
    <h2>Our Services</h2>
    <div class="services">
        <div class="card">
            <h3>Water Refilling</h3>
            <p>Purified and mineral water refilling for all container sizes.</p>
        </div>
        <div class="card">
            <h3>Water Delivery</h3>
            <p>Fast and reliable delivery to homes and offices.</p>
        </div>
        <div class="card">
            <h3>Container Cleaning</h3>
            <p>Sanitized washing to ensure safe water storage.</p>
        </div>
        <div class="card">
            <h3>Bulk Orders</h3>
            <p>Special rates for businesses and regular customers.</p>
        </div>
    </div>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    <p><strong>Address:</strong> Your Barangay, City</p>
    <p><strong>Phone:</strong> 0912 345 6789</p>
    <p><strong>Email:</strong> aquamasagana@gmail.com</p>
    <p><strong>Hours:</strong> Monday – Sunday | 8:00 AM – 7:00 PM</p>
</section>

<footer>
    <p>© 2025 Aqua Masagana Water Station. All Rights Reserved.</p>
</footer>

</body>
</html>
