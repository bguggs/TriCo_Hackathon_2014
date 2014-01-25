<DOCTYPE! HTML>
<head>
	<?php 
		$username="dbo512305653";
		$password="TeamAwesome";
		$database="db512305653";
		mysql_connect(localhost,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
		/* Not querying yet
		$query="";
		mysql_query($query);*/
		mysql_close();
	?>
	<title>PHP Test Page </title>
</head>
<body>
	<form action="insert.php" method="post">     
	Game Name: <input type="text" name="game_name" />
	Min People: <input type="text" name="MinPeople" />
	Max People: <input type="text" name="MaxPeople" />
	User: <input type="text" name="User" />
	Drinking: <br><input type="radio" name="Drinking" value="0" /> No <br>
	<input type="radio" name="Drinking" value="1" /> Yes <br>
	Rules and Instructions: <input type="text" name="Rules" />
	Requirements <input type="text" name="Requirements" />
	
	<input type="Submit" /></form>
</body>