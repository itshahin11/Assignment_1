<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
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


        form {
            margin-top: 20px;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: cyan;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: blueviolet;
            transform: translateY(-2px);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the three test scores from the form
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];
            
            // Calculate the average of the test scores
            $average = ($score1 + $score2 + $score3) / 3;
            
            // Determine the corresponding letter grade
            if ($average >= 90) {
                $grade = 'A';
            } elseif ($average >= 80) {
                $grade = 'B';
            } elseif ($average >= 70) {
                $grade = 'C';
            } elseif ($average >= 60) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
            
            // Display the result
            echo "<h1>Grade Calculator</h1>";
            echo "Test Score 1: $score1<br>";
            echo "Test Score 2: $score2<br>";
            echo "Test Score 3: $score3<br>";
            echo "Average Score: $average<br>";
            echo "Grade: $grade";
        }
        ?>

        <h1>Grade Calculator</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="score1">Enter Test Score 1:</label>
            <input type="number" name="score1" id="score1" required>
            
            <label for="score2">Enter Test Score 2:</label>
            <input type="number" name="score2" id="score2" required>
            
            <label for="score3">Enter Test Score 3:</label>
            <input type="number" name="score3" id="score3" required>
            
            <input type="submit" value="Calculate">
        </form>
    </div>
</body>
</html>
