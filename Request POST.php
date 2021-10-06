<?php 
$fonts="Arial";
$footer="Priyojon.com.bd";
$header="PHP Fundamental";
$fontclr="#fff";
$bg="#ddd";
$break="</br>";
?>
<!doctype html>
<html>
<title> PHP Syntex</title>
<style>
    .phpcoading{width: 900px; margin: 0 auto;background:<?php echo $bg;?>;min-height:400px;}
    .headeroption ,.footeroption {background:#444; color:#fff;text-align:center;padding:20px;}
    .maincontent{min-height:400px;padding:20px;}
	.headeroption h2, .footeroption h2{margin:0}
	body{font-family:<?php echo $fonts;?>}

</style>
<body>

<section class="phpcoading">
    <section class="headeroption">
        <h2><?php echo $header;?></h2>
    </section>

    <section class="maincontent">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			Username: <input type="text" name="username"/>
			<input type="submit" value="Submit"/>
		</form>
	
	
	<?php
	
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$name=$_REQUEST['username'];
			//$name=$_POST['username']; //Post method
			if(empty($name)){
				echo "<span style='color:red;'>User Name Must Not Empty </span>";
			}
		else{ echo "<span style='color:green;'>You Have Submited : " .$name."</span>";
		}			
		}
	?>
	
	
	
	
	<a href="text.php?msg=Good&text=Bye">Sent data</a>
    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>





</html>