<?php
class PharmacistModel{
    public $name;
    public $userName;
    public $phone;
    public $qualifications;

    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    function setUserName($name){
        $this->userName=$name;
    }
    function getUserName(){
        return $this->userName;
    }
    function setPhone($name){
        $this->phone=$name;
    }
    function getPhone(){
        return $this->phone;
    }
    function setQualifications($name){
        $this->qualifications->$name;
    }
    function getQualifications(){
        return $this->qualifications;
    }
}
?>