<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=5;$row++) {
	
	for($col=$row;$col>=1;$col--){
		echo($col);
	}

	for($col=1;$col<=5-$row;$col++){
		echo("..");
	}

	for($col=$row;$col>=1;$col--){
		echo("*");
	}

	echo "<br/>";
}
?>
<?php include('footer.php'); ?>