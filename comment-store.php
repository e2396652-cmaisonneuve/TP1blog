<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('comments', $_POST);
header('location:comment-index.php?id=' . $insert);
