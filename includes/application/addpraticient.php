<?php

if (isset($_POST['submit_addpraticient'])) {
    if (isset($_FILES['picture'])) { // test sur l'image
        if ($_FILES['picture']['size'] > 10485760)
            $warning[] = "Image supérieur à 10Mo";
        elseif ($_FILES['picture']['error'] !== 0)
            $warning[] = "Problème de transfer d'image";
        elseif (!in_array($_FILES['picture']['type'], array('image/jpeg', 'image/jpg', 'image/gif', 'image/png')))
            $warning[] = "Type d'image refusé";
        if (isset($warning))
            $filename = "profil/default.png";
        else {
            $newdir = "profil/" . uniqid();
            mkdir($newdir);
            $filename = "$newdir/" . $_FILES['picture']['name'];
            move_uploaded_file($_FILES['picture']['tmp_name'], $filename);
        }
    }
    $birthdate = "";
    if (strlen($_POST['username']) < 3)
        $error[] = "Vous devez donner un nom complet d'au moins 3 caractères";
    if (strlen($_POST['user']) < 3)
        $error[] = "Vous devez donner un identifiant d'au moins 3 caractères";
    if (strlen($_POST['password']) < 6)
        $error[] = "Vous devez donner un mot de passe d'au moins 6 caractères";
    if (strlen($_POST['password']) < 6)
        $error[] = "Vous devez donner un mot de passe d'au moins 6 caractères";
    if ($_POST['birthdate'] != "" && !dateConvFrEn($_POST['birthdate'])) {
        $error[] = "Vous devez donner une date valide jj/mm/aaaa";
    } else
        $birthdate = dateConvFrEn($_POST['birthdate']);
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $error[] = "Vous devez donner un email valide";
    if (!isset($error))
        if ($db->Query("INSERT INTO `users` ( `user`, `password`, `username`, `email`, `user_group`, `sex`, `birthdate`, `picture`, `telephone`, `prefersms`, `comment`) "
                        . "VALUES ('" . $_POST['user'] . "', MD5('" . $_POST['password'] . "'), '" . $_POST['username'] . "', '" . $_POST['email'] . "', '2', '" . $_POST['sex'] . "', '$birthdate', '$filename', '" . $_POST['telephone'] . "', '" . $_POST['prefersms'] . "', '" . $_POST['comment'] . "')")) {
            $success[] = "Patient ajouté sous le numero " . $db->GetLastInsertID() . "";
            $db->Query("INSERT INTO `users_parents` (`id_user`,`id_parent`) VALUES (" . $db->GetLastInsertID() . ", $u->iduser)");
            $page = "patient";
        } else
            $error[] = "Ajout impossible";
}    