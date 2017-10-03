<?php

namespace App\controllers;

use App\entities\Account as Account;
use App\dao\AccountDAO as AccountDAO;

class UsersController {

    public function signIn() {
        return include('lib/views/users/sign_in.php');      
    }

    

    public function cadastroProduto() {
        return include('lib/views/users/sign_up.php');      
    }

    public function cadastrar() {
        $produto = $_POST['produto'];
        $preco = $_POST['preco'];

        $prd = new Produto();
        $prd->setProduto($produto);
        $prd->setPreco($preco);
        

        $pdao = new ProdutoDAO();
        
        if($adao->produtoExist($produto)) {
            $_SESSION['error'] = "Produto já cadastrado.";
            header("Location: /users/sign_up");
        } else {
            $adao->insertProduto($prd);
            $_SESSION['msg'] = "Produto cadastrado com sucesso.";
            header('Location: /users/sign_in');
        }
    }



    public function updatePreco($pre1){

        $acc = new Produto();
        $acc->setProduto($produto);
        $acc->setPreco($pre1);
        
        $pdao = new ProdutoDAO();
        
        if($adao->updatePreco($prd)) {
            unset($_SESSION['recoverEmail']);
            $_SESSION['msg'] = "Preco atualizado com sucesso.";
            header("Location: /users/sign_in");
        } else {
            $_SESSION['error'] = "Houve um erro ao atualizar o preço.";
            header('Location: /users/new_password_form');
        }
    }
}
       

        