<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
private $user;
protected  function setUp() : void
{
    $this->user = new User();
    $this->user->setMessage("hellow!!!");
}
 protected  function tearDown():void
 {

 }

 public function testMessage()
 {
     $this->assertEquals(expected:hellow!!!,$this->user->getMessage());

 }
 
}