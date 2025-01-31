<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('articles');


// $selectUser = $crud->select('users');
// $selectComment = $crud->select('comments');
// $selectCategories = $crud->select('categories');
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
        <?php
        foreach ($select as $row) {
            // print_r($row);

            // echo $row['users_id'];
            // echo "<br>";
            // echo $row['categories_id'];
            $user = $crud->selectId("users", $row['users_id']);
            $categorie = $crud->selectId("categories", $row['categories_id']);

        ?>
            <article>
                <div class="post-title">
                    <h2><?= $row['title']; ?></h2>
                    <div class="categories"><small>Category: <?= $categorie['name']; ?></small></div>
                </div>
                <div class="post-content">
                    <p><?= $row['content']; ?></p>
                </div>
                <div class="post-footer">
                    <div class="post-info">by <?= $user['name']; ?> (<?= $user['email']; ?>)</strong> on <?= $row['date']; ?></div>
                    <div class="post-edit">edit | delete</div>
                </div>
                <div class="post-comments">
                    <h4>Comments</h4>
                    <?php
                    $comments = $crud->selectWhere("comments", $row['id'], "articles_id");
                    // print_r($comment)
                    foreach ($comments as $comment) {
                        $commentAuthor = $crud->selectId("users", $comment['users_id']);

                    ?>

                        <div class="comment">
                            <div class="comment-text"><?= $comment['message']; ?></div>
                            <div class="comment-info"><small><?= $commentAuthor['name']; ?> on <?= $comment['date']; ?></small></div>
                        </div>
                    <?php } ?>


                </div>
            </article> <?php
                    }
                        ?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>