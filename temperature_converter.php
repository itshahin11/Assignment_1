<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h1 {
            text-align: center;
            color: lightgoldenrodyellow;
            background: navy;
           }

        form {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin: 10px 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: blueviolet;
            transform: translateY(-2px);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }

        p {
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
        <h1>Temperature Converter</h1>
        <form method="post">
            <label for="temperature">Temperature:</label>
            <input type="text" name="temperature" id="temperature" required>
            <br>
            <input type="radio" name="conversion" value="c_to_f" checked> Celsius to Fahrenheit
            <input type="radio" name="conversion" value="f_to_c"> Fahrenheit to Celsius
            <br>
            <input type="submit" value="Convert">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversion = $_POST["conversion"];

            if ($conversion == "c_to_f") {
                $converted_temperature = ($temperature * 9/5) + 32;
                echo "<p>$temperature Celsius is equal to $converted_temperature Fahrenheit</p>";
            } else {
                $converted_temperature = ($temperature - 32) * 5/9;
                echo "<p>$temperature Fahrenheit is equal to $converted_temperature Celsius</p>";
            }
        }
        ?>
    </div>
</body>
</html>
