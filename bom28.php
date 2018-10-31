<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=5;$col>=$row;$col--) {
		echo($col);
	}
	
	for($col=1;$col<=$row;$col++) {
		echo("*");
	}
	
	for($col=2;$col<=$row;$col++) {
		echo("*");
	}

	for($col=$row;$col<=5;$col++) {
		echo($col);
	}

	echo "<br/>";
}
?><?php include('footer.php'); ?>