<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('categories', $_POST);
header('location:categorie-index.php?id=' . $insert);
