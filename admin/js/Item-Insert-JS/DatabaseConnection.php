<html>
<body>

	$serverName = "sql200.infinityfree.com";
	$userName = "if0_34718209";
	$password = "6H4GFzMzO5w";
	$database = "if0_34718209_e_commerce_db";

	$conn = new mysqli($serverName, $userName, $password, $database);
	if($conn->connect_error)
	{
		die("Database connection failed".$conn->connect_error);
	}
</body>
</html>