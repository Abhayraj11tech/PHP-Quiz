<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image: url('https://i.pinimg.com/736x/a6/15/2c/a6152c294382a7f34c5312be5920e3b5.jpg');">

<div class="bg-gray-900 text-white rounded-2xl p-10 w-[90%] max-w-2xl shadow-2xl">   
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = isset($_POST['name']) ? $_POST['name'] : 'Not provided';
            $id = isset($_POST['id']) ? $_POST['id'] : 'Not provided';
            $email = isset($_POST['email']) ? $_POST['email'] : 'Not provided';

            $q1 = isset($_POST['q1']) ? $_POST['q1'] : 'Not answered';
            $q2 = isset($_POST['q2']) ? $_POST['q2'] : 'Not answered';
            $q3 = isset($_POST['q3']) ? $_POST['q3'] : 'Not answered';
            $q4 = isset($_POST['q4']) ? (int)$_POST['q4'] : 'Not answered';
            $q5 = isset($_POST['q5']) ? (int)$_POST['q5'] : 'Not answered';

            echo "<h1 class='text-center text-5xl font-extrabold mb-6'>Quiz Result</h1>";
            echo "<hr class='border-gray-600 mb-6'>";
            echo "<div class='flex flex-col items-center'>";
            echo "<img src='https://us.123rf.com/450wm/aksanamoon/aksanamoon1905/aksanamoon190500010/124715671-quiz-interesting-color-vector-illustration-on-white-background.jpg?ver=6' class='w-48 mb-6 rounded-lg shadow-lg'>";
            echo "<h3 class='text-2xl font-semibold'>$name</h3>";
            echo "<h3 class='text-xl'>$id</h3>";
            echo "<h3 class='text-xl mb-6'>$email</h3>";
            echo "</div>";
            echo "<hr class='border-gray-600 my-6'>";

            echo "<div class='space-y-4'>";
            echo "<p class='text-lg'><b>Q1:</b> Your Answer: <span class='text-yellow-400'>$q1</span> | Correct: <b>William Shakespeare</b></p>";
            echo "<p class='text-lg'><b>Q2:</b> Your Answer: <span class='text-yellow-400'>$q2</span> | Correct: <b>Paris</b></p>";
            echo "<p class='text-lg'><b>Q3:</b> Your Answer: <span class='text-yellow-400'>$q3</span> | Correct: <b>Mars</b></p>";
            echo "<p class='text-lg'><b>Q4:</b> Your Answer: <span class='text-yellow-400'>$q4</span> | Correct: <b>12</b></p>";
            echo "<p class='text-lg'><b>Q5:</b> Your Answer: <span class='text-yellow-400'>$q5</span> | Correct: <b>7</b></p>";
            echo "</div>";

            echo "<hr class='border-gray-600 my-6'>";

            $count = 0;
            if(trim($q1) == "William Shakespeare") { ++$count; }
            if(trim($q2) == "Paris") { ++$count; }
            if(trim($q3) == "Mars") { ++$count; }
            if((int)$q4 === 12) { ++$count; }
            if((int)$q5 === 7) { ++$count; }

            echo "<div class='text-center p-5 rounded-lg " . ($count >= 3 ? 'bg-green-500' : 'bg-red-500') . " text-white text-2xl font-bold'>";
            echo "You scored <b>$count out of 5</b> in the quiz!";
            echo "</div>";
        }
    ?>
</div>

</body>
</html>
