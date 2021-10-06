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
<title> Conditional Statement</title>
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
		//switch(n){
			//case label1;
			//code execute if n=label1;
			//break;
			
			//case label2;
		//	code execute if n=label2;
		//	break;
			
//case label3;
		//	code execute if n=label3;
		//	break;
		
		$coding="java";
		
		switch($coding){
			case "html":
			echo "I Love Html";
			
			break;
			
			case "PHP":
			echo "I Love PHP";
			
			break;
			
			case "java":
			echo "I Love Java";
			break;
			
			default:
			echo "I Love Programing";
			
			break;
		}
		
		
	
	?>
	
	
	
    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>

</html>