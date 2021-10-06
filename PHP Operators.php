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
 
  
   <hr/>
  01.Arithmetic Operators [  + - * / % **]
   <hr/>
	<?php
		$x=5;
		$y=2;
		echo $x+$y;	
	?>
	
	<hr/>
  02.Assignment Operators 
  <hr/>
	<?php
	
	$x=5; //Assign hobe 5 value ta X a . = "Operator" & x holo operand
	
	$x +=5;
	echo $x;	
	?>
	
	<hr/>
  03.Comparison Operator
   <hr/>
	<?php
		$x=100;
		$y="100";
		var_dump($x==$y); // Its Check Only Value
		var_dump($x===$y); // Its Check Also Data Type	
		var_dump($x<>$y); // Its Check Not equal	
		var_dump($x!=$y); // Its Check Not equal	
		var_dump($x<=$y); // Its Check Larger or equal	
	?>
	
	
	<hr/>
  04.Increment/Decrement Operator
  <hr/>
	<?php
	
	$x=5; 
	
	echo ++$x;	//age increment korbe thn return
	echo $x++; //ageireturn korbe increment korbe na 
	?>
	<hr/>
  05.Logical Operator
  <hr/>
	<?php
	$a=40;
	$x=50; 
	
	//if($a==40 or $x==50) //(||)2tai sotto hote pare abar 1 taw hote pare
	//if($a!==30) // Not True
	//if($a==40 xor $x==50) //()2 ta theke 1 ta sotto hobe 2 tai sotto howa jabe na
	if($a==40 and $x==50) //(&&)2 tai sotto howa lagbe
		echo "Training With Live Project";
	else
		echo "Wrong";
	?>
	
<hr/>
  06.String Operator
  <hr/>
	<?php
	$a="Training With";
	$x=" Live Project"; 
	$z=$a.$x; // Concatenation Operator dia add kora 
	$a.=$x; //// Concatenation Operator dia add kora 
	echo $a;
	
	
	?>
	<hr/>
  07.Array Operator
  <hr/>
	<?php
	$x = array(
		"a" => "Dhaka",
		"b" => "Sylhet"
		);
		
	$y = array(
		"c" => "Comilla",
		"d" => "Rajshahi"
		);
	
	var_dump($x+$y);
	var_dump($x==$y);
	var_dump($x!=$y);
	
	?>

    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>





</html>