<?php
class PrescriptionModel{
    private $prescriptionImage;
    private $checkedStatus;
    private $doctorName;

    function setPrescriptionImage($name){
        $this->prescriptionImage=$name;
    }
    function getPrescriptionImage(){
        return $this->prescriptionImage;
    }
    function setCheckStatus($name){
        $this->checkedStatus=$name;
    }
    function getCheckStatus($name){
        return $this -> checkedStatus;
    }
    function setDoctorName($name){
        $this->doctorName=$name;
    }
    function getDoctorName(){
        return $this->doctorName;
    }
}
?>