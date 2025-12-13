<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqua Masagana Water Station</title>
    <style>
        *{
            box-sizing:border-box;
            font-family:Arial,Helvetica,sans-serif;
        }
        body{
            margin:0;background:#f2f9ff;
            color:#333;
        }
        header{
            background:#0a6cff;
            color:#fff;
            padding:20px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            position:fixed;
            top:0;left:0;width:100%;z-index:1000
        }
        .logo{
            display:flex;
            align-items:center;
            gap:10px
        }
        .logo-circle{
            width:40px;
            height:40px;
            border-radius:50%;
            background:linear-gradient(to bottom,#4fc3f7,#0a6cff)
        }
        nav a{
            color:#fff;
            margin-left:20px;
            text-decoration:none;
            font-weight:bold
        }
        nav a:hover{
            text-decoration:underline
        }
        .hero{
            padding:90px 40px;
            text-align:center;
            background:linear-gradient(to right,#0a6cff,#3fa9f5);
            color:#fff;
        }
        .hero h1{
            font-size:42px;
            margin-bottom:10px;
        }
        .hero p{
            font-size:18px;
        }
        section{
            padding:60px 40px;
            max-width:1100px;
            margin:auto;
        }
        h2{
            color:#0a6cff;
            margin-bottom:20px;
        }
        .services{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
        }
        .card{
            background:#fff;
            padding:20px;
            border-radius:12px;
            box-shadow:0 4px 12px rgba(0,0,0,.1);
        }
        .card h3{
            margin-top:0;
        }
        .order-form,.contact-form{
            background:#fff;
            padding:25px;
            border-radius:12px;
            box-shadow:0 4px 12px rgba(0,0,0,.1);
        }
        input,textarea,select{
            width:100%;
            padding:10px;
            margin-bottom:15px;
            border-radius:6px;
            border:1px solid #ccc;
        }
        button{
            background:#0a6cff;
            color:#fff;
            border:none;
            padding:12px 20px;
            border-radius:6px;
            font-size:16px;
            cursor:pointer;
        }
        button:hover{
            background:#084ecb;
        }
        footer{
            background:#0a6cff;
            color:#fff;
            text-align:center;
            padding:20px;
            margin-top:40px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <div class="logo-circle"></div>
        <h2>Aqua Masagana</h2>
    </div>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#order">Order</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero" id="home">
    <h1>Clean • Safe • Affordable Water</h1>
    <p>Your trusted water refilling station for homes and businesses</p>
</section>

<section id="about">
    <h2>About Us</h2>
    <p>
        Aqua Masagana Water Station provides high-quality purified and mineral drinking water
        using modern filtration and sanitation technology. We are committed to cleanliness,
        safety, and excellent customer service for our community.
    </p>
</section>

<section id="services">
    <h2>Our Services</h2>
    <div class="services">
        <div class="card">
            <h3>Water Refilling</h3>
            <p>Purified and mineral water for all container sizes.</p>
        </div>
        <div class="card">
            <h3>Water Delivery</h3>
            <p>Fast delivery to homes, offices, and stores.</p>
        </div>
        <div class="card">
            <h3>Container Cleaning</h3>
            <p>Sanitized bottle washing for safe drinking.</p>
        </div>
        <div class="card">
            <h3>Bulk Orders</h3>
            <p>Discounted plans for businesses and regular clients.</p>
        </div>
    </div>
</section>

<section id="order">
    <h2>Water Delivery Order</h2>
    <div class="order-form">
        <form>
            <input type="text" placeholder="Full Name" required>
            <input type="text" placeholder="Address" required>
            <input type="tel" placeholder="Contact Number" required>
            <select required>
                <option value="">Select Water Type</option>
                <option>Purified Water</option>
                <option>Mineral Water</option>
            </select>
            <input type="number" placeholder="Number of Gallons" required>
            <button type="submit">Place Order</button>
        </form>
    </div>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    <div class="contact-form">
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea rows="4" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
    <p style="margin-top:20px"><strong>Phone:</strong> 0912 345 6789<br>
    <strong>Email:</strong> aquamasagana@gmail.com<br>
    <strong>Hours:</strong> Monday – Sunday | 8:00 AM – 7:00 PM</p>
</section>

<footer>
    <p>© 2025 Aqua Masagana Water Station. All Rights Reserved.</p>
</footer>

</body>
</html>
