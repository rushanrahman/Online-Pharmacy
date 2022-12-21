<?php
class PharmacistController{
    private $pharmacistModel;

    function __construct()
    {
        $this->pharmacistModel=new PharmacistModel();
    }
}
?>