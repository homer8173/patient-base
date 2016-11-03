<?php 
if (isset($patient)) {
        $db->Query("SELECT * FROM users WHERE iduser='$patient'");
        $u=$db->Row();
}
?>
<div class="row">
<div class="col-md-8">
    
    <div class="panel panel-default">
  <div class="panel-heading"><h1 class=""><?= $u->username ?> <small>(N°<?= $u->iduser ?>)</small></h1></div>
  <div class="panel-body">
    <div>Né(e) le <?php
$date = new DateTime($u->birthdate);
$date2 = new DateTime("now");
echo $date->format('d/m/Y') . " (";

$diff = $date->diff($date2);
echo $diff->format('%y') . " ans)"; // will output 45 
?></div>
    <div>Identifiant : <b><?= $u->user ?></b></div>
    <div>Téléphone : <b><?= $u->telephone ?></b></div>
    <div>Email : <b><?= $u->email ?></b></div>
    <div>Préfère être contacté par <b><?= ($u->prefersms)?"SMS":"Email" ?></b></div>
</div>
  </div>
</div>
    
    
<div class="col-md-4">
    <img src="<?= $u->picture ?>" class="img-thumbnail" />
</div>
</div>
<br class="clearfix" />
