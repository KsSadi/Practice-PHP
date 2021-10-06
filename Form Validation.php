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
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
		<table>
		<tr>
		<td>
		<span style="color:red"> * Requered Filled</span>
		
		
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"><span style="color:red"> *</span></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="email" name="email"><span style="color:red"> *</span></td>
			</tr>
			<tr>
				<td>Website: </td>
				<td><input type="text" name="website"><span style="color:red"> *</span></td>
			</tr>
			<tr>
				<td>Comment: </td>
				<td><textarea name="comment" rows="5" cols="40"> </textarea></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td><input type="radio" name="gender" value="female">Female 
				<input type="radio" name="gender" value="male">Male 
				<span style="color:red">*</span></td>
			</tr>
			
			<tr>
			<td> </td>
			<td> <input type="submit" name="submit" value="Submit"/> </td>
			</tr>
		</table>
		</form>
		
	
	
	<?php
	
		$name = $email = $website = $comment = $gender ="";
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$name    = validate($_POST["name"]);  /// validate for validation data 
			$email   = validate($_POST["email"]);
			$website = validate($_POST["website"]);
			$comment = validate($_POST["comment"]);
			$gender  = validate($_POST["gender"]);
		
		echo "Name: ". $name."<br/>"; 
		echo "E-mail: ". $email."<br/>"; 
		echo "Website: ". $website."<br/>"; 
		echo "Comment: ". $comment."<br/>"; 
		echo "Gender: ". $gender."<br/>"; 
		
		
		}
	
		function validate($data){  ///This Function is for validation all data 
			$data=trim($data); //Remove space
			$data=stripcslashes($data); // remove back slash/slash
			$data=htmlspecialchars($data); ///Script Chalate parbe na kew
			return $data;
			
		}
		
		
		
	?>
	
	
	
	
	
    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>





</html>