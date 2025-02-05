<?php
//print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
$delete = $crud->delete('articles', $_POST['id']);

if ($delete) {
    header('location:article-index.php');
} else {
    echo "error";
}
