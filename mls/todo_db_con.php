	<?php

	function OpenCon()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "NEW!password1";
		$db = "todo_list";



		$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
		return $conn;

	}

	function CloseCon($conn)
	{
		$conn -> close();
	}
	?>