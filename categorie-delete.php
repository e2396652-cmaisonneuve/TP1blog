<?php
//print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
$delete = $crud->delete('categories', $_POST['id']);

if ($delete) {
    header('location:categorie-index.php');
} else {
    echo "error";
}
