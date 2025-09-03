<?php 
require_once "./config/config.php";
require_once "./core/database.php";
require_once "./app/Models/UserModel.php";
require_once "./app/Controllers/UserController.php";
$user = new UserController();
$user->index();
echo "<pre>";
print_r($user->index());
echo "</pre>";

?>