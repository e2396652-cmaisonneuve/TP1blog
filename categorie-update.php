<?php
//print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
if ($crud->update('categories', $_POST)) {
    header('location:categorie-index.php');
} else {
    echo "error";
}
