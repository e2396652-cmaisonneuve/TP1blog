<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('users', 'name', 'desc');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <h1>Users</h1>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($select as $row) {

                ?>
                    <tr>
                        <td><?= $row['username']; ?></td>
                        <td><?= $row['password']; ?></td>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td> <a href="user-show.php?id=<?= $row['id']; ?>" class="btn">View</a></td>
                        <td>
                            <form action="user-delete.php" method="post">
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <input type="submit" class="btn red" value="delete">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>