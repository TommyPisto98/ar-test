<?php

$host = "" /* host_name */ ;
$user = "" /* user */ ;
$password = "" /* password */ ;
$dbname = "" /* db_name */ ;

$con = pg_connect($host, $user, $password, $dbname);

// Check connection:
if (!$con) {
    die("Connessione fallita: " .pg_last_error($con));
}

?>