<?php
	session_start();
	include 'include/header.php';
?>
	
    <section class="maincontent">
  <hr/>
	PHP Session
	<span style="float:right"> 
	<?php
		date_default_timezone_set('Asia/Dhaka'); //TimeZone
		echo "Time :".date ("h:i:sa")."<br/>";
?>
	</span>
	<hr/>
	 <?php
		$_SESSION['user']      = "sadi";
		$_SESSION ['password'] = "123";
		
		echo"Username is ".$_SESSION['user']."<br/>";
		
		echo"Password is ".$_SESSION['password']."<br/>";
		session_unset();
		session_destroy();
		
	 
	 
	 ?>
	
	
	
	
   
   
   
    </section>


<?php
	include 'include/footer.php';

?>