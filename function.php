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
    <?php
		function school($name,$year){
			echo"$name is Started $year<br/>";
			
		}
		
		school("State University Of Bangladesh","1992");
		school("North University Of Bangladesh","1999");
		
	////////
	function college($names="My College"){
			echo"$names is Started <br/>";
			}
		college("Sadi University Of Bangladesh");
		college("Sifat University Of Bangladesh");
		college();	
		
		function sum($x, $y){
			$z = $x+$y;
			return $z;
		}
		
		
		echo "5+10 = ".sum(5,10);
	
    ?>
	
	
		
    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>





</html>