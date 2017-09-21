<?php

namespace App\entities;

use App\utils\Encryptor as Encryptor;

class account {

    private $email;
    private $password;
    private $cidade;
    private $newPassword;


    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = Encryptor::encrypt($password);
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getNewPassword() {
        return $this->newPassword;
    }

    public function setNewPassword($newPassword) {
        $this->newPassword = Encryptor::encrypt($newPassword);
    }
}