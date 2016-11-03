<?php

if (isset($_POST['submit_addtrauma'])) {
    if ($db->Query("INSERT INTO `traumas` (`id_trauma`, `id_image`, `x`, `y`, `size`, `rotation`, `title`, `min_value`, `max_value`, `units`, `unit_title`) VALUES "
                    . "(NULL, '".$_POST['id_image']."', '".$_POST['x']."', '".$_POST['y']."', '".$_POST['size']."', '".$_POST['rotation']."', '".$_POST['title']."', '".$_POST['min']."', '".$_POST['max']."', '".$_POST['units']."', '".$_POST['unit_title']."');"))
        $success[] = "Traumatisme ajouté sous le numero " . $db->GetLastInsertID() . " !";
    else
        $error[] = "Sauvegarde impossible !";
    $page = "home";
}