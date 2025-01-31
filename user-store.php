<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('users', $_POST);
header('location:user-index.php');
