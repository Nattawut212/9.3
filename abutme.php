<html>
<?php 
session_start();
include('header.php');
?>
<?php

if(!isset($_SESSION["user"]) ||  $_SESSION["user"] !="pass") {
	echo "sorry";
	exit;
} ?>
hello my friend
  <?php include('footer.php'); ?>
