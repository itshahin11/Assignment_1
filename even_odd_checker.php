<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #8221CF3A;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #000000;
            background-color: greenyellow;
        }

        form {
            margin-top: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] ,[type="reset"]{
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: yellowgreen;
            transform: translateY(-2px);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }
        input[type="reset"]:hover {
            background-color: orangered;
            transform: translateY(-2px);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }
        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; 
                   
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
            
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                max-width: 90%;
                margin: 20px auto;
            }
        }
</style>
</head>


    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $result = ($number % 2 == 0) ? "Even" : "Odd";
            echo "<h1>Even or Odd Checker</h1>";
            echo "The number $number is $result.";
            echo '<div class="buttons">
                    <a href="' . $_SERVER['PHP_SELF'] . '" class="button">Return Home Page</ Home Page>
                 </div>';
        }
        ?>

        <h1>Even or Odd Checker</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="number" name="number" placeholder="Enter a number" required>
            
                <input type="submit" value="Check">
                <input type="reset" value="Clear">
                
            
        </form>
    </div>
</body>
</html>

