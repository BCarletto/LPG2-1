<?php

namespace App\entities;
class Account {

    private $produto;
    private $preco;
    


    public function getProduto() {
        return $this->produto;
    }

    public function setEmail($produto) {
        $this->email = $produto;
    }


    public function getPreco() {
        return $this->preco;
    }

    public function setPassword($preco) {
        $this->preco = $preco;
    }

}