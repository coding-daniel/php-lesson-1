<h1>Hello World</h1>
<h2>And welcome to learning <strong>PHP</strong>.</h2>
<h3>1. Create a way to find out the day of the week for any date after 1970.</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<label for="day">Day</label>
	<input name="day">
	<label for="month">Month</label>
	<input name="month">
	<label for="year">Year</label>
	<input name="year">
	<input type="submit" name="submit_1" value="Check your date">
	<input type="reset" value="Reset the form">
	<?php
		if (isset($_POST['submit_1'])) {
			$day = $_POST['day'];
			$month = $_POST['month'];
			$year = $_POST['year'];
			$date = $year . "-" . $month . "-" . $day;
			if ($day != '' && $month != '' && $year != '') {
				echo "<p>You're looking for the day of the week for the date " . $day . "/" . $month . "/" . $year . "</p>";
				echo "<p>" . date('l', strtotime($date)). "</p>";
			} else {
				echo "You missed a field";
			}
		}
	?>
</form>

<h3>2. Improve the page greeting by changing the Hello World to an appropriate time of the day greeting</h3>

<h3>3. Create a simple calculator where a person can multiply any two numbers and see the result</h3>

<small>Each exercise must be placed in at least one commit.</small>