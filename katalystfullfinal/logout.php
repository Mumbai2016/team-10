<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>

<?php

//include('header_admin.php'); 
echo '<br><br><hr width="100%" color="#000000" size="5" >';
echo "<center><h3>GOOD BYE </h3></center>";
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
header( "refresh:0 ;url=index.php" );
echo '<script language="javascript"> alert("Logout Successful"); </script>';

?>
</body>
</html>