<head>
	<?php 
		$username="dbo512305653";
		$password="TeamAwesome";
		$database="db512305653";
		$host="db512305653.db.1and1.com";
		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
		$query = "SELECT * FROM Games_List";
		$result=mysql_query($query);
		echo $result;
		$possibilities=array();
		while ($row=mysql_fetch_array(result)){
			$possibilities[]=array(
		}
		mysql_close();
	?>
	<title>Play <?php echo $result ?></title>
</head>
<body>
</body>