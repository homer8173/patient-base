<?php

/**
 * Description of user
 *
 * @author Focoweb
 */
class Users {

    //put your code here
    function login($user, $password) {
        global $success, $info, $error, $warning, $page, $db;
        $db->Query("SELECT * FROM users WHERE user='$user' AND password=MD5('$password')");
        if ($db->RowCount() === 1) {
            $_SESSION['user'] = $db->Row();
            $u = $_SESSION['user'];
            $success[] = "Authentification r&eacute;ussie";
            // redirect to home
            go_to("home");
        } else {
            $error[] = "Authentification &eacute;chou&eacute;e";
        }
    }

}

?>