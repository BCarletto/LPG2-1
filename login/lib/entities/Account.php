<?php

require ('start.php');

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $encrypted_password = Encryptor::encrypt($password);

    class Account{
        
    public function getEmail(){
        return $this->email;
    }

    public function setEmail(){
        $this->email = $email;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword(){
        $this->password = $password;
        return $this;
    }
}


