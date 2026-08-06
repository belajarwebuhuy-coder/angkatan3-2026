<?php

class User 
{
    
    // encaptulation:  terbuka(public), tertutup(private) cuma bisa di akses di dalam class
    // property
    private $id;
    private $name;
    private $email;
    private $password;
    
    // Setter & Getter : React js, OOP PHP
    public function __construct($idParams, $nameParams, $emailParams, $passwordParams)
    {
        $this->id = $idParams;
        $this->name = $nameParams;
        $this->email = $emailParams;
        $this->password = $passwordParams;
    }

    public function getProfile()
    {
        return "Nama Lengkap : {$this->name} <br> Email : {$this->email} <br> Password : {$this->password}";
    }

    public function setName($name = "laras")
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$user = new User("1", "Wahyu Cuiras", "wahyu@gmail.com", "123");
$user->setName("Bambang Pamungkas");
echo $user->getProfile();