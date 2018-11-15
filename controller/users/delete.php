<?php

//load models
require_once ABS_PATH . 'model/users_model.php';

//print_r($_GET['id']);
//die();

//prepare data
$table = 'main';
$params = array(
    "id" => $_GET['id'],
);

$deleteData = deleteOneUser($table, $params);
$data = getAllUsers();

//show
require_once ABS_PATH . 'view/header.php';
require_once ABS_PATH . 'view/users/show_view.php';
require_once ABS_PATH . 'view/footer.php';