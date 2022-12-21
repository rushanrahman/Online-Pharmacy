<?php
class UserController{
    private $user;
    private $username;

    function __construct()
    {
        $this->user=new UserModel();
        $this->username=$this->user->getUserName();
    }

}
?>