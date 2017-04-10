<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$servername = "internal-db.s112684.gridserver.com";
$username = "db112684_vicky";
$password = "Treeback89#$";
$dbname = "db112684_yw8_data";
date_default_timezone_set('Asia/Kolkata');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
  die("Connection failed: " . $conn -> connect_error);
}


// $date = $_GET['date'];
if($date == '')
$yesterday = date('Y-m-d',strtotime("yesterday"));
$date = $_GET['date'];
if($date == null){
  $date = $yesterday;
}

$sql = "select * from user where DATE(time) = '$date'";
$result = $conn->query($sql);
$conn->close();
$events = array();
$user = 0;
$search = 0;
$temp = '';

while ($row = $result->fetch_assoc()) {

    $json_obj = new stdClass();
    $json_obj->{'search'} =  $row['search_string'];
     $json_obj->{'user'} =  $row['user'];
     $json_obj->{'time'} =  $row['time'];
      $json_obj->{'restaurant'} =  $row['restaurant'];
       $json_obj->{'restaurant_address'} =  $row['restaurant_address'];
       $search++;


       if($row['user'] != $temp){
        $user++;
       }
         $temp = $row['user'];
    $events[] = $json_obj;
}


print_r(json_encode(array("status"=>200,"data"=>$events,"user" => $user,"search" => $search)));
?>
