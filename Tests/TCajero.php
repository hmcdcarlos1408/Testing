<?php
use PHPUnit\Framework\TestCase;
class TCajero extends TestCase{
  
public function test_Successwithdraw():void{
    $outmony=200;
    $AMA=1000;
    $MATM=5000;
    $pin=4987;
    $op = new Cajero;
    $ATM = $op->ATM($pin,$outmony,$AMA,$MATM);
    $this->assertEquals("Success Account update",$ATM);
}

public function test_ATM_Out_of_Money():void{
    $outmony=200;
    $AMA=800;
    $MATM=0;
    $pin=4987;
    $op = new Cajero;
    $ATM = $op->ATM($pin,$outmony,$AMA,$MATM);
    $this->assertEquals("withdraw option invalida",$ATM);
}
public function test_Insufficent_founds():void{
    $outmony=200;
    $AMA=800;
    $MATM=100;
    $pin=4987;
    $op = new Cajero;
    $ATM = $op->ATM($pin,$outmony,$AMA,$MATM);
    $this->assertEquals("Warning message Enter Amount",$ATM);
}
 
public function test_Amount_is_not_M100():void{
    $outmony=50;
    $AMA=800;
    $MATM=5000;
    $pin=4987;
    $op = new Cajero;
    $ATM = $op->ATM($pin,$outmony,$AMA,$MATM);
    $this->assertEquals("Enter Amount",$ATM);
}
public function test_Incorrect_Pin():void{
    $outmony=0;
    $AMA=800;
    $MATM=5000;
    $pin=4978;
    $op = new Cajero;
    $ATM = $op->ATM($pin,$outmony,$AMA,$MATM);
    $this->assertEquals("Warning message card Retained or not",$ATM);
}
 }
?>