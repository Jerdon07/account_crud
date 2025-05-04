<?php include "./database/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>Document</title>
</head>

<body class="text-center bg-blue-100 flex justify-center items-center h-screen">

    <div class="h-100 w-100 bg-white rounded-xl p-5">
        <h1 class="text-2xl font-semibold mb-5">LOGIN</h1>

        <form action="" method="POST" class="bg-red-100">
            <input type="text" name="username" placeholder="Account" required class="h-12 w-90 bg-gray-200 mb-5"><br>
            <input type="password" name="password" placeholder="Password" required class="h-12 w-90 bg-gray-200 mb-5 pb-5"><br>
            <input type="submit" name="submit" value="Login" class="bg-red-200 text-white rounded-sm p-2 mt-3">
        </form>
    </div>

</body>
</html>