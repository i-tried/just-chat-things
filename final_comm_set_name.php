<?php
#initializes cookie and gets the input from the text field as the value
$cookie_value = $_POST["user_name"];
setcookie("AnnikaUser", $cookie_value, time() + (86400 * 30)); // 86400 = 1 day
?>

<html>
<head>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<!--######################################################################-->

	<div class="header">
		<h3>Login</h3>
	</div>

<!--######################################################################-->

	<div class="Login">
		Put your name here:<br>
		<form method="post" action="final_comm_set_name.php#" >
			<div align="center">
				<!--Input for user name to be used on actual chat page only works if first the submit button is pressed and then the next page button-->
				<input type="text" name = "user_name">
			</div>
			<input type="submit" class="button" value="Submit">
		</form>
		<br>
		<a href="final_comm_system.php#" title="Next Page" class="button">Next page</a>
	</div>

<!--######################################################################-->

	<!--
	Trying to solve having to have two buttons - open for furter changes
	<?php/*
	if(isset($_COOKIE['AnnikaUser'])){
		$submitref = "<meta http-equiv='refresh' content='1'>";
	}
			
	else{
		$submitref = "final_comm_set_name.php#";
	}*/
	?>
	<a href="" title="Submit">Submit</a>
	<a href="final_comm_system.php#" title="Next Page">Next page</a>-->

</body>
</html>s