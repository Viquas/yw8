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
	// die("Connection failed: " . $conn -> connect_error);
}


$str = $_POST['str'];
$user= get_client_ip();
$rest_name= $_POST['restaurant'];
$rest_add= $_POST['resturant_address'];




 $sql = "INSERT INTO `db112684_yw8_data`.`user` (`id`, `search_string`, `user`, `time`, `restaurant`, `restaurant_address`) VALUES (NULL, '$str', '$user', CURRENT_TIMESTAMP,'$rest_name','$rest_add')";

   $result = $conn->query($sql);
   $conn->close();
   if ($result) {
       print_r(json_encode(array("status" => 200, "info" => 'Message saved')));
   } else {
       print_r(json_encode(array("status" => 500, "info" => 'Failed')));
   }



function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }


?>
