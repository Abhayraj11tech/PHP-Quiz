<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex justify-center items-center min-h-screen p-6">
    <div class="bg-white shadow-xl rounded-3xl p-8 max-w-2xl w-full text-gray-900">
        <h1 class="text-5xl font-extrabold text-center text-gray-800">📖 Quiz</h1>
        <hr class="my-6 border-gray-300">
        <img src="https://blogassets.leverageedu.com/blog/wp-content/uploads/2020/04/11212007/Science-Quiz.png" alt="Quiz" class="w-full rounded-lg shadow-md">
        <form method="POST" action="file.php" class="space-y-6 mt-8">
            <div>
                <label class="block text-lg font-semibold">👤 Name:</label>
                <input type="text" name="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-lg font-semibold"> Registration Number:</label>
                <input type="number" name="age" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-lg font-semibold">Email:</label>
                <input type="email" name="email" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="space-y-8 mt-10">
                <div>
                    <h2 class="text-xl font-bold">1️⃣ Who wrote the play Romeo and Juliet?</h2>
                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <label class="flex items-center"><input type="radio" name="q1" value="Charles Dickens" class="mr-2"> Charles Dickens</label>
                        <label class="flex items-center"><input type="radio" name="q1" value="William Shakespeare" class="mr-2"> William Shakespeare</label>
                        <label class="flex items-center"><input type="radio" name="q1" value="Mark Twain" class="mr-2"> Mark Twain</label>
                        <label class="flex items-center"><input type="radio" name="q1" value="Jane Austen" class="mr-2"> Jane Austen</label>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-bold">2️⃣ What is the capital of France?</h2>
                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <label class="flex items-center"><input type="radio" name="q2" value="Berlin" class="mr-2"> Berlin</label>
                        <label class="flex items-center"><input type="radio" name="q2" value="Madrid" class="mr-2"> Madrid</label>
                        <label class="flex items-center"><input type="radio" name="q2" value="Paris" class="mr-2"> Paris</label>
                        <label class="flex items-center"><input type="radio" name="q2" value="Rome" class="mr-2"> Rome</label>
                    </div>
                </div>

                <div>
                    <h2 class="text-xl font-bold">3️⃣ Which planet is known as the Red Planet?</h2>
                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <label class="flex items-center"><input type="radio" name="q3" value="Venus" class="mr-2"> Venus</label>
                        <label class="flex items-center"><input type="radio" name="q3" value="Jupiter" class="mr-2"> Jupiter</label>
                        <label class="flex items-center"><input type="radio" name="q3" value="Mars" class="mr-2"> Mars</label>
                        <label class="flex items-center"><input type="radio" name="q3" value="Saturn" class="mr-2"> Saturn</label>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-bold">4️⃣ What is the square root of 144?</h2>
                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <label class="flex items-center"><input type="radio" name="q4" value="10" class="mr-2"> 10</label>
                        <label class="flex items-center"><input type="radio" name="q4" value="11" class="mr-2"> 11</label>
                        <label class="flex items-center"><input type="radio" name="q4" value="12" class="mr-2"> 12</label>
                        <label class="flex items-center"><input type="radio" name="q4" value="13" class="mr-2"> 13</label>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-bold">5️⃣ How many continents are there in the world?</h2>
                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <label class="flex items-center"><input type="radio" name="q5" value="5" class="mr-2"> 5</label>
                        <label class="flex items-center"><input type="radio" name="q5" value="6" class="mr-2"> 6</label>
                        <label class="flex items-center"><input type="radio" name="q5" value="12" class="mr-2"> 12</label>
                        <label class="flex items-center"><input type="radio" name="q5" value="7" class="mr-2"> 7</label>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="w-full py-3 text-xl font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-all mt-8">Submit ✅</button>
        </form>
    </div>
</body>
</html>
