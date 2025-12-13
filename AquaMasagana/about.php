<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="about.css">
        <title>About</title>
    </head>
    <body>
        <h1>About Page</h1>
        <div class ="about-container">
            <img src="aquastation.jpg" alt="Aqua Station">
            <p>
                Aqua Masagana Water Station is a locally operated water refilling business dedicated to providing high-quality purified and mineral water to the community.
                Our station uses a multi-stage purification system, including:
            </p>
            <ul>
                <li>✔ Sediment filtration</li>   
                <li>✔ Activated carbon filtration</li> 
                <li>✔ Reverse osmosis</li>  
                <li>✔ UV sterilization</li>     
                <li>✔ Mineral enhancement (optional)</li>
            </ul>
            <p>
                We are committed to cleanliness, safety, and excellent customer service.
                Our goal is to make safe drinking water accessible and affordable for every household.
            </p>
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