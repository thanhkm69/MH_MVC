<?php
class UserController extends PageController {
    private $userModel;

    function __construct() {
        $this->userModel = new UserModel();
    }

    function index() {
        $users = $this->userModel->getAllUser();
        // truyền biến rõ ràng sang view
        $this->renderView("user", ["users" => $users], "Quản lý người dùng");
    }
}
