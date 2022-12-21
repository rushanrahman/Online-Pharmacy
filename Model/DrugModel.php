<?php
class DrugModel{
    public $name;
    public $invID;
    public $chemicalCompound;
    public $price;
    public $stockAmount;
    public $verified;

    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    function setInvID($name){
        $this->invID=$name;
    }
    function getInvID(){
        return $this->invID;
    }
    function setChemicalCompound($name){
        $this->chemicalCompound=$name;
    }
    function getChemicalCompound(){
        return $this->chemicalCompound;
    }
    function setPrice($name){
        $this->price=$name;
    }
    function getPrice(){
        return $this->price;
    }
    function setStockAmount($name){
        $this->stockAmount=$name;
    }
    function getStockAmount(){
        return $this->stockAmount;
    }
    function setVerified($name){
        $this->verified=$name;
    }
}
?>