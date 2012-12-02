<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />


</head>
<body>
<div id="wrapper">
  <div id="header" >
      
	<div id="headerlogo" class="clearfix">
<a href="profile.php" ><h1>SANITATION HACKTON</h1></a>

	</div> 
	
   
	
    <div class="clear"></div>
	
  </div>
 
<div id="middlebar-big">
  <div id="rightnav" >
  	<?php if((isset($_GET['type']))&&(isset($_GET['name']))&&(isset($_GET['region']))&&(isset($_GET['district']))&&(isset($_POST['phone']))){
	$messageSpl= "Hi suppler, ".$_GET['name']." wants to purchase product type".$_GET['type'].", From region:".$_GET['region'].", District:".$_GET['district'].". call him/her on ".$_POST['phone'];  
	$messageUsr="thank you ".$_GET['name'].", your request is being processed you will be notified soon.";
	echo $messageUsr;
	echo "<br/>press any button to finish";
	
	$phoneNumber=$_POST['phone'];
$_GET['$phoneNumber']= $phoneNumber;
$_GET['$source']="SANITATION";

$_GET['$message'] =	$messageUsr;	 
include("submitsms.php");
$phoneNumber="255653666085";
$_GET['$phoneNumber']= $phoneNumber;
$_GET['$source']="HACK";

$_GET['$message'] =	$messageSpl;	 
include("submitsms.php");

	?>
	
	<form action="ussd.php" method="post">
  <table>
  <tr>
						<td><input type="text" name="any" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
	
	<?php
	
	}
	elseif((isset($_GET['type']))&&(isset($_GET['name']))&&(isset($_GET['region']))&&(isset($_POST['district']))){
	?>  
	<h3>Type your mobile phone number</h3>
	<form action="get_info.php?type=<?php echo urlencode($_GET['type']); ?>&name=<?php echo urlencode($_GET['name']); ?>&region=<?php echo urlencode($_GET['region']); ?>&district=<?php echo urlencode($_POST['district']); ?>" method="post">
  <table>
  <tr>
						<td><input type="text" name="phone" value="255"  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
	<?php 
	
	}
	elseif((isset($_GET['type']))&&(isset($_GET['name']))&&(isset($_POST['region']))){
	?>  
	<h3>Type your District</h3>
	<form action="get_info.php?type=<?php echo urlencode($_GET['type']); ?>&name=<?php echo urlencode($_GET['name']); ?>&region=<?php echo urlencode($_POST['region']); ?>" method="post">
  <table>
  <tr>
						<td><input type="text" name="district" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
	<?php 
	
	
	}
	elseif((isset($_GET['type']))&&(isset($_POST['name']))){
	?>  
	<h3>Type your region</h3>
	<form action="get_info.php?type=<?php echo urlencode($_GET['type']); ?>&name=<?php echo urlencode($_POST['name']); ?>" method="post">
  <table>
  <tr>
						<td><input type="text" name="region" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
	<?php
	
	}
	elseif(isset($_GET['type'])){
	
	?>  
	<h3>Type your name here</h3>
	<form action="get_info.php?type=<?php echo urlencode($_GET['type']); ?>" method="post">
  <table>
  <tr>
						<td><input type="text" name="name" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
	<?php
	}
	
	
	?>
   </div>
  </div>



		
   
  
  </body>

</html>
