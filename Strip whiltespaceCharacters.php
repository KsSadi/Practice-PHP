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
	 if(isset($_POST['text'])){
		 global $txt;
		 $text=$_POST['text'];
		 echo trim($text,"."); ////left side remove 
		 echo rtrim($text,"."); ////right side remove
		 
	 }
	?>
	<form action="" method="post">
	<input type="text" name="text" value="<?php global $text;echo $text;?>"/>
	<input type="submit" name="submit"/>
	
	
	</form>




    </section>


<?php
	include 'include/footer.php';

?>