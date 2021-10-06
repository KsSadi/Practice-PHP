<?php 
$fonts="Arial";
$footer="Priyojon.com.bd";
$header="PHP Fundamental";
$fontclr="#fff";
$bg="#ddd";
$break="</br>";
$errname = $erremail = $errwebsite = $errcomment = $errgender ="";
?>
<?php
	
		$name = $email = $website = $comment = $gender ="";
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["name"])){
				$errname = "Name is Requred.";
			} else {
				$name    = validate($_POST["name"]);  /// validate for validation data 
			
			}
			if(empty($_POST["email"])){
			$erremail = "Email is Requred.";
			}
			elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
			 $erremail="Invalid Email Format";	
			}
			else {
			$email   = validate($_POST["email"]);
			}
			
			if(empty($_POST["website"])){
				$errwebsite = "Website is Requred.";
			}elseif (!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
			 $errwebsite="Invalid Web Format";	
			} else {
			$website = validate($_POST["website"]);
			}
			
			
			$comment = validate($_POST["comment"]);
			
			
			if(empty($_POST["gender"])){
				$errgender = "Gender is Requred.";
			} else {
			$gender  = validate($_POST["gender"]);
			}
		
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
	
		<span style="color:red"> * Requered Filled</span>
		
		
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"><span style="color:red"> *</span><?php echo $errname; ?></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email"><span style="color:red"> *</span><?php echo $erremail; ?></td>
			</tr>
			<tr>
				<td>Website: </td>
				<td><input type="text" name="website"><span style="color:red"> *</span><?php echo $errwebsite; ?></td>
			</tr>
			<tr>
				<td>Comment: </td>
				<td><textarea name="comment" rows="5" cols="40"> </textarea></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td><input type="radio" name="gender" value="female">Female 
				<input type="radio" name="gender" value="male">Male 
				<span style="color:red">*</span><?php echo $errgender; ?></td>
			</tr>
			
			<tr>
			<td> </td>
			<td> <input type="submit" name="submit" value="Submit"/> </td>
			</tr>
		</table>
		</form>
		
	
	
	
	
	
	
	
	
    </section>


    <section class="footeroption">
    <h2><?php echo $footer;?></h2>
    </section>

</section>
</body>





</html>