<div class="row">
    <h1> Ajouter un praticient <small></small></h1>

    <div class="col-md-12">
        <form action="addpraticient/" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" name="id_parent" value="<?= $u->iduser ?>" />
            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <h2>Informations personnelles</h2>             
            <div class="form-group">
                <label for="username" class="col-sm-4 control-label">Nom complet<sup>*</sup></label>
                <div class="col-sm-8">
                    <input type="text" name="username" class="form-control" id="username" placeholder="ex: M. Jean-Claude Duss" value="<?= (isset($_POST['username'])) ? $_POST['username'] : "" ?>" autocomplete="off" />
                </div>
            </div>          
            <div class="form-group">
                <label for="sex" class="col-sm-4 control-label">Sexe</label>
                <div class="col-sm-8 ">
                    <div class="radio">
                        <label class="radio-inline"><input type="radio" name="sex" value="female" <?= (isset($_POST['sex']) && $_POST['sex'] == 'female') ? "checked" : "" ?> /> Femme</label>
                        <label class="radio-inline"><input type="radio" name="sex" value="male" <?= (isset($_POST['sex']) && $_POST['sex'] == 'male') ? "checked" : "" ?> /> Homme</label>
                    </div>
                </div>
            </div>                 
            <div class="form-group">
                <label for="birthdate" class="col-sm-4 control-label">Date de naissance</label>
                <div class="col-sm-8">
                    <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="ex: 14/07/1789" value="<?= (isset($_POST['birthdate'])) ? $_POST['birthdate'] : "" ?>" autocomplete="off" />
                </div>
            </div>               
            <div class="form-group">
                <label for="exampleInputFile" class="col-sm-4 control-label">Photo de profil</label>
                <div class="col-sm-8">
                    <input type="file" name="picture" id="exampleInputFile" accept="image/*" capture="camera" />
                </div>
            </div>       
            <div class="form-group">
                <label for="comment" class="col-sm-4 control-label">Commentaires</label>
                <div class="col-sm-8">
                    <textarea name="comment" id="comment" class="form-control" rows="3"><?= (isset($_POST['comment'])) ? $_POST['comment'] : "" ?></textarea>
                </div>
            </div>
            <h2>Identification</h2>             
            <div class="form-group">
                <label for="user" class="col-sm-4 control-label">Identifiant<sup>*</sup></label>
                <div class="col-sm-8">
                    <input type="text" name="user" class="form-control" id="user" placeholder="ex: jeanclaudeduss" value="<?= (isset($_POST['user'])) ? $_POST['user'] : "" ?>"  autocomplete="off" autocapitalize="off" />
                </div>  
            </div>             
            <div class="form-group">
                <label for="password" class="col-sm-4 control-label">Password<sup>*</sup></label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <input type="text" name="password" class="form-control" id="password" placeholder="ex: ZeBrE_8173" value="" autocomplete="off" autocapitalize="off" />
                        <span class="input-group-btn">
                            <button class="btn btn-default" id="new_pass" type="button">Générer</button>
                        </span>
                    </div>
                </div>  
            </div>
            <h2>Contact</h2>                
            <div class="form-group">
                <label for="telephone" class="col-sm-4 control-label">Telephone</label>
                <div class="col-sm-8">
                    <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="ex: 0606060606" value="<?= (isset($_POST['telephone'])) ? $_POST['telephone'] : "" ?>" autocomplete="off" />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email<sup>*</sup></label>
                <div class="col-sm-8">
                    <input type="email" name="email" class="form-control" id="email" placeholder="ex: jeanclaude@duss.fr" value="<?= (isset($_POST['email'])) ? $_POST['email'] : "" ?>" autocomplete="off" />
                </div>
            </div>

            <div class="form-group">
                <label for="prefersms" class="col-sm-4 control-label">Préférence de contact</label>
                <div class="col-sm-8 ">
                    <div class="radio">
                        <label class="radio-inline"><input type="radio" name="prefersms" value="0" <?= (isset($_POST['prefersms']) && $_POST['prefersms'] == '0') ? "checked" : "" ?> /> Email</label>
                        <label class="radio-inline"><input type="radio" name="prefersms" value="1" <?= (isset($_POST['prefersms']) && $_POST['prefersms'] == '1') ? "checked" : "" ?> /> SMS</label>
                    </div>
                </div>
            </div>      
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" name="submit_addpraticient" value="1" class="btn btn-success btn-lg">Ajouter</button>
                </div>
            </div>    
        </form>
    </div>
</div>