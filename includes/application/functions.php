<?php

function go_to($dest = "home") {
    global $start_url;
    $location = "Location: $start_url$dest/";
    header($location);
}

function sanitize(&$table) {
    global $db;
    foreach ($table as $key => $value) {
        $table[$key] = $db->SQLFix($value);
    }
}

//Convertir une date FR vers une date US 
function dateConvFrEn($mydate) {
    if (preg_match("/^([1-9]|0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/[0-9]{4}$/", $mydate)) {
        @list($jour, $mois, $annee) = explode('/', $mydate);
        return @date('Y-m-d', mktime(0, 0, 0, $mois, $jour, $annee));
    } else {
        return false;
    }
}
//Convertir une date US vers une date fr 
// NOT TESTED !!!!
function dateConvEnFr($mydate) {
        @list($annee,$mois,$jour ) = explode('-', $mydate);
        return @date('d/m/Y', mktime(0, 0, 0, $mois, $jour, $annee));
}
