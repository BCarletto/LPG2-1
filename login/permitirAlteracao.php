<?php
    require('start.php');

    use App\dao\AccountDAO as AccountDAO;
    use App\entities\account as account;

    $email = $_POST['email'];
    $cidade = $_POST['cidade'];

    $acc = new account();
    $acc->getEmail($email);
    $acc->getCidade($cidade);

    $adao = new AccountDAO();
    
    if($adao->verificaAlteracao($account)) {
       header ("Location: newPassword");
    } else {
        $_SESSION['error'] = "E-mail já cadastrado.";
        header("Location: login.php");
    }
    
?>
