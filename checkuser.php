<?php
session_start();
  $conn = mysql_connect("localhost","root","");
  $sql="select * from myuser 

  where myu='".$_REQUEST["u"]."' and myp='".$_REQUEST["p"]."'";

  $r = mysql_db_query("test",$sql);	
  $s =0;
  if($o = mysql_fetch_object($r)){
      $_SESSION["user"]="pass";
	echo "<meta http-equiv=refresh content='0; url=menu02.php'>";
	
  }else{
	echo "<meta http-equiv=refresh content='0; url=signin.php'>";
	echo $sql;
}
?>
<a href=signin.php>back to signin</a>