<?php   
    require('partials/_signed_in.php');

    use App\utils\Alert as Alert;
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
                <p id="profile-name" class="profile-name-card">Cadastrar Produto</p>
                <form class="form-signin" action="/users/login" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" name="produto" id="inputProduto" class="form-control" placeholder="Produto" required autofocus>
                    <input type="number" name="preco" id="inputPreco" class="form-control" placeholder="Preço" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastrar</button>
                </form><!-- /form -->
                <a href="/users/recover_form" class="forgot-password">
                    Alterar Preço?
                </a>
            </div><!-- /card-container -->
        </div><!-- /container -->

    </body>
</html>