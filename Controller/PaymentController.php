<?php
class PaymentController{
    private $paymentModel;
    private $status;
    function __construct()
    {
     $this->paymentModel=new PaymentModel();
     $this->status=$this->paymentModel->getStatus();  
    }
}
?>