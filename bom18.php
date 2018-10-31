<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=$row;$col<=$row;$col++) {
		echo($col);	
	}

	for($col=1;$col<=$row;$col++) {
		echo("*");
	}

	echo($col-1);

	for($col=1;$col<=6-$row;$col++) {
		echo("*");
	}

	echo($col+3);

	echo "<br/>";
}
?>
<?php include('footer.php'); ?>