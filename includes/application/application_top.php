<?php
include 'functions.php';
include 'includes/config.php';
include "translate.php";
include 'includes/class/mysql.php';
$db = new MySQL(true, $database, $dbserver, $dbusername, $dbpassword, "utf8");
if($db->mysql_link===false) die("<h1>Connection impossible à la DB</h1>");
sanitize($_POST);
sanitize($_GET);
//var_dump($_GET);

include "login.php";
include "addtrauma.php";
include "addpatient.php";
include "addpraticient.php";
include "addpathol.php";
include "addhisto.php";
include 'includes/class/elements.php';
$e=new Elements();
$i=$e->image_list();

?>
