<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        <title>Home</title>
    </head>
    <body>
        <h1>Home Page</h1>
        <div class ="home-container">
            <img src="aquaboy.png" alt="Aqua Boy">
            <p>
                Welcome to Aqua Masagana Water Station!
                Your trusted source for safe, clean, and affordable drinking water.
                We are committed to delivering purified and mineral water that meets the highest quality standards — perfect for homes, offices, and businesses.
            </p>
            <ul>
                <li>✔ Fast and reliable water delivery</li>   
                <li>✔ Modern purification technology</li> 
                <li>✔ Friendly and professional staff</li>  
                <li>✔ Guaranteed clean and safe drinking water</li>     
            </ul>
        </div> 
        <footer>
            <form action="home.php" method="post">
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