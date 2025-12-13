<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact.css">
        <title>Home</title>
    </head>
    <body>
        <h1>Contact Page</h1>
        <div class ="home-container">
            <h2>For Inquiries :</h2>
            <p>
                📞 Contact Us

                    Have questions or need a delivery? Reach out anytime! <br>
                    📍 Address: <br>
                    (Auto-fill with your location, or give it to me and I’ll update it)<br>
                    📱 Phone / Mobile:<br>
                    0912 345 6789<br>
                    0908 123 4567<br>
                    📧 Email:<br>
                    aquamAsagana@gmail.com<br>
                    info@aquamAsagana.ph<br>
                    🕒 Operating Hours:<br>
                    Monday – Sunday<br>
                    8:00 AM – 7:00 PM<br>
                    🚚 Delivery Hotline:<br>
                    "Order now—fresh water delivered right to your door."<br>
            </p>
        </div> 
        <footer>
            <form action="contact.php" method="post">
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