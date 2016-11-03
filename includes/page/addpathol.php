<?php
$db->Query("SELECT * FROM traumas WHERE id_trauma=$traumatism");
$patho = $db->Row();
?>  
<div class="row"><h1>Completez les informations sur <?= $patho->title ?></h1>
    <div class="well">
        <p>Appélation : <b><?= $patho->title ?></b></p>
        <p>Valeur minimum : <b><?= $patho->min_value ?></b></p>
        <p>Valeur maximum : <b><?= $patho->max_value ?></b></p>
        <p>Unité : <b><?= $patho->unit_title ?> (<?= $patho->units ?>)</b></p>
    </div>
    <form id="savepatho" action="addpathol/<?= $patient ?>/<?= $traumatism ?>/" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="patient" id="patient" value="<?= $patient ?>"/>
        <input type="hidden" name="traumatism" id="traumatism" value="<?= $traumatism ?>"/>

        <div class="form-group">
            <label for="title" class="col-sm-4 control-label">Appelation du traumatisme<sup>*</sup></label>
            <div class="col-sm-8">
                <input type="text" name="title" class="form-control" id="title" placeholder="ex: Reconstruction du genou" value="<?= (isset($_POST['title'])) ? $_POST['title'] : "" ?>" autocomplete="off" />
            </div>
        </div>   
        <div class="form-group">
            <label for="comment" class="col-sm-4 control-label">Origine du problème</label>
            <div class="col-sm-8">
                <textarea name="comment" id="comment" class="form-control" rows="3" placeholder="Patient qui ne sait pas jouer au foot et qui s'est arraché les ligaments"><?= (isset($_POST['comment'])) ? $_POST['comment'] : "" ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" name="submit_addpathol" value="1" class="btn btn-success btn-lg">Associer cette pathologie</button>
            </div>
        </div>    
    </form>
</div>
