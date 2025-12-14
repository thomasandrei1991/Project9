<?php
    include("header.html");
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="pizzastyle.css">
        <title>Form</title>
    </head>
    <body>
        <div class="form-container">
            <form action="pizzaorder.php" method="post">
                <label>Pizza Flavor</label><br>
                <input type="text" name="pizzaflavor"><br>
                <label>Pizza Qty</label><br>
                <input type="text" name="pizzaquantity"><br>
                <label>Size</label><br>
                <select name="pizzasize">
                    <option value="small">Small P100</option>
                    <option value="medium">Medium P150</option>
                    <option value="large">Large P200</option>
                </select><br><br>
                <button name="order">
                    Order
                </button>
            </form>
        </div>
        <div class="result">
            <h2>
                <?php
                    if(isset($_POST["order"])) {
                        $pizzaflavor = $_POST["pizzaflavor"];
                        $pizzaquantity = $_POST["pizzaquantity"];
                        $pizzasize = $_POST["pizzasize"];
                        $total = null;
                        if($pizzasize == "small") {
                            $price = 100;
                            $total = $price * $pizzaquantity;
                            echo "You ordered $pizzaquantity $pizzasize $pizzaflavor pizza/s. for total of P $total <br>";
                        }
                        else if($pizzasize == "medium") 
                        {
                            $price = 150;
                            $total = $price * $pizzaquantity;
                            echo "You ordered $pizzaquantity $pizzasize $pizzaflavor pizza/s. for total of P $total <br>";
                        }
                        else if($pizzasize == "large") 
                        {
                            $price = 200;
                            $total = $price * $pizzaquantity;
                            echo "You ordered $pizzaquantity $pizzasize $pizzaflavor pizza/s. for total of P $total <br>";
                        }
                        else{
                            echo "Error : Invalid input.";
                        }
                    }
                ?>
            </h2>
        </div>
    </body>
</html>
