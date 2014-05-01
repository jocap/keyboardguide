<?php

require 'config.php';

if (!empty($_POST)) {
	print '<pre>';
	print_r($_POST);
} else {
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Keyboard</title>
	<meta charset="utf-8">
	<style><?= file_get_contents('style.css') ?></style>
</head>
<body class="page">
	<h1><a href="<?=url()?>"></a>Add Keyboard</h1>
	<form action="." method="post" autocomplete="off">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required> <small>including company name</small></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" required> <small>$USD</small></td>
			</tr>
			<tr>
				<td>Backlighting</td>
				<td><select name="backlighting">
					<option value="no">No</option>
					<option value="red">Red</option>
					<option value="blue">Blue</option>
					<option value="green">Green</option>
					<option value="Purple">Purple</option>
					<option value="white">White</option>
					<option value="rgb">RGB</option>
				</select></td>
			</tr>
			<tr>
				<td>Switch</td>
				<td><select name="switch">
					<option value="cherry-mx-red">Cherry MX Red</option>
					<option value="cherry-mx-black">Cherry MX Black</option>
					<option value="cherry-mx-blue">Cherry MX Blue</option>
					<option value="cherry-mx-green">Cherry MX Green</option>
					<option value="cherry-mx-brown">Cherry MX Brown</option>
					<option value="cherry-mx-clear">Cherry MX Clear</option>
					<option value="cherry-mx-red">Alps</option>
					<option value="cherry-mx-bs">Buckling Spring</option>
					<option value="other">Other (specify in Additional Info)</option>
				</select></td>
			</tr>
			<tr>
				<td>Numpad</td>
				<td><select name="numpad">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select></td>
			</tr>
			<tr>
				<td>Additional<br>information</td>
				<td><textarea name="info"></textarea> <small>e.g., specific type of Alps switch, total number of keys</small></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Add Keyboard"></td>
			</tr>
		</table>		
	</form>
</body>
</html>
	<?php
}

?>