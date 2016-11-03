<?php
    global $db;
    $db->Query("SELECT * FROM users u LEFT JOIN users_parents up ON up.id_user=u.iduser WHERE up.id_parent='$u->iduser' ORDER BY iduser DESC ");
    ?>
    <div class="row">
        <h1>Liste de vos patients <span class="badge"><?= ($db->RowCount()=="")?"0":$db->RowCount() ?></span></h1> 
            <hr>
            <div  class="list-group">
                <?php
                // Loop through the records using the MySQL object (prefered)
                $db->MoveFirst();
                while (!$db->EndOfSeek()) {
                    $row = $db->Row();
                    echo "                <a class='list-group-item' href='viewpatient/$row->iduser/'>$row->iduser) $row->username ".(($row->birthdate!="0000-00-00")?' <span class="badge pull-right">'.date_diff(date_create($row->birthdate), date_create('today'))->y."ans</span>":"")."</a>\n";
                }
                ?>
            </div>
            <hr>
        <div ><a href="addpatient/" class="btn btn-success btn-lg">Ajouter un patient</a></div>
    </div>