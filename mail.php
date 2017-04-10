<?php

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$servername = "internal-db.s112684.gridserver.com";
$username = "db112684_vicky";
$password = "Treeback89#$";
$dbname = "db112684_yw8_data";
date_default_timezone_set('Asia/Kolkata');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}

$yesterday = date('Y-m-d',strtotime("yesterday"));








$servername = "internal-db.s112684.gridserver.com";
$username = "db112684_vicky";
$password = "Treeback89#$";
$dbname = "db112684_yw8_data";
// date_default_timezone_set('Asia/Kolkata');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
  die("Connection failed: " . $conn -> connect_error);
}

$sql = "select * from user where DATE(time) = '$yesterday'";
$result = $conn->query($sql);
$conn->close();
$table = '';
while ($row = $result->fetch_assoc()) {
    $table .="<tr><td>".$row['time'].'</td>';
    $table .="<td>".$row['user'].'</td>';
    $table .="<td>".$row['search_string'].'</td>';
    $table .="<td>".$row['restaurant'].'</td>';
    $table .="<td>".$row['restaurant_address'].'</td></tr>';

}



$conn1 = new mysqli($servername, $username, $password, $dbname);

$sql1 = "SELECT COUNT(*) FROM user where DATE(time) = '$yesterday' UNION SELECT COUNT(*) FROM ( SELECT DISTINCT user FROM user where DATE(time) = '$yesterday') AS n;";
$result1 = $conn1->query($sql1);
$conn1->close();

while ($row = $result1->fetch_assoc()) {
  $r[] = $row;

}

 $count =$r[0]['COUNT(*)'];
    $user = $r[1]['COUNT(*)'];


 $to = "vicky@treestack.tech,kishan@dishq.in,sai.sreenivas@dishq.in ";
    $from = "vicky@treestack.tech";
    $subject = "YW8 Search data - ".$yesterday;

    $message ="
<html>
  <body>
        <b style='text-align:center'>Search data</b><br/>
        Summary: ".$user. " users searched ". $count . " times.<br/>


    <table cellpadding='10'>
    <tr>
      <th>Time</th>
      <th>User IP</th>
      <th>Search Term</th>
      <th>Restaurant</th>
      <th>Restaurant Address</th>
    </tr>

   ";
$message .=$table;
$message .="</table></body></html>";

   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";
    mail('vicky@treestack.tech',$subject , $message, $headers);
    mail('kishan303@gmail.com',$subject , $message, $headers);
    echo "Please check your email now....<BR/>";


?>
