<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="services.css">
        <title>Home</title>
    </head>
    <body>
        <h1>Services Page</h1>
        <div class ="home-container">
            <img src="service.jpg" alt="Service Station">
            <p>
                <b>1. Water Refilling </b> <br>
                    Refill your 5-gallon or 350ml–1L containers at our station. <br>
                    Guaranteed purified or mineral water that meets DOH and local sanitation standards. <br>

                <b>2. Water Delivery</b> <br>
                    We offer fast delivery straight to your home or business. <br>
                    Daily schedules available for nearby barangays. <br>

                <b>3. Container Cleaning</b> <br>
                    We provide sanitized bottle washing to ensure your containers stay clean and safe. <br>

                <b>4. Bulk & Subscription Plans</b> <br>
                    Perfect for offices, restaurants, and sari-sari stores.<br>
                    Discounted rates for weekly or monthly orders.<br>

                <b>5. New Container Sales</b><br>
                    Brand-new 5-gallon bottles and dispensers available for purchase.<br>
            </p>
        </div> 
        <footer>
            <form action="services.php" method="post">
                <button name="exit">
                    Back to Main Menu
                </button>
            </form>
        </footer>
    </body>
</html>
<?php
    if(isset($_POST['exit'])){
        header("Location: main.php");
    }
?>