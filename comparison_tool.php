<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
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
            background-color: blanchedalmond;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #000000;
            background-color: palegreen;
            padding: 10px;
            border-radius: 5px;
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

        input[type="submit"],
        input[type="reset"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="submit"]:hover
         {
            background-color: blueviolet;
            transform: translateY(+10px);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }
        input[type="reset"]:hover
        {
            background-color: orangered;
            transform: translateY(+10px);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);

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
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $largerNumber = ($number1 > $number2) ? $number1 : $number2;
            echo "<h1>Comparison Tool</h1>";
            echo "The larger number is: $largerNumber";
        }
        ?>

        <h1>Comparison Tool</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="number" name="number1" placeholder="Enter number 1" required>
            <input type="number" name="number2" placeholder="Enter number 2" required>
            <input type="submit" value="Compare">
            <input type="reset" value="Reset Input">
        </form>
    </div>
</body>
</html>
