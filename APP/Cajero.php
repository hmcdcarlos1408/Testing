<?php
class Cajero{
    public function ATM($pin,$outmony,$AMA,$MATM){
        if ($pin!=4987){
           return "Warning message card Retained or not";
        }
        if($MATM==0){
            return "withdraw option invalida";
        }
        if($outmony>$MATM){
            return "Warning message Enter Amount";
        }
        if(($outmony%100)!=0){
            return "Enter Amount";
        }
        return "Success Account update";
    }
}
?>