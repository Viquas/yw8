<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$servername = "internal-db.s112684.gridserver.com";
$username = "db112684_vicky";
$password = "Treeback89#$";
$dbname = "db112684_yw8_data";
// date_default_timezone_set('Asia/Kolkata');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}

?>
