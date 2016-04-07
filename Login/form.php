<?php
//Valor de ID único e randômico que será utilizado como Token para cada usuário no site.
$crsf_token = uniqid(rand(), TRUE);

//INICIA SESSÃO
session_start();

//Campo input do formulário que o usuário não precisa enxergar.
echo '<input type="hidden" name="csrf_token" value="' . $crsf_token . '" />';
?>
<form method="post"action="handle_form.php">
    <div class="form-group">
        <label class="string optional" for="user_email">Login/Email*</label>
        <input class="form-control" maxlength="255" name="user_email" id="user_email" size="50" type="email" value="" placeholder="Seu e-mail">
    </div>
    <div class="form-group">
        <label class="string optional" for="user_senha">Sua senha*</label>
        <input type="password" maxlength="8" class="form-control" name="user_senha" placeholder="Sua senha..." value="">
    </div>
    <div class="checkbox">
        <label for="lembrar"><input type="checkbox" name="lembrar" checked>Lembrar Senha</label>
    </div>
    <div class="mensagem-erro h6" style="width: 100%; margin: auto;"></div>
    <div class="loader" style="display: none;">
        <img itemprop="image" class="lazy" src="/../img/load.gif" alt="Carregando">
    </div>
    <button class="btn green" type="submit" name="submit" style="width: 100%;">Entrar</button>
</form>
