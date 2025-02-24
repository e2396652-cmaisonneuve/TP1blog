<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
//$select = $crud->select('user', 'name', 'desc');
//print_r($select);

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
        <div class="container">
            <form action="user-store.php" method="post">
                <h2>New user</h2><br>
                <label>Username
                    <input type="text" name="username">
                </label>
                <label>Password
                    <input type="text" name="password">
                </label>
                <label>Name
                    <input type="text" name="name">
                </label>
                <label>E-mail
                    <input type="email" name="email">
                </label>

                <input type="submit" value="Save" class="btn">
            </form>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>