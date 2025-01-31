<?php
if (isset($_GET['id']) && $_GET['id'] != null) {
    $id = $_GET['id'];
    require_once('classes/CRUD.php');
    $crud = new CRUD;
    $user = $crud->selectId('users', $id);
    if ($user) {
        extract($user);
    } else {
        header('location:user-index.php');
    }
} else {
    header('location:user-index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Show</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <div class="container-info">
            <h1>user</h1>
            <p><strong>Username: </strong><?= $username; ?></p>
            <p><strong>Password: </strong><?= $password; ?></p>
            <p><strong>Name: </strong><?= $name; ?></p>
            <p><strong>Email: </strong><?= $email; ?></p>
            <a href="user-edit.php?id=<?= $id; ?>" class="btn">Edit</a>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>