<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name= $_POST["name"];
	$email= $_POST["email"];

	// TODO: Send Email

	header("Location: register.php?status=thanks");
	exit;
}
?>

<?php 
$pageTitle = "Register";
$section = "register";
include('inc/header.php'); ?>

<div>
	<h1>Register</h1>

	<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
		<p>Thanks for registering, very nice!</p>
	<?php } else { ?>

	<p> Please Register Below: </p>
	<form method="post" action="register.php"> 
		<table>
			<tr>
				<th>
					<label for="name">Name</label> 
				</th>
				<td>
					<input type="text" name="name" id="name">
				</td>
			</tr>

			<tr>
				<th>
					<label for="email">Email</label> 
				</th>
				<td>
					<input type="text" name="email" id="email">
				</td>
			</tr>
		</table>
		<input type="submit" value="Send">
	</form>
	<?php } ?>
</div>

<?php include('inc/footer.php'); ?>