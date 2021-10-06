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
		$name=array("Rakib","Akib","Badol","Nayem");
		$number=array(7,8,1,5,9,3);
		rsort($name); /// reverse
		sort($name); /// Ordered
		
		foreach($name as $nam)
		{
			echo $nam. "<br/>";
		}
		
		$age=array("Rakib"=>"20","Akib"=>"25","Badol"=>"22","Nayem"=>"40");
		//asort($age); ///Value ordered korbe
		ksort($age); ///Name ordered korbe
		foreach($age as $ages =>$value)
		{
			echo "Key =".$ages." , Value =".$value. "<br/>";
		}
		
	?>
	

    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>





</html>