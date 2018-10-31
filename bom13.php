<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=2;$col<=$row;$col++) {
	echo("..");
	}
	for($col=11;$col>=11;$col--){
		echo($col-$row-$row);
	}
	for($col=10;$col>=6+$row;$col--){
		echo($col-$row-$row);
	}

	for($col=5;$col>=1+$row;$col--){
		echo($col-$row);
	}



	echo "<br/>";
}
?>
<?php include('footer.php'); ?>