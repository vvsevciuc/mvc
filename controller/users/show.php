<?php

//load models
require_once ABS_PATH . 'model/users_model.php';

//prepare data
$data = getAllUsers();

//show
require_once ABS_PATH . 'view/header.php';
require_once ABS_PATH . 'view/users/show_view.php';
require_once ABS_PATH . 'view/footer.php';
