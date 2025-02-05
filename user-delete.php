<?php
//print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
$delete = $crud->delete('users', $_POST['id']);

if ($delete) {
    header('location:user-index.php');
} else {
    echo "error";
}
