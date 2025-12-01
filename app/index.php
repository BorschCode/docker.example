<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test: Designed Greeting</title>
    <!-- Loading Tailwind CSS for modern styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for a more pleasant font */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-4">

<!-- Main container with modern styles -->
<div class="bg-gray-800 p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-lg text-center border border-indigo-600">

    <!-- Header -->
    <h1 class="text-4xl font-extrabold text-indigo-400 mb-6">
        PHP Test: Greeting
    </h1>

    <!-- PHP Block - This is the part that generates content -->
    <?php
    // Defining the output message
    $message = 'Hello, World!';
    ?>

    <!-- Displaying the message in a stylized paragraph -->
    <div class="bg-indigo-900/30 p-4 rounded-lg border border-indigo-700">
        <?php
        echo '<p class="text-2xl font-semibold text-gray-100">' . $message . '</p>';
        ?>
    </div>

    <p class="mt-8 text-sm text-gray-400">
        This is an example of a simple page styled using Tailwind CSS. The PHP code is embedded in the center.
    </p>
</div>

</body>
</html>