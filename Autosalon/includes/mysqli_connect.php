<?php
DEFINE ('DB_USER', 'radnik');
DEFINE ('DB_PASSWORD', 'radnik');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'baza korisnika');

$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR die('Could not connect tp MySql' . mysqli_connect_error());
?>