<html>
<?php 
session_start();
include('header.php');
?>
<li>s1em.php</li>
<li><a href="s2em.php">s2em.php</a></li>
<li><a href="s3em.php">s3em.php</a></li>
<li><a href="s4em.php">s4em.php</a></li>
<li><a href="s5em.php">s5em.php</a></li>
<li><a href="s6em.php">s6em.php</a></li>
<li><a href="s7em.php">s7em.php</a></li>
</ol>
<br>
<?php 
  if(file_exists("s3em.php")) include("s3em.php"); 
  include('footer.php');
?>


	

</body></html>