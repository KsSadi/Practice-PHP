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
	/*super gLOBAL Veriable
	$GLOBALS
	$_SERVER
	$_REQUEST
	$_POST
	$_GET
	$_FILE
	$_ENV
	$_COOKIE
	$_SESSION*/
//Globals	
	$x=5;
	$y=10;
	
	function math(){
			$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
	}
	math();
	echo $z;
//Server
	echo $_SERVER['PHP_SELF'];	//URL
	echo "<br/>";
	echo $_SERVER['SERVER_NAME'];	//Domain Name
	echo "<br/>";
	echo $_SERVER['SCRIPT_NAME'];	//Full Path
	echo "<br/>";
	echo $_SERVER['HTTP_USER_AGENT'];	//Browser Name
	echo "<br/>";
	echo $_SERVER['SERVER_ADDR'];	//IP Address
	
	
	?>
	
	
    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>





</html>