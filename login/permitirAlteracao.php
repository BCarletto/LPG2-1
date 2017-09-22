<?php
    require('start.php');

    use App\dao\AccountDAO as AccountDAO;
    use App\entities\account as account;

    $email = $_POST['email'];
    $cidade = $_POST['cidade'];

    $acc = new account();
    $acc->setEmail($email);
    $acc->setCidade($cidade);

    $adao = new AccountDAO();
    
    if($adao->verificaAlteracao($account)) {
        $_SESSION['recoverEmail'] = $email;
       header ("Location: newPassword");
    } else {
        $_SESSION['error'] = "E-mail ou cidade incorretos.";
        header("Location: login.php");
    }
    
?>
