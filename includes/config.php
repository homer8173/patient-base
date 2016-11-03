<?php
// init
session_start();
$page=@$_GET['r'];
$patient=@$_GET['p'];
$traumatism=@$_GET['t'];
$u=$_SESSION['user'];

// config
$start_url="/";
// config db
$dbserver="127.0.0.1";
$database ="kine";
$dbusername = "patientele";
$dbpassword = "........";

// page allowed
$knownpage= array(
    "login",
    "home",
    "patient",
    "patientaddinfo",
    "addpatient",
    "addpraticient",
    "account",
    "addtrauma",
    "viewpatient",
    "addpatho",
    "addpathol",
    "addhisto",
    "createpatho"
    );
