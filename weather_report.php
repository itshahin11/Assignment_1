<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
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
            background-color: #ffda70cf;;
            padding: 10px;
            border-radius: 5px;
        }

        .temperature {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .message {
            font-size: 18px;
            color: #333;
            background-color: palegreen;
        }

        .back-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .back-button:hover {
            background-color: #0056b3;
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
        $temperature = 22; // Change this to the actual temperature

        if ($temperature <= 0) {
            $message = "It's freezing!";
        } elseif ($temperature <= 15) {
            $message = "It's cool.";
        } else {
            $message = "It's warm.";
        }
        ?>

        <h1>Weather Report</h1>
        <p class="temperature">Current Temperature: <?php echo $temperature; ?>&deg;C</p>
        <p class="message"><?php echo $message; ?></p>

        <!-- Back Input -->
        <input type="button" class="back-button" value="Back" onclick="history.back()">
    </div>
</body>
</html>
