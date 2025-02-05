<?php
// print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
if ($crud->update('comments', $_POST)) {
    header('location:comment-index.php');
} else {
    echo "error";
}
