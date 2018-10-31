<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=7;$row++) {
	for($col=2;$col<=1+$row;$col++) {
	echo(".");
	}
	for($col=1;$col<=1;$col++){
		echo($col);
	}
	for($col=$row;$col<=6;$col++){
		echo("01");
	}
	echo "<br/>";
}
?>
<?php include('footer.php'); ?>