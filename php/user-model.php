<?php

class User
{
    private $id, $name, $login;
    function __construct($id, $name, $login)
    {
        $this->id = $id;
        $this->name = $name;
        $this->login = $login;
    }
}
