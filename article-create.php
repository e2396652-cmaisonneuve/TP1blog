<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('articles');
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
            <form action="article-store.php" method="post">
                <h2>New article</h2><br>

                <label>Title
                    <input type="text" name="title">
                </label>

                <label>Content<br>
                    <textarea id="content" name="content" rows="4" cols="50"></textarea>
                </label>
                <label for="users_id">User</label>
                <select name="users_id" id="users_id">
                    <?php
                     $users = $crud->select("users");
                    foreach ($users as $user) {
                       
                    ?>
                        <option value="<?= $user['id']; ?>"><?= $user['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label for="categories_id">Categorie</label>
                <select name="categories_id" id="categories_id">
                    <?php
                     $categories = $crud->select("categories");
                    foreach ($categories as $categorie) {
                       
                    ?>
                        <option value="<?= $categorie['id']; ?>"><?= $categorie['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label>Date
                    <input type="date" id="date" name="date">
                </label>

                <input type="submit" value="Save" class="btn">
            </form>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>