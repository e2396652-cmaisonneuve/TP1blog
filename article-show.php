<?php
if (isset($_GET['id']) && $_GET['id'] != null) {
    $id = $_GET['id'];
    require_once('classes/CRUD.php');
    $crud = new CRUD;
    $article = $crud->selectId('articles', $id);
    if ($article) {
        extract($article);
    } else {
        header('location:article-index.php');
    }
} else {
    header('location:article-index.php');
}

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
        <div class="container-info">
            <h1>Article</h1>
            <p><strong>Title: </strong><?= $title; ?></p>
            <p><strong>Content: </strong><?= $content; ?></p>
            <p><strong>Date: </strong><?= $date; ?></p>
            <a href="article-edit.php?id=<?= $id; ?>" class="btn">Edit</a>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>