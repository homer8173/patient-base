<?php

include 'includes/class/users.php';
if (isset($u)) { // we are in
    if (isset($page) && $page == "login") // login not possible if in
        $page = 'home';
    elseif (!isset($page)) // default page for loged in
        $page = 'home';

    // run disconnection 
    if ($page == "disconnect") {
        unset($_SESSION['user']);
        header("Location: $start_url");
    }
    
} else {        // we are out
    if (isset($_POST['login']) & isset($_POST['password'])) {
        $user = new Users();
        $user->login($_POST['login'], $_POST['password']);
    } else {
        $page="login";
    }
}

