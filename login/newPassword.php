<?php
    require('start.php');    
    require('partials/_signed_in.php');

    use App\utils\Alert as Alert;

    if (!isset($_SESSION['recoverEmail'])) {
        $_SESSION['error'] = "Ação não autorizada.";
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <?php require_once('partials/_head.php'); ?>
    <body>
        <div class="container">
            <div class="card card-container">
                <?php
                    Alert::showMessages();
                ?>
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card">Alterar Senha</p>
                <form class="form-signin" action="alterarSenha.php" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="password" name="newPassword" id="inputnewPassword" class="form-control" placeholder="Nova Senha" required autofocus>
                    <input type="password" name="confirmarPassword" id="inputconfirmarPassword" class="form-control" placeholder="Confirmar Senha" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Alterar</button>
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->

    </body>
</html>