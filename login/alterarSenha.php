<?php

require('start.php');

    use App\dao\AccountDAO as AccountDAO;
    use App\entities\account as account;

    $password = $_POST['password'];

    $acc = new account();
    $acc->getPassword($password);

    $adao = new AccountDAO();

    $adao -> alterarPassword($account);

    header("Location: login.php");