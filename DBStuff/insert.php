<?php 
	$username="dbo512305653";
	$password="TeamAwesome";
	$database="db512305653";
	$GamVal=$_POST['game_name'];
	$MinVal=$_POST['MinPeople'];
	$MaxVal=$_POST['MaxPeople'];
	$UseVal=$_POST['User'];
	$DriVal=$_POST['Drinking'];
	$WeiVal=$_POST['Weight'];
	$RulVal=$_POST['Rules'];
	$ReqVal=$_POST['Requirements'];
	mysql_connect(localhost,$username,$password);
	@mysql_select_db($database) or die( "Unable to select database");
	$query = "INSERT INTO Games_List VALUES('','$GamVal','$MinVal','$MaxVal','$UseVal','$DriVal','$WeiVal','$RulVal','$ReqVal')";
	mysql_query($query);
	mysql_close();
?>