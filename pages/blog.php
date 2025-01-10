<?php
require '../db.php';
require '../Class/Authentication.php';

// $out = new Authentication($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <div class="navbar flex justify-between bg-white shadow-md p-4">
            <div class="flex-1">
                <a class="text-2xl font-bold text-indigo-600" href="#">B.Post</a>
            </div>
            <div class="flex-none">
                <ul class="flex space-x-4">
                    <li><a class="text-gray-700 hover:text-indigo-600" href="#">Home</a></li>
                    <li><a class="text-gray-700 hover:text-indigo-600" href="#">Blog</a></li>
                    <li><a class="text-gray-700 hover:text-indigo-600" href="#">Contact</a></li>
                    <li>
                        <details class="relative">
                            <summary class="hover:underline text-red-600 cursor-pointer hover:text-indigo-600" style="list-style: none;">Abdelilah</summary>
                            <ul class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                                <li><a class="block px-4 py-2 text-gray-700 hover:bg-indigo-600 hover:text-white" href="#">Edit</a></li>
                                <li><a class="block px-4 py-2 text-gray-700 hover:bg-indigo-600 hover:text-white" href="../pages/login/login.php">
                                    <form action="../pages/logout/logout.php" method="post">
                                        <input type="submit" value="Log-out">
                                    </form>
                                </a></li>
                            </ul>
                        </details>
                    </li> 
                </ul>
            </div>
        </div>
</body>
</html>