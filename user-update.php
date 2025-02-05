<?php
print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
if ($crud->update('users', $_POST)) {
    header('location:user-index.php');
} else {
    echo "error";
}
