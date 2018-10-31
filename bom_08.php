<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=7;$row++) {
	for($col=3;$col<=1+$row;$col++) {
	echo(".");
	}
	for($col=$row;$col<=$row;$col++){
		echo($row);
		echo($row+1);
		echo($row+2);
	}
	for($col=2;$col<=2+$row;$col++){
		echo("*");
	}

	echo "<br/>";
}
?>
<?php include('footer.php'); ?>