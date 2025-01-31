<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('articles', $_POST);
header('location:article-index.php');
