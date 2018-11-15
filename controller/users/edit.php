<?php
//load models
require_once ABS_PATH . 'model/users_model.php';

//prepare data
$columns = "*";
$table = "main";
$params = array(
    "id" => $_GET['id'],
);

$data = getOneUser($columns, $table, $params);
//print_r($data);
//die();

//show
require_once ABS_PATH . 'view/header.php';
require_once ABS_PATH . 'view/users/edit_view.php';
require_once ABS_PATH . 'view/footer.php';

?>