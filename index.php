<?php include "database/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <h2>USERS</h2>

    <a href="src/create.php">Add New User</a>

    <table border="1" cellpadding"10"></table>

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gmail</th>
        <th>Password</th>
    </tr>

    <?php
        $result = $conn->query("SELECT * FROM users");
        while($row = $result->fetch_assoc()):
    ?>

    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['gmail'] ?></td>
        <td><?= $row['password'] ?></td>

        <td>
            <a href="src/update.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="src/delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</body>
</html>