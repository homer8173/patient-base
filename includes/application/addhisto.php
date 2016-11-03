<?php

if (isset($_POST['submit_addhisto'])) {
    if ($_POST['dday'] == "")
        $error[] = "Vous devez mettre une date";
    if ($_POST['min_value'] == "")
        $error[] = "Vous devez mettre une valeur minimum";
    if ($_POST['max_value'] == "")
        $error[] = "Vous devez mettre une valeur maximum";

    $dday = "";
    if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_POST['dday'])) // chromeFIX ??? date en us pour les champs date
        $dday = $_POST['dday'];
    elseif ($_POST['dday'] != "" && !dateConvFrEn($_POST['dday']))
        $error[] = "Vous devez donner une date valide jj/mm/aaaa";
    else
        $dday = dateConvFrEn($_POST['dday']);
    if (!isset($error))
        if ($db->Query("INSERT INTO `user_histos` (`id_user`,`id_ut`, `id_trauma`, `max_value`, `min_value`, `unit`, `private_info`, `patient_info`, `dday`) "
                        . "VALUES ( '" . $_POST['patient'] . "','" . $_POST['ut'] . "', '" . $_POST['traumatism'] . "', '" . $_POST['max_value'] . "', '" . $_POST['min_value'] . "', '" . $_POST['unit'] . "', '" . $_POST['private_info'] . "', '" . $_POST['patient_info'] . "', '$dday')")) {
            $success[] = "Historique sauvegardé sous le numero " . $db->GetLastInsertID();
            go_to("viewpatient/$patient");
        } else
            $error[] = "Sauvegarde impossible !";
}