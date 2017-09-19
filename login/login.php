<?php
    require('start.php');
    require("lib/Encryptor.php");
    require("lib/ConnectionFactory.php");
    
    use App\entities\Account as Account;
    use App\dao\AccountDAO as AccountDAO;
    

    $email = $_POST['email'];
    $password = $_POST['password'];

    $acc = new Account();
    $acc -> setEmail($email);
    $acc -> setpassword($password);

    $adao = new AccountDAO();
    
    $validated = $adao->verifyData($email, $encrypted_password);

    if($validated) {
        $_SESSION['signed_in'] = true;
        header("Location: dashboard.php");
    } else {
        $_SESSION['error'] = "Usuário e senha não correspondem ou não existe.";
        header("Location: index.php");
    }
?>
