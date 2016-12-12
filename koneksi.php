<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
$srvr="localhost"; //SESUAIKAN DENGAN WEBSERVER ANDA
$db="db_feedpro"; //SESUAIKAN DENGAN WEBSERVER ANDA
$usr="root"; //SESUAIKAN DENGAN WEBSERVER ANDA
$pwd="";//SESUAIKAN DENGAN WEBSERVER ANDA

$dbconnection = new mysqli($srvr, $usr, $pwd, $db);
if ($dbconnection->connect_error) {
     die("Connection failed: " . $dbconnection->connect_error);
}
?>