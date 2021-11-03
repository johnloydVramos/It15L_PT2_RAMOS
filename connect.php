<?php 
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD','');

DEFINE('DB_NAME','it15_db');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR exit('could not connect to MySQL: '.mysqli_connect_error());
?>