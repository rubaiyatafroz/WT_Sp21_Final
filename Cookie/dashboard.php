<?php
	if(!isset($_COOKIE["user"])  && !isset($_COOKIE["pass"]))
		header ("Location: Index.php");
?>
<html>
	<body>
		<h3>Welcome <?php echo $_COOKIE["user"];?><h3>
		<a href = "changepass.php">Change Password</a>
	</body>
</html>