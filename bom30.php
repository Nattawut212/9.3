<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=5;$row++) {

	for($col=2;$col<=$row;$col++) {
		echo(".");	
	}
	
	for($col=0;$col<=5-$row;$col++){
		echo("*");
	}

	for($col=0;$col<=4-$row;$col++){
		echo("*");
	}

	for($col=$row;$col>=1;$col--) {
		echo($col);
	}

	echo "<br/>";
}
?><?php include('footer.php'); ?>