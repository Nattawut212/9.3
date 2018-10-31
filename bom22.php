<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=5;$row++) {
	echo("*");

	for($col=2;$col<=$row;$col++) {
		echo(".");	
	}
	
	for($col=0;$col<=5-$row;$col++){
		echo($row);
	}

	for($col=0;$col<=4-$row;$col++){
		echo($row);
	}

	for($col=2;$col<=$row;$col++) {
		echo(".");	
	}

	echo("*");

	echo "<br/>";
}
?>
<?php include('footer.php'); ?>