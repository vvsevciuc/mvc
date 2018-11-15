<?php 
//load models
require_once ABS_PATH . 'model/users_model.php';

//prepare data
$table = 'main';
$new_data = array(
    "user" => $_POST['name'],
    "email" => $_POST['email'],
);

$insertData = insertOneUser($table, $new_data);
$data = getAllUsers();

//show
require_once ABS_PATH . 'view/header.php';
require_once ABS_PATH . 'view/users/show_view.php';
require_once ABS_PATH . 'view/footer.php';