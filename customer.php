<?php

class Customer{

    private string $_id;
    private string $_firstname;
    private string $_lastname;
    private ?string $_email;

    public function __construct()


}

public function get_id()
{
    return $this -> _id;
}