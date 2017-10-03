<?php
namespace App\dao;

use App\db\ConnectionFactory as ConnectionFactory;
use \PDO;

class ProdutoDAO {

    public function insertProduto($product) {
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('INSERT INTO produtos (produto, preco)
                                    VALUES(:produtos, :preco)');
        $status = $stmt->execute(array(
            ':produto' => $product->getProduto(),
            ':preco' => $product->getPreco()
        ));
        
        return $status;        
    }

    public function verifyData($product) {
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('SELECT * FROM produtos 
                                    WHERE produto = :produto AND preco = :preco');
        
        $status = $stmt->execute(array(
            ':produto' => $product->getProduto(),
            ':preco' => $product->getPreco()
        ));
        
        return $stmt->fetch(PDO::FETCH_OBJ);        
    }



    public function produtoExist($produto) {
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('SELECT * FROM produtos WHERE produto = :produto');
        $stmt->execute(array(
            ':produto' => $produto
        ));
        
        return $stmt->fetch(PDO::FETCH_OBJ);        
    }

    public function updatePreco($product) {
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('UPDATE produtos set preco = :preco
                                    WHERE produto = :produto');
        $status = $stmt->execute(array(
            ':produto' => $product->getProduto(),
            ':preco' => $product->getPreco()
        ));
        
        return $status;        
    }

}