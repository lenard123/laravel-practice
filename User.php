<?php

class User
{
    public $id;
    public $firstname;
    public $lastname;
    public $type;
    public $email;
    public $password;

    public function __construct($id, $firstname, $lastname, $type, $email, $password)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->type = $type;
        $this->email = $email;
        $this->password = $password;
    }

    public function update()
    {

    }

    public static function getAll()
    {
        //
    }
}

