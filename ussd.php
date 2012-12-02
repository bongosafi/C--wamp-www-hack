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
<a href="profile.php" ><h1>SANITATION HACKATHON</h1></a>

	</div> 
	
   
	
    <div class="clear"></div>
	
  </div>
 
<div id="middlebar-big">
  <div id="rightnav" >
  <?php if(!isset($_POST['submit'])|((isset($_POST['userSelTp']))&&($_POST['userSelTp']=="00"))|(isset($_POST['ussdcode'])&&($_POST['ussdcode']!="*134#"))|(isset($_POST['any']))){ ?>
  <h1>USSD CODE</h1>
  
  <br/>
  <form action="ussd.php" method="post">
  <table>
  <tr>
						<td><input type="text" name="ussdcode" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
 <?php } ?>
  <?php if(isset($_POST['submit'])&&((isset($_POST['ussdcode'])&&($_POST['ussdcode']=="*134#"))|(isset($_POST['userSelTp1'])&&($_POST['userSelTp1']!=1) )|(isset($_POST['userSelTp2'])&&($_POST['userSelTp2']!=2) )|(isset($_POST['userSelTp3'])&&($_POST['userSelTp3']!=3))|(isset($_POST['userSelTp4'])&&($_POST['userSelTp4']!=4) ))){ ?>
  <h1>Select service/product</h1>
  <h3>1.type1</h3>
  <h3>2.type2</h3>
  <h3>3.type3</h3>
  <h3>4.type4</h3>
  <br/>
  <h3>00 to exit</h3>
    <br/>
  <form action="ussd.php" method="post">
  <table>
  <tr>
						<td><input type="text" name="userSelTp" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
 <?php } ?>
 <?php if(isset($_POST['submit'])&&(isset($_POST['userSelTp']))&&($_POST['userSelTp']==1)){ ?>
  <h1> Type 1 sectected</h1>
  <h3>This product cost 100,000 TSHZ,press 1 to continue 00 to cancel</h3>
  
  <br/>
  <form action="ussd.php" method="post">
  <table>
  <tr>
						<td><input type="text" name="userSelTp1" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
 <?php } ?>
	<?php if(isset($_POST['submit'])&&(isset($_POST['userSelTp1']))&&($_POST['userSelTp1']==1)){ ?>
  
   <?php
  //send message to the requester and suppler
  header("Location: get_info.php?type=1");
exit;
  
  ?>
  
 <?php } ?>
  <?php if(isset($_POST['submit'])&&(isset($_POST['userSelTp']))&&($_POST['userSelTp']==2)){ ?>
  <h1> Type 2 sectected</h1>
  <h3>This product cost 150,000 TSHZ,press 1 to continue 00 to cancel</h3>
  
  <br/>
  <form action="ussd.php" method="post">
  <table>
  <tr>
						<td><input type="text" name="userSelTp2" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
 <?php } ?>
 	<?php if(isset($_POST['submit'])&&(isset($_POST['userSelTp2']))&&($_POST['userSelTp2']==1)){ ?>
  
   <?php
  //send message to the requester and suppler
  header("Location: get_info.php?type=2");
exit;
  
  ?>
  
 <?php } ?>
  <?php if(isset($_POST['submit'])&&(isset($_POST['userSelTp']))&&($_POST['userSelTp']==3)){ ?>
  
  <br/><h1> Type 3 sectected</h1>
  <h3>This product cost 200,000 TSHZ,press 1 to continue 00 to cancel</h3>
  
  <form action="ussd.php" method="post">
  <table>
  <tr>
						<td><input type="text" name="userSelTp3" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
 <?php } ?>
 	<?php if(isset($_POST['submit'])&&(isset($_POST['userSelTp3']))&&($_POST['userSelTp3']==1)){ ?>
  
  <?php
  //send message to the requester and suppler
  header("Location: get_info.php?type=3");
exit;
  
  ?>
  
  
  
  
 <?php } ?>
 <?php if(isset($_POST['submit'])&&(isset($_POST['userSelTp']))&&($_POST['userSelTp']==4)){ ?>
  <h1> Type 4 sectected</h1>
  <h3>This product cost 400,000 TSHZ,press 1 to continue 00 to cancel</h3>
  
  <br/>
  <form action="ussd.php" method="post">
  <table>
  <tr>
						<td><input type="text" name="userSelTp4" value=""  /></td>
						</tr>
						</tr>
						<tr>
						<td><input  type="submit"  name="submit" value="Send" /></td>
						
						</tr>
						</table>
					</form>
 <?php } ?>
 	<?php if(isset($_POST['submit'])&&(isset($_POST['userSelTp4']))&&($_POST['userSelTp4']==1)){ ?>
  
  <?php
  //send message to the requester and suppler
  header("Location: get_info.php?type=4");
exit;
  
  ?>
  
 <?php } ?>
   </div>
  </div>



		
   
  
  </body>

</html>
