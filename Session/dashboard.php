<?php
	session_start();
	if(!isset($_SESSION["user"])  && !isset($_SESSION["pass"]))
		header ("Location: Index.php");
?>
<html>
	<body>
		<h3>Welcome <?php echo $_SESSION["user"];?><h3>
		<a href = "changepass.php">Change Password</a>
	</body>
</html>