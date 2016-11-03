<?php

if (isset($_POST['submit_addpathol'])) {
    if ($db->Query("INSERT INTO `user_traumas` ( `id_trauma`, `id_user`, `title`, `origine`) VALUES"
                    . " ( '$traumatism', '$patient', '" . $_POST['title'] . "', '" . $_POST['comment'] . "')")) {
        $success[] = "Traumatisme associé sous le numero " . $db->GetLastInsertID();
        go_to("viewpatient/$patient");
    } else
        $error[] = "Sauvegarde impossible !";
}