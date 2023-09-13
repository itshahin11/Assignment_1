<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
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
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            background-color: #68fff9;
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

        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"]
         {
            background-color: #007bff; /* Special color for submit button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        input[type="reset"] {
            background-color: red; /* Special color for submit button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker color on hover */
            transform: translateY(-8px);
            box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.3);
        }
        input[type="reset"]:hover {
            background-color: orangered; /* Darker color on hover */
            transform: translateY(-8px);
            box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.3);
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
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case 'addition':
                    $result = $num1 + $num2;
                    break;
                case 'subtraction':
                    $result = $num1 - $num2;
                    break;
                case 'multiplication':
                    $result = $num1 * $num2;
                    break;
                case 'division':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Invalid operation";
            }

            echo "<h1>Simple Calculator</h1>";
            echo "Result: $result";
        }
        ?>

        <h1>Simple Calculator</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="number" name="num1" placeholder="Enter number 1" required>
            <input type="number" name="num2" placeholder="Enter number 2" required>
            <select name="operation">
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
            </select>
            <input type="submit" value="Calculate">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
</html>
