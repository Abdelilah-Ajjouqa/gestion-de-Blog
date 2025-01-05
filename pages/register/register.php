<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-blue-50">
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
                <!-- <li>
                    <details class="relative">
                        <summary class="hover:underline text-red-600 cursor-pointer hover:text-indigo-600" style="list-style: none;">Abdelilah</summary>
                        <ul class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                            <li><a class="block px-4 py-2 text-gray-700 hover:bg-indigo-600 hover:text-white" href="#">Edit</a></li>
                            <li><a class="block px-4 py-2 text-gray-700 hover:bg-indigo-600 hover:text-white" href="#">Log-out</a></li>
                        </ul>
                    </details>
                </li> -->
            </ul>
        </div>
    </div>

    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Create your account</h1>

            <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti
                inventore quaerat mollitia?
            </p>

            <form method="post" action="./formRegister.php" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Sign up for your account</p>

                <div>
                    <label for="name" class="sr-only">Name</label>

                    <div class="relative">
                        <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter name" />

                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div>
                    <label for="email" class="sr-only">Email</label>

                    <div class="relative">
                        <input type="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter email" />

                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>

                    <div class="relative">
                        <input id="password" type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter password" />

                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>

                    <div class="relative">
                        <input id="password_confirmation" type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Confirm password" />

                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <button type="submit"
                    class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                    Sign up
                </button>

                <p class="text-center text-sm text-gray-500">
                    Already have an account?
                    <a class="underline text-blue-500" href="./login.php">Sign in</a>
                </p>
            </form>
        </div>
    </div>

    <script>
        const password = document.getElementById('password');
        const password_confirmation = document.getElementById('password_confirmation');

        password_confirmation.addEventListener('input', (e) => {
            if (password.value !== e.target.value) {
                e.target.setCustomValidity('Passwords do not match');
            } else {
                e.target.setCustomValidity('');
            }
        });
    </script>
</body>

</html>