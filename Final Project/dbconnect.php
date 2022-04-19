<?php #script for Final Project#
// This script will connect to my server database.
// variables for credentials
DEFINE ('DB_HOST', 'localhost:3306');
DEFINE ('DB_USER', 'ejfeliz');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_NAME','ejfeliz_440');
// creating the connection to the db
$connect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

echo "</br>";

?>