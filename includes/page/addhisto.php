<?php
$db->Query("SELECT * FROM user_traumas WHERE id_ut=$traumatism AND id_user='$patient'");
$ut = $db->Row();
$db->Query("SELECT * FROM traumas WHERE id_trauma=$ut->id_trauma");
$patho = $db->Row();
?>  
<div class="row"><h1>Completez les informations sur <?= $patho->title ?></h1>
    <div class="well">
        <p>Appelation : <b><?= $ut->title ?></b></p>
        <p>Origine : <b><?= $ut->origine ?></b></p>
    </div>
    <form id="savepatho" action="addhisto/<?= $patient ?>/<?= $traumatism ?>/" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="patient" id="patient" value="<?= $patient ?>"/>
        <input type="hidden" name="ut" id="ut" value="<?= $ut->id_ut ?>"/>
        <input type="hidden" name="traumatism" id="traumatism" value="<?= $patho->id_trauma ?>"/>
        <input type="hidden" name="unit" id="unit" value="<?= $patho->units ?>"/>

        <div class="form-group">
            <label for="dday" class="col-sm-4 control-label">Date du jour<sup>*</sup></label>
            <div class="col-sm-8">
                <div class="input-group">
                    <input type="date" name="dday" class="form-control" id="dday" placeholder="ex: 24/12/2014" value="<?= (isset($_POST['dday'])) ? $_POST['dday'] : date('d/m/Y') ?>" autocomplete="off" />
                    <span class="input-group-btn">
                        <button class="btn btn-default" id="today" type="button">Aujourd'hui</button>
                    </span>
                </div>

            </div>
        </div>   
        <div class="form-group">
            <label for="min_value" class="col-sm-4 control-label">Valeur MINI<sup>*</sup></label>
            <div class="col-sm-8">
                <div class="input-group">
                    <input type="number" name="min_value" class="form-control" id="min_value" placeholder="ex: 5" value="<?= (isset($_POST['min_value'])) ? $_POST['min_value'] : "" ?>" autocomplete="off" />
                    <span class="input-group-addon"><?= $patho->units ?></span>
                </div>

            </div>
        </div>   
        <div class="form-group">
            <label for="max_value" class="col-sm-4 control-label">Valeur MAXI<sup>*</sup></label>
            <div class="col-sm-8">
                <div class="input-group">
                    <input type="number" name="max_value" class="form-control" id="max_value" placeholder="ex: 90" value="<?= (isset($_POST['max_value'])) ? $_POST['max_value'] : "" ?>" autocomplete="off" />
                    <span class="input-group-addon"><?= $patho->units ?></span>
                </div>

            </div>
        </div>   
        <div class="form-group">
            <label for="patient_info" class="col-sm-4 control-label">Informations pour le patient</label>
            <div class="col-sm-8">
                <textarea name="patient_info" id="patient_info" class="form-control" rows="3" placeholder="ex: faire des mouvements le matin sans forcer"><?= (isset($_POST['patient_info'])) ? $_POST['patient_info'] : "" ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="private_info" class="col-sm-4 control-label">Informations privées</label>
            <div class="col-sm-8">
                <textarea name="private_info" id="private_info" class="form-control" rows="3" placeholder="ex: il n'a pas fait ses exos !"><?= (isset($_POST['private_info'])) ? $_POST['private_info'] : "" ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" name="submit_addhisto" value="1" class="btn btn-success btn-lg">Sauvegarder cet historique</button>
            </div>
        </div>    
    </form>
</div>
