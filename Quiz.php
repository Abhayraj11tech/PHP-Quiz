<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            background: white;
            width: 50%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="number"], input[type="email"] {
            width: 80%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1, h2 {
            color: #333;
        }
        .question {
            text-align: left;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background: #218838;
        }
        .correct {
            color: green;
            font-weight: bold;
        }
        .incorrect {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Quiz</h1>
    <form method="POST" action="">
        <h4>Enter your Name: <input type="text" name="name" required></h4>
        <h4>Enter your Age: <input type="number" name="age" required></h4>
        <h4>Enter your Email: <input type="email" name="email" required></h4><br>

        <div class="question">
            <h2>1. Who wrote the play Romeo and Juliet?</h2>
            <input type="radio" name="q1" value="Charles Dickens">Charles Dickens<br>
            <input type="radio" name="q1" value="William Shakespeare">William Shakespeare<br>
            <input type="radio" name="q1" value="Mark Twain">Mark Twain<br>
            <input type="radio" name="q1" value="Jane Austen">Jane Austen<br>
        </div>

        <div class="question">
            <h2>2. What is the capital of France?</h2>
            <input type="radio" name="q2" value="Berlin">Berlin<br>
            <input type="radio" name="q2" value="Madrid">Madrid<br>
            <input type="radio" name="q2" value="Paris">Paris<br>
            <input type="radio" name="q2" value="Rome">Rome<br>
        </div>

        <div class="question">
            <h2>3. Which planet is known as the Red Planet?</h2>
            <input type="radio" name="q3" value="Venus">Venus<br>
            <input type="radio" name="q3" value="Jupiter">Jupiter<br>
            <input type="radio" name="q3" value="Mars">Mars<br>
            <input type="radio" name="q3" value="Saturn">Saturn<br>
        </div>

        <div class="question">
            <h2>4. What is the square root of 144?</h2>
            <input type="radio" name="q4" value="10">10<br>
            <input type="radio" name="q4" value="11">11<br>
            <input type="radio" name="q4" value="12">12<br>
            <input type="radio" name="q4" value="13">13<br>
        </div>

        <div class="question">
            <h2>5. How many continents are there in the world?</h2>
            <input type="radio" name="q5" value="5">5<br>
            <input type="radio" name="q5" value="6">6<br>
            <input type="radio" name="q5" value="12">12<br>
            <input type="radio" name="q5" value="7">7<br>
        </div>

        <br><input type="submit" value="Submit">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? 'Not provided';
    $q1 = $_POST['q1'] ?? 'Not answered';
    $q2 = $_POST['q2'] ?? 'Not answered';
    $q3 = $_POST['q3'] ?? 'Not answered';
    $q4 = $_POST['q4'] ?? 'Not answered';
    $q5 = $_POST['q5'] ?? 'Not answered';

    $answers = [
        "q1" => "William Shakespeare",
        "q2" => "Paris",
        "q3" => "Mars",
        "q4" => "12",
        "q5" => "7"
    ];

    $score = 0;

    echo "<div class='container'><h1>Quiz Result</h1>";
    echo "<h3>Submission by: $name</h3>";

    foreach ($answers as $question => $correctAnswer) {
        $userAnswer = trim($_POST[$question] ?? 'Not answered');
        if ($userAnswer == $correctAnswer) {
            echo "<p>Your answer for <b>$question</b>: <span class='correct'>$userAnswer</span> ✔</p>";
            $score++;
        } else {
            echo "<p>Your answer for <b>$question</b>: <span class='incorrect'>$userAnswer</span> ❌ (Correct: <b>$correctAnswer</b>)</p>";
        }
    }

    echo "<h2>Result: You scored <b>$score out of 5</b></h2></div>";
}
?>

</body>
</html>
