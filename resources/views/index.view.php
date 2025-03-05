<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- All Libraries -->
    <?php require_once('resources\layouts\libraries.php'); ?>
</head>

<body>
    <div>
        <form action="/auth/login" method="POST">
            <table>
                <tbody>
                    <tr>
                        <td>User name</td>
                        <td>
                            <input type="text" name="userName" placeholder="Enter user name...">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password" placeholder="Enter password...">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit">Login</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <span style="color: red;"><?= $errorMessage['userName'] ?? "" ?></span>
            <span style="color: red;"><?= $errorMessage['password'] ?? "" ?></span>
        </form>
    </div>

    <!-- All scripts -->
    <?php require_once('resources\layouts\scripts.php'); ?>
</body>

</html>