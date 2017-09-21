<?php
namespace App\dao;

use App\db\ConnectionFactory as ConnectionFactory;
use \PDO;

class AccountDAO {

    public function insertAccount($account) {
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('INSERT INTO account (email, password, cidade)
                                    VALUES(:email, :ep, :cidade)');
        $status = $stmt->execute(array(
            ':email' => $account->getEmail(), 
            ':ep' => $account->getPassword(),
            ':cidade' => $account->getCidade()
        ));
        
        return $status;        
    }

    public function verifyData($account) {
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('SELECT * FROM account 
                                    WHERE email = :email AND password = :ep');
        
        $status = $stmt->execute(array(
            ':email' => $account->getEmail(),
            ':ep' => $account->getPassword()
        ));
        
        return $stmt->fetch(PDO::FETCH_OBJ);        
    }

    public function emailExist($email) {
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('SELECT * FROM account WHERE email = :email');
        $stmt->execute(array(
            ':email' => $email
        ));
        
        return $stmt->fetch(PDO::FETCH_OBJ);        
    }

    public function verificaAlteracao($account){
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('SELECT * FROM account 
                                    WHERE email = :email AND cidade = :cidade');
        
        $status = $stmt->execute(array(
            ':email' => $account->getEmail(),
            ':cidade' => $account->getCidade()
        ));
        
        return $stmt->fetch(PDO::FETCH_OBJ);        
    }

    public function alterarPassword($account){
        $cf = new ConnectionFactory();

        $stmt = $cf->conn->prepare('UPDATE account 
                                    SET password = newPassword
                                    WHERE password = :ep');

        $status = $stmt->execute(array(
        ':ep' => $account->getNewPassword()
        ));

    }
}