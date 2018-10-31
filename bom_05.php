<?php 
session_start();
include('header.php');
?>
<?php
for($row=1;$row<=4;$row++) {
	for($col=1;$col<=4-$row;$col++) {
		/*เริ่มต้น ;สิ้นสุด;การเลื่อนไป (เพิ่มขั้น / ลดลง)*/
	echo(".");
	}
	echo($row);

	for($col=2;$col<=$row;$col++){
	echo("**");
	}
	echo($row);
	echo "<br/>";
}
for($row=3;$row>=1;$row--) {
	for($col=1;$col<=4-$row;$col++) {
	echo(".");
	}
	echo($row);
	for($col=2;$col<=$row;$col++){
	echo("**");
	}
	echo($row);
	echo "<br/>";
}
?>
<?php include('footer.php'); ?>
