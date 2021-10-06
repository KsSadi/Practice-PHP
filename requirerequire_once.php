<?php
	session_start();
	include 'include/header.php';
	////setcookie('visited',"",time()-3600);  ///cookies deleted
?>
	
    <section class="maincontent">
  <hr/>
	PHP Filters
	<span style="float:right"> 
	<?php
		date_default_timezone_set('Asia/Dhaka'); //TimeZone
		echo "Time :".date ("h:i:sa")."<br/>";
?>
	</span>
	<hr/>
	
	 <?php 
	require "include/new.php";
	
	?>
	




    </section>


<?php
	include 'include/footer.php';

?>