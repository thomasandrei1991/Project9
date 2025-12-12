<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <title>Document</title>
    </head>
    <body>
        <h1>Aqua Masagana</h1>
        <hr>
        <div class="form-container">
            <form action="main.php" method="post">
                <button name="home">
                    Home
                </button>
                <button name="about">
                    About
                </button>
                <button name="Contact">
                    Contact
                </button>
                <button name="services">
                    Services
                </button>
            </form>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['home'])){
        header("Location: home.php");
    }
    else if(isset($_POST['about'])){
        header("location: about.php");
    }
?>