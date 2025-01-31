<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('articles');
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

        ?>
            <article>
                <div class="post-title">
                    <h2><?= $row['title']; ?></h2>
                    <div class="categories"><small>Category: Nome Categoria</small></div>
                </div>
                <div class="post-content">
                    <p><?= $row['content']; ?></p>
                </div>
                <div class="post-footer">
                    <div class="post-info">by Nome User (email user)</strong> on <?= $row['date']; ?></div>
                    <div class="post-edit">edit | delete</div>
                </div>
                <div class="post-comments">
                    <h4>Comments</h4>
                    <div class="comment">
                        <div class="comment-text">MESSAGE COMMENT</div>
                        <div class="comment-info"><small>AUTHOR COMMENT on DATE</small></div>
                    </div>
                </div>
            </article> <?php
                    }
                        ?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>