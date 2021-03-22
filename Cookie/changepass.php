<html>
<body>
<?php
	session_start();
	if(!isset($_COOKIE["user"])  && !isset($_COOKIE["pass"]))
		header ("Location: Index.php");
	else
	echo $_COOKIE["user"]." You can change password here. Old pass is: ".$_COOKIE["pass"];
?>
</body>
</html>