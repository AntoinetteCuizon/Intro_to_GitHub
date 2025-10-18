<!DOCTYPE html>
<html>
<body>
	<form method="post">
		<label>Enter length in centimeters:</label>
		<input type="number" name="cm">
		<input type="submit" name="submit" value="Convert">
	</form>
	
	<?php
	if(isset($_POST['submit'])) {
		$cm = $_POST['cm'];
		$m = $cm / 100;
		$km = $cm / 100000;
		echo "<p>$cm centimeters = $m meters</p>";
		echo "<p>$cm centimeters = $km kilometers</p>";
	}
	?>
</body>
</html>
