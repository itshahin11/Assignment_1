<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            background-color: #000000;
            color: #68fff9;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        p {
            margin: 10px;
            font-size: 18px;
        }

        p strong {
            font-weight: bold;
        }

        p:hover {
            background-color: cyan;
            transition: background-color 0.3s ease-in-out;
        }

        .intro {
            background-color: #2e1e8d;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .intro:hover {
            color: #000000;
            background-color: cyan;
            transition: background-color 0.3s ease-in-out;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 10px;
                border-radius: 5px;
            }

            h1 {
                padding: 10px;
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }

            .intro {
                padding: 5px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Personal Information
            $name = "Shahin ALam";
            $age = 24; 
            $country = "Bangladesh";
            $introduction = "Hello, I am $name. I am $age years old and I am from $country, and I have been working in the field of IT at Insight International School for two years.";

            // Display Personal Information
            echo "<h1>Personal Information</h1>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Country:</strong> $country</p>";
            echo "<p class='intro'><strong>Introduction:</strong> $introduction</p>";
        ?>
    </div>
</body>
</html>
