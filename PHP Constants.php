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
	echo $break;
	
	define("VALUE","I Love PHP",true); //true for case sensetive
	echo VALUE;
	
	function learnPHP(){
		return VALUE;
	}
	
	echo learnPHP();
	
	?>
    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>





</html>