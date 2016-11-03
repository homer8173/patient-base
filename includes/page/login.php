<h1>Authentification</h1>
<form method="POST">
    <input type="hidden" value=""/>
    <div class="row input-group input-group-lg">
        <span class="input-group-addon">Utilisateur</span>
        <input type="text" name="login" class="form-control" value="<?= (isset($_POST['login']))?$_POST['login']:""; ?>" placeholder="Votre identifiant ici" />
    </div>
    <p>&nbsp;</p>
    <div class="row input-group input-group-lg">
        <span class="input-group-addon">Mot de passe</span>
        <input type="password" name="password" class="form-control" placeholder="Votre mot de passe ici" />
    </div>
    <p>&nbsp;</p>
    <div class="row text-center"><input type="submit" class="btn btn-success btn-lg" value="Identifier moi"/></div>
</form>

