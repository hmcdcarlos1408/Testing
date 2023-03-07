<?php
use PHPUnit\Framework\TestCase;
class Suma extends TestCase
{
   public function test_Sum(){
    $op = new Operations;
    $res = $op->sum(2,6);
    $this->assertEquals(8,$res);
   }
   
}
?>