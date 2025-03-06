<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- All Libraries -->
    <?php include_once('resources\layouts\libraries.php'); ?>
</head>

<body>
    <div class="w-full h-full flex items-center justify-center h-screen bg-gray-100">

        <form action="/auth/login" method="post">
            <div class="mb-6">
                <label for="userName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                    name</label>
                <input type="text" id="userName" name="userName"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="quangvnn" required />
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                    class="font-medium"><?= $errorMessage['userName'] ?? "" ?></span></p>
            </div>
            <div class="mb-6">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="•••••••••" required />
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                        class="font-medium"><?= $errorMessage['password'] ?? "" ?></span></p>
            </div>
            <div class="flex items-start mb-6">
                <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Forgot password?</a>
                </label>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
        </form>

    </div>

    <!-- All scripts -->
    <?php include_once('resources\layouts\scripts.php'); ?>
</body>

</html>