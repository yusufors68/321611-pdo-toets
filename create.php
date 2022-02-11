<?php

// Configuratie Database
define('DB_HOST','localhost'); 
define('DB_USER','root'); 
define('DB_PASS',''); 
define('DB_NAME','pdo_toets'); 
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
die($e);
}

?>