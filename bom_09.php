<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=3;$col<=1+$row;$col++) {
	echo(".");
	}
	for($col=0;$col<=5-$row;$col++){
		echo($row);
	}
	for($col=0;$col<=4-$row;$col++){
		echo($row);
	}
	echo "<br/>";
}
?>
<?php include('footer.php'); ?>