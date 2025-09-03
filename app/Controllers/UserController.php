<?php 
class UserController {
    public $user;
    function __construct()
    {
        $this->user = new UserModel();
    }

    function index(){
        return $this->user->getAllUser();
    }
}
?>