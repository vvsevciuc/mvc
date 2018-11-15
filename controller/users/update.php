<?
//load models
require_once ABS_PATH . 'model/users_model.php';

//prepare data
$table = 'main';
$new_data = array(
    "user" => $_POST['name'],
    "email" => $_POST['email'],
);
$params = array(
    "id" => $_GET['id'],
);

$updateData = updateOneUser($table, $new_data, $params);
$data = getAllUsers();

//show
require_once ABS_PATH . 'view/header.php';
require_once ABS_PATH . 'view/users/show_view.php';
require_once ABS_PATH . 'view/footer.php';