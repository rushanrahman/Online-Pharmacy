<?php
class UserModel{
    // properties
    private $name;
    public $username;
    private $password;
    private $phone;
    private $email;

    function setName($name) {
        $this->name = $name;
    }
    function getName() {
        return $this->name;
    }
    function setUsername($name) {
        $this->username = $name;
    }
    function getUserName() {
        return $this->username;
    }    
    function setpassword($name) {
        $this->password = $name;
    }   
    function setPhone($name) {
        $this->phone = $name;
    }
    function getPhone() {
        return $this->phone;
    }    
    function setEmail($name) {
        $this->email = $name;
    }
    function getEmail() {
        return $this->email;
    }

}
?>