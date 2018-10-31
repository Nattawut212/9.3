<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=$row;$col<=$row;$col++) {
		echo($col);	
	}
	
	for($col=$row;$col<=9;$col++){
		echo("*");
	}

	for($col=2;$col<=$row;$col++){
		echo(".");
	}
	
	for($col=$row;$col<=$row;$col++){
		echo(6-$row);
	}

	echo "<br/>";
}
?>
<?php include('footer.php'); ?>