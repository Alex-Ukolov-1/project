<?php


namespace App;


class User
{
private $message;

public function __construct($message=null)
{
    $this->message=$message;
}

public function setMessage()
{
    return $this->message;
}
public function getMessage($message)
{
     $this->message=$message;
}

}