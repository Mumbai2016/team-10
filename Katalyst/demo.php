
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button onclick="demo()">Click</button>
<script type="text/javascript">
	function demo(){
		
	}
	<?php 
			echo "demo";
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "katalyst";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password,$database);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysql_connect_error());
		}
		?>
</script>
</body>
</html>