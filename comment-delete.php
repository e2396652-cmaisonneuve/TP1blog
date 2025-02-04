<?php
//print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
$delete = $crud->delete('comments', $_POST['id']);

if ($delete) {
    header('location:comment-index.php');
} else {
    echo "error";
}
