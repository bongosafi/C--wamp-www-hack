<?php
require_once "sendsms.php"; 


$phoneNumber = $_GET['$phoneNumber'];
//$email = $_GET["email"];
$comment =$_GET['$message'];

$host = "121.241.242.114";
$port = "8080";
$username = "nct-chris";
$password = "ikwe221";
$name = $_GET['$source'];
//$sender 	= (string)$_GET["name"];
$sender 	= "SANITATION";
$message 	=  substr($comment, 0, 500) ;
$mobile 	= $phoneNumber;
$msgtype 	= "0";
$dlr ="1";
// send SMS

//Call The Constructor.          
$obj = new Sender($host, $port, $username,$password, $sender, $message, $phoneNumber, $msgtype, $dlr);
$obj -> Submit();

?>
