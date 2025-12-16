<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sample Document</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                margin: 50px;
            }
            form{
                max-width: 300px;
                height: 400px;
                border-radius: 10px;
                background-color: transparent;
                border-style: solid;
            }

            .gender input{
                margin-top: 40px;
                margin-bottom: 10px;
                margin-left: 50px;
            }
            
            .userinput input {
                margin-top: 30px;
                margin-left: 50px;
                margin-bottom: 15px;
                height: 30px;
                width: 200px;
            }

            .btnsubmit button{
                margin-top: 50px;
                margin-left: 50px;
                height: 40px;
                width: 200px;
                cursor: pointer;
                background-color: darkcyan;
                border: none;
                border-radius: 8px;
                color: white;
            }
            .btnsubmit :hover {
                background-color: royalblue;
            }
        </style>
    </head>
    <body>
        <form action="index4.php" method="post">
            <div class="userinput">
                <input type="text" name="firstname" placeholder="Firstname"><br>
                <input type="text" name="lastname" placeholder="Lastname"><br>
            </div>
            <div class="gender">
                <input type="radio" name="sex" value="Male"> Male <br>
                <input type="radio" name="sex" value="Female"> Female <br>
            </div>
            <div class="btnsubmit">
                <button name="submit"> Submit </button>
            </div>
        </form>
        <?php
            displayDetails();
        ?>
    </body>
</html>
<?php
    function displayDetails(){
        if (isset($_POST["submit"])) {

            $firstname = $_POST["firstname"] ?? '';
            $lastname  = $_POST["lastname"] ?? '';
            $sex = $_POST["sex"] ?? '';

            if (!empty($firstname) && !empty($lastname) && !empty($sex)) {
                echo "Hello $firstname $lastname, you are a $sex.";
            } else {
                echo "Error: All fields are required.";
            }
        }
    }
    
?>
