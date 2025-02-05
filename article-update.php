<?php
//print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
if ($crud->update('articles', $_POST)) {
    header('location:article-index.php');
} else {
    echo "error";
}
